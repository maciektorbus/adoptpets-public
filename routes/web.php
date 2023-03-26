<?php

use App\Http\Controllers\DonateController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StripeController;
use App\Models\Pet;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {

Route::get('/', function () {
		$sAccessToken = 'IGQVJVUGxxQ1BvU09rWVVMQlE2WHkzbHF4emY5YmpYWG9kM2JoOS1hMFo5SkxpQUxQNDhxOU9BcFlYc09SWGRPRmNkRlV2bmRDOG9jNmpjUUU5a2YzMjZApRFl6b0RMdEVLdnB1Unl3';
		
		$response = Http::get('https://graph.instagram.com/me/media?fields=id,caption&access_token='.$sAccessToken);
    
		foreach ($response->json()['data'] as $arrData) {
			$arrMediaIDs[] = $arrData['id'];
		}

		foreach (array_slice($arrMediaIDs, 1 , 6) as $sMediaID) {
			$response = Http::get('https://graph.instagram.com/'.$sMediaID.'?fields=media_url,permalink&access_token='.$sAccessToken);
			$arrMediaURLs[$response->json()['media_url']] = $response->json()['permalink'];
		}
		
		return view('welcome', ['instagramphotos' => $arrMediaURLs]);
})->name('home');

Route::get('/pets', [PetController::class, 'publicIndex'])->name('petslisting');
Route::get('/pets/{id}', function ( int $id) {
	return view('pets.public.show', ['pet' => Pet::find($id)]);
})->name('petdetails');

Route::get('/contact', function () {
	return view('contact');
})->name('contact');


Route::get('/donate', function () {
	return view('donate');
})->name('donate');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('admin/pets', PetController::class)->middleware(['auth', 'verified']);



Route::resource('donates', DonateController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit')->middleware(['auth', 'verified']);
Route::patch('/settings', [SettingsController::class, 'update'])->name('settings.update')->middleware(['auth', 'verified']);



Route::get('/billing-portal', function (Request $request) {
	return $request->user()->redirectToBillingPortal();
})->name('portal');



Route::get('/product-checkout', function (Request $request) {
	return $request->user()->checkout('price_1MnJtOIRCLhYUiAOTuQTExSV');
});

Route::get('/subscription-checkout/{priceID}', function (Request $request, string $priceID) {
	return $request->user()
			->newSubscription('default', $priceID)
			->checkout();
})->name('subscription');

require __DIR__.'/auth.php';

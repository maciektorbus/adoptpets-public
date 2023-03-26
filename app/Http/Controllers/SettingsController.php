<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller {
	public function edit() {
		return view('settings', ['app_name' => config('app.name')]);
	}

	public function update(Request $request) {
		config(['app.name' => $request->input('app_name')]);
		return redirect(route('settings.edit'));
	}
}

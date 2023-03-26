<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PetController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('pets.index', ['pets' => Pet::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request): RedirectResponse {
		$validated = $request->validate([
			'name' => 'required|string|max:100',
			'age' => 'required|numeric',
			'sex' => 'required|numeric',
			'short_description' => 'required|string|max:255',
			'description' => 'required|string|max:5000',
			'type' => 'required|string',
		]);

		if ($request->hasFile('photo')) {
			$validated['photo'] = $request->file('photo')->store('photos', 'public');
		}

		Pet::create($validated);

		return redirect(route('pets.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pet  $pet
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pet $pet)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Pet  $pet
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Pet $pet)
	{
		return view('pets.edit', ['pet' => $pet]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Pet  $pet
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Pet $pet) : RedirectResponse {
		$validated = $request->validate([
			'name' => 'required|string|max:100',
			'age' => 'required|numeric',
			'sex' => 'required|numeric',
			'short_description' => 'required|string|max:255',
			'description' => 'required|string|max:5000',
			'type' => 'required|string',
		]);

		if ($request->hasFile('photo')) {
			$validated['photo'] = $request->file('photo')->store('photos', 'public');
		}

		$pet->update($validated);

		return redirect(route('pets.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Pet  $pet
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Pet $pet) : RedirectResponse {
		$pet->delete($pet);

		return redirect(route('pets.index'));
	}

	public function publicIndex() {
		return view('pets.public.index', ['pets' => Pet::all()]);
	}

	public function publicShow(Pet $pet) {
		return view('pets.public.show', ['pet' => $pet]);
	}
}

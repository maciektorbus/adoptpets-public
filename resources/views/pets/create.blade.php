<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Create a pet') }}
		</h2>
	</x-slot>

	<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
		<form method="POST" action="{{ route('pets.store') }}" enctype="multipart/form-data">
			@csrf

			<div class="form-group">
				<label for="name">Name: </label>
				<input class="form-control" type="text" name="name" id="name" required>
				<x-input-error :messages="$errors->get('name')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="age">Age: </label>
				<input class="form-control" type="number" name="age" id="age" required>
				<x-input-error :messages="$errors->get('age')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="sex">Sex: </label>
				<select class="form-control" name="sex" id="sex" required>
					<option value="">--Please choose an option--</option>
					<option value="1">Male</option>
					<option value="2">Female</option>
				</select>
				<x-input-error :messages="$errors->get('sex')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="short_description">Short Description</label>
				<textarea class="form-control" id="short_description" name="short_description" rows="5" cols="33" required></textarea>
				<x-input-error :messages="$errors->get('short_description')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" rows="15" cols="90" required></textarea>
				<x-input-error :messages="$errors->get('description')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="type">Type: </label>
				<select class="form-control" name="type" id="type" required>
					<option value="">--Please choose an option--</option>
					<option value="dog">Dog</option>
					<option value="cat">Cat</option>
				</select>
				<x-input-error :messages="$errors->get('type')" class="mt-2" />
			</div>

			<div class="form-group">
				<label for="photo">Photo: </label>
				<input class="form-control" type="file" name="photo" id="photo">
				<x-input-error :messages="$errors->get('photo')" class="mt-2" />
			</div>

			<x-primary-button class="mt-4">{{ __('Create') }}</x-primary-button>
		
		</form>
	</div>
</x-app-layout>
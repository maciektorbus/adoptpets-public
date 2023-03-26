<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Pets') }}
		</h2>
		<a class="btn btn-small btn-primary mt-3" href="{{ route('pets.create') }}">Create a pet resource</a>
	</x-slot>

	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Age</td>
				<td>Sex</td>
				<td>Short Description</td>
				<td>Description</td>
				<td>Type</td>
			</tr>
		</thead>
		<tbody>
			@foreach($pets as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->age }}</td>
				<td>{{ $value->sex }}</td>
				<td>{{ $value->short_description }}</td>
				<td>{{ $value->description }}</td>
				<td>{{ $value->type }}</td>

				<td>
					<a class="btn btn-small btn-info" href="{{ route('pets.edit', $value->id) }}">Edit this pet</a>
				</td>
				<td>
					<form method="POST" action="{{ route('pets.destroy', $value->id) }}">
						@csrf
						@method('delete')
						<input type="submit" style="background-color: #dc3545;" class="btn btn-small btn-danger" value="Delete" />
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</x-app-layout>
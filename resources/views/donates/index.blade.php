<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Donates') }}
		</h2>
	</x-slot>

	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>User</td>
				<td>Pet</td>
				<td>Amount</td>
				<td>Message</td>
			</tr>
		</thead>
		<tbody>
			@foreach($donates as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->user_id }}</td>
				<td>{{ $value->pet_id }}</td>
				<td>{{ $value->amount }}</td>
				<td>{{ $value->message }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</x-app-layout>
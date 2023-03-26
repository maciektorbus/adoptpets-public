<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Profile') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
			<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
				<div class="max-w-xl">
					<form method="post" action="{{ route('settings.update') }}" class="mt-6 space-y-6">
						@csrf
						@method('patch')

						<div>
							<x-input-label for="app_name" :value="__('Application Name')" />
							<x-text-input :value="$app_name" id="app_name" name="app_name" type="text" class="mt-1 block w-full" autocomplete="app_name" />
							<x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
						</div>

						<div class="flex items-center gap-4">
							<x-primary-button>{{ __('Save') }}</x-primary-button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
				<div class="max-w-xl">

				</div>
			</div>

			<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
				<div class="max-w-xl">

				</div>
			</div>
		</div>
	</div>
</x-app-layout>
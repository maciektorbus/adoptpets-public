<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Adopt Pets</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<style>
		body {
			background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
		}

		.container {
			max-width: 960px;
		}

		.pricing-header {
			max-width: 700px;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}
	</style>


</head>

<body>

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check" viewBox="0 0 16 16">
			<title>Check</title>
			<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
		</symbol>
	</svg>

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="bootstrap" viewBox="0 0 118 94">
			<title>Bootstrap</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
		</symbol>
		<symbol id="instagram" viewBox="0 0 16 16">
			<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
		</symbol>
	</svg>

	<main>
		<div class="container">
			<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

				<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
					<li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">{{ __('messages.home') }}</a></li>
					<li><a href="{{ route('petslisting') }}" class="nav-link px-2 link-dark">{{ __('messages.browse') }}</a></li>
					@auth
					<li><a href="{{ route('donate') }}" class="nav-link px-2 link-dark">{{ __('messages.donate') }}</a></li>
					@endauth
					<li><a href="{{ route('contact') }}" class="nav-link px-2 link-dark">{{ __('messages.contact') }}</a></li>
					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
					<li><a class="nav-link px-2 link-dark" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
					@endforeach
				</ul>

				@if (Route::has('login'))
				<div class="col-md-3 text-end">
					@auth
					<a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2" role="button">{{ __('messages.dashboard') }}</a>
					@else
					<a href="{{ route('login') }}" class="btn btn-outline-primary me-2" role="button">{{ __('messages.login') }}</a>
					@if (Route::has('register'))
					<a href="{{ route('register') }}" class="btn btn-primary" role="button">{{ __('messages.signup') }}</a>
					@endif
					@endauth
				</div>
				@endif
			</header>
		</div>

		<div class="container py-3">

			<header>
				<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
					<h1 class="display-4 fw-normal">Donate</h1>
					<p class="fs-5 text-muted">Support our animal shelter by donating either once-off or recurring. Any support is highly appreciated. Thank you!</p>
					<p class="fs-5 text-muted">Not interested in monthly support? Donate once-off any amount you wish.</p>
					<a href="{{ url('/product-checkout') }}" class="btn btn-outline-primary me-2" role="button">Single Donate</a>
				</div>
			</header>

			<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Basic Support</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">10<small class="text-muted fw-light">/mo</small></h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>5 packs of dog food</li>
								<li>5 packs of cat food</li>
								<li>Email support</li>
							</ul>
							<a href="{{ route('subscription', 'price_1MnNPHIRCLhYUiAOcKcPhrv7') }}" class="w-100 btn btn-lg btn-primary" role="button">Donate</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Standard Support</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">20<small class="text-muted fw-light">/mo</small></h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>10 packs of dog food</li>
								<li>10 packs of cat food</li>
								<li>Priority email support</li>
							</ul>
							<a href="{{ route('subscription', 'price_1MnNPgIRCLhYUiAOgrBpDbgE') }}" class="w-100 btn btn-lg btn-primary" role="button">Donate</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm border-primary">
						<div class="card-header py-3 text-bg-primary border-primary">
							<h4 class="my-0 fw-normal">Extended Support</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">50<small class="text-muted fw-light">/mo</small></h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>20 packs of dog food</li>
								<li>20 packs of cat food</li>
								<li>Phone and email support</li>
							</ul>
							<a href="{{ route('subscription', 'price_1MnNQFIRCLhYUiAOADTQLlOl') }}" class="w-100 btn btn-lg btn-primary" role="button">Donate</a>
						</div>
					</div>
				</div>
			</div>

			<h2 class="display-6 text-center mb-4">Compare plans</h2>

			<div class="table-responsive">
				<table class="table text-center">
					<thead>
						<tr>
							<th style="width: 34%;"></th>
							<th style="width: 22%;">Basic</th>
							<th style="width: 22%;">Standard</th>
							<th style="width: 22%;">Extended</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" class="text-start">Pet Food</th>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
						</tr>
						<tr>
							<th scope="row" class="text-start">Support</th>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
						</tr>
					</tbody>

					<tbody>
						<tr>
							<th scope="row" class="text-start">Walk a pet</th>
							<td></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
						</tr>
						<tr>
							<th scope="row" class="text-start">Photo with a pet</th>
							<td></td>
							<td></td>
							<td><svg class="bi" width="24" height="24">
									<use xlink:href="#check" />
								</svg></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				<div class="col-md-4 d-flex align-items-center">
					<a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
						<svg class="bi" width="30" height="24">
							<use xlink:href="#bootstrap" />
						</svg>
					</a>
					<span class="mb-3 mb-md-0 text-muted">&copy; 2023 Adopt Pets</span>
				</div>

				<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
					<li class="ms-3"><a class="text-muted" href="#">
							<svg class="bi" width="24" height="24">
								<use xlink:href="#instagram" />
							</svg>
					</li>
				</ul>
			</footer>
		</div>

	</main>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<title>{{ $title }} | {{ config('app.name', 'AdminKit') }}</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
	<link rel="canonical" href="https://demo.adminkit.io/pages-sign-in.html" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
	<link href="{{ asset('css/light.css') }}" rel="stylesheet" />
  </head>
  <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<main class="d-flex w-100 h-100">
	  <div class="container d-flex flex-column">
		<div class="row vh-100">
		  <div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
			<div class="d-table-cell align-middle">
              @if (isset($header))
                <div class="text-center mt-4">
                  {{ $header }}
                </div>
              @endif
			  <div class="card">
				<div class="card-body">
				  <div class="m-sm-4">
                    @if (isset($avatar))
                      <div class="text-center">
                        {{ $avatar }}
                      </div>
                    @endif
					{{ $slot }}
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</main>
	<script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

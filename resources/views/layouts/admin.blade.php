<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />
	<title>{{ $title }} | {{ config('app.name', 'AdminKit') }}</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
	<link rel="canonical" href="https://github.com/shawonk007/libramium-lms" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
	<link href="{{ asset('css/light.css') }}" rel="stylesheet" />
  </head>

  <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
	  <x-sidebar />
	  <div class="main">
		<x-navbar />
		<main class="content p-4">
		  <div class="container-fluid p-0">
            @if (isset($header))
              {{ $header }}
            @endif
            {{ $slot }}
		  </div>
		</main>
		<x-footer />
	  </div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(function () {
          $("#datatables").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#datatables_wrapper .col-md-6:eq(0)');
        });
    </script>
    @if (isset($script))
      {{ $script }}
    @endif
  </body>
</html>

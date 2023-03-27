<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="autojetplane">
	<meta name="keywords" content="autojetplane, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    @yield('title')
	@include('admin.style')
    @stack('styles')
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">

    <div class="wrapper">
        @include('admin.adminsidebar')
        <div class="main">
            @include('admin.adminnavbar')
            <main class="content">
                @yield('content')
            </main>
            @include('admin.adminfooter')
        </div>

        @include('admin.javascript')
    </div>

    @stack('scripts')
</body>






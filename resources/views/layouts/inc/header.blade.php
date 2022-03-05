<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    


   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link href="{{ asset('admin/css/all.min.css') }}" rel="stylesheet">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Theme style -->
 <link href="{{ asset('admin/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
 <link href="{{ asset('admin/css/icheck-bootstrap.min.css') }}" rel="stylesheet">

 

 
  <link href="{{ asset('admin/css/adminlte.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/summernote-bs4.min.css') }}" rel="stylesheet">
   
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  
  </div>

@extends('layouts.base')
@section('style-head')
<link href="css/plugins.css" rel="stylesheet" type="text/css" media="all">   
<link href="css/theme.css" rel="stylesheet" type="text/css" media="all">  
<link href="css/icon-fonts.css" rel="stylesheet" type="text/css" media="all">
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all">  
@endsection
@section('style-theme')
{{-- <link href="css/app.css" rel="stylesheet" type="text/css" media="all">   --}}
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300%7CMontserrat:400,700%7CRaleway:400,200,300' rel='stylesheet' type='text/css'>    
@endsection

@section('body')
    @include('templates.purefive.header')    
    @yield('content')
    @include('templates.purefive.footer')
@endsection


@section('script-end')
<script src="js/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script src="js/plugins.js"></script>             
<script src="js/scripts.js"></script> 
@endsection
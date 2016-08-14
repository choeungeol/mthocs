@extends('layouts.admin')

@section('content')
    <div>Test</div>
@endsection

@section('css')
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
@endsection

@section('scripts.header')
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
@endsection

@section('scripts.footer')
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="js/admin.js"></script>
@endsection
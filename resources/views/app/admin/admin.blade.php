@include('app.admin.layout.header')
@include('app.admin.layout.left')
@include('app.admin.layout.top')
<section class="page-content" ng-controller="MainController">
    @yield('content')
</section>
@include('app.admin.layout.footer')
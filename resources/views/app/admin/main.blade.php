@extends('app.admin.admin')

<!-- 컨텐츠 -->
@section('content')
    <section class="page-content" style="padding:0px; margin:0px;">
        <div ui-view="adminContent"></div>
    </section>
@endsection

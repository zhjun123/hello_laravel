<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('admin/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('admin/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('admin/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
    <script src="{{asset('admin/js/echarts.min.js')}}"></script>
    @yield('admin-css')
</head>

<body>


@include('admin.layouts.top_nav')







<div class="tpl-page-container tpl-page-header-fixed">


    @include('admin.layouts.left_nav')





   @yield('admin-content')

</div>


<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/amazeui.min.js')}}"></script>
<script src="{{asset('admin/js/iscroll.js')}}"></script>
<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{asset('js/public.js')}}"></script>
@yield('admin-js')
</body>

</html>
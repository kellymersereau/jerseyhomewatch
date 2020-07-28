<!DOCTYPE HTML>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title>
        @if( ! empty($title))
            {{ $title }}
        @else
            @yield('title')
        @endif
    </title>
    <meta name="description" content="@if(! empty($seo_description)){{ $seo_description }}@endif">
    <meta name="keywords" content="@if(! empty($seo_keywords)) {{ $seo_keywords }}@endif">
    <link rel="canonical" href="@if(! empty($canonicalUrl)){{ $canonicalUrl }}@endif">
    <meta property="og:title" content="@if(! empty($title)){{ $title }}@endif">
    <meta property="og:description" content="@if(! empty($seo_description)){{ $seo_description }}@endif">
    <meta property="og:image" content="">
    
    <link rel="shortcut icon" href="{{ secure_asset('img/favicon.ico') }}">
    <link rel="stylesheet" media="screen" href={{ mix("/css/app.css") }}>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="@if(! empty($body_class)){{ $body_class }}@else @yield('body_class')@endif">
    
    @include('partials.navigation')
    
    <div data-role="content" class="content-wrapper">
        @yield('content')
    </div>
    
    @include('partials.footer')
    
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src={{ mix("/js/app.js") }}></script>
</body>

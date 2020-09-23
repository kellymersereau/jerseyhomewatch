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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                                                          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K5QP989');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="@if(! empty($body_class)){{ $body_class }}@else @yield('body_class')@endif">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5QP989"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    @include('partials.navigation')
    
    <div data-role="content" class="content-wrapper @if(! empty($full_width) && $full_width === true)
        full-width @endif">
        @yield('content')
    </div>
    
    @include('partials.footer')
    
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src={{ mix("/js/app.js") }}></script>
</body>

@include('Backend.layouts.footer')
@include('Backend.layouts.html_head')
@include('Backend.layouts.meta_tag')
@include('Backend.layouts.navbar')
@include('Backend.layouts.plugins')
@include('Backend.layouts.sidebar')

@yield('html_head')

@section('title', 'Admin')
<title id="htmlTitle"> @yield('title') | कृषिकर्म</title>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @yield('navbar')
    @yield('sidebar')
    @yield('content')
    @yield('footer')
    @yield('plugins')
  </div>
</body>

</html>
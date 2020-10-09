<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.style')
        @yield('css')
        <style type="text/css" media="screen">
            .section-space--ptb_80
            {
                padding-top:45px;
                padding-bottom:15px;
            }
            .section-space--pb_30 
            {
                padding-bottom:1px;
            }
            
        </style>
</head>
<body>
 <!--====================  header area ====================-->
    @include('layouts.header')
<!--====================  End of header area  ====================-->
    <div class="site-wrapper-reveal">
        @yield('content')
    </div> 

<!--====================  footer area ====================-->
    @include('layouts.footer')
<!--====================  End of footer area  ====================-->

<!--====================  scroll top ====================-->
    {{-- <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a> --}}
    {{-- <a href="#" class="scroll-top" id="scroll-top">
        <i class="fas fa-comment"></i>
        <i class="fas fa-comment"></i>
    </a> --}}
    @include('layouts.chatting-icon')


<!--====================  End of scroll top  ====================-->


<!--====================  mobile menu overlay ====================-->
    @include('layouts.mobile_menu')
<!--====================  End of mobile menu overlay  ====================-->

<!-- JS== -->
    @include('layouts.scripts')
    @yield('script')

</body>

</html>
@include('frontend.inc.header')



        <!-- header-area -->
        @include('frontend.inc.nav')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
          @yield('content')
        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
       @include('frontend.inc.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->
@include('frontend.inc.script')

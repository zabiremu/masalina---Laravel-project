<script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.')}}"></script>
<script src="{{ asset('frontend/assets/js/element-in-view.js')}}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js')}}"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
        break;    
        case 'success':
            toastr.success("{{ Session::get('message') }}");
        break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
        break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
        break;
    }
    @endif
</script>
</body>
</html>
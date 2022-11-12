@php
    $data = App\Models\Footer::find(1);
@endphp

<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{  $data->number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{  $data->shortTitle }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">{{  $data->address }}</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{  $data->address_details }}</p>
                        <a href="mailto:{{ $data->email }}" class="mail">{{  $data->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">socially connect</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{{  $data->socially }}</p>
                        <ul class="footer__social__list">
                            <li><a href="{{  $data->fb }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{  $data->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{  $data->behance }}"><i class="fab fa-behance"></i></a></li>
                            <li><a href="{{  $data->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{  $data->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>Copyright @ Theme_Pure 2021 All right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
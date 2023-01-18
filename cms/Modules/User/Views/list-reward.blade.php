@extends('Core::layouts.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
@endsection
@section('bodyclass', 'list-reward')
@section('content')
    <section class="content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3>Danh sách trúng thưởng</h3>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            @desktop
            <div class="row row-cols-6">
            @elsedesktop
            <div class="row row-cols-2">
            @enddesktop
                @foreach($data as $key => $value)
                <!-- Single Advisor-->
                <div class="col">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                alt="">
                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>{{ $value['receiver_name'] }}</h6>
                            <p class="designation">STK: {{ $value['bank_number'] }}</p>
                            <p class="designation">Ngân Hàng: {{ $value['bank_name'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

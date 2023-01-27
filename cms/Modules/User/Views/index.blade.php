@extends('Core::layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ cxl_asset('assets/css/hc-canvas-luckwheel.css') }}">
@endsection
@section('bodyclass', 'luckwheel')
@section('content')
    <div class="wrapper typo" id="wrapper">
        <section id="luckywheel" class="hc-luckywheel">
            <div class="hc-luckywheel-container">
                <canvas class="hc-luckywheel-canvas" width="350px" height="350px">
                    Vòng Xoay May Mắn
                </canvas>
            </div>
            <a class="hc-luckywheel-btn" href="javascript:;">Xoay</a>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ cxl_asset('assets/js/hc-canvas-luckwheel.js') }}"></script>
    <script src="{{ cxl_asset('assets/js/sweetalert2.js') }}"></script>
    <script type="text/javascript" src="{{ cxl_asset('assets/js/luckwheel-config.js') }}">
    </script>
@endsection

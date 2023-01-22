@extends("Core::layouts.app")
@section('bodyclass', 'qr')
@section('content')
<section class="content">
    <div class="container">
        <div class="thumb">
            {{  QrCode::size(200)->generate(config('app.url') . "/user/luckwheel/" . Auth::user()->token) }}
        </div>
    </div>  
</section>
@endsection
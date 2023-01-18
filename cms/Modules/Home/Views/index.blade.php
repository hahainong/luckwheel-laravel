@extends('Core::layouts.app')
@section('bodyclass', 'home')
@section('content')
    <section class="content">
            <div class="diamond">
                <div class="content-link">
                    <p>{{ __('Chào mừng bạn đến với sự kiện quay lì xì tết 2023 của mình nhấn vào liên kết bên dưới để tạo vòng quay cho mình nhé') }}
                    </p>
                    <a href="{{ Auth::user() ? route('client.user.luckwheel', ['token' => Auth::user()->token]) : route('login') }}">
                        Nhấp vào đây
                    </a>
                </div>
            </div>
    </section>
@endsection

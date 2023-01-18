@extends('Core::layouts.app')
@section('bodyclass', 'profile')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">{{ Auth::user()->name }}</h4>
                            <div class="d-flex justify-content-center pt-4">
                                <a href="" class="edit-user">
                                    <span class="fa fa-user-pen"></span>
                                    Edit
                                </a>
                            </div>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="{{ route('client.user.qr', ['token' => Auth::user()->token]) }}">
                                        <span class="fa fa-qrcode"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

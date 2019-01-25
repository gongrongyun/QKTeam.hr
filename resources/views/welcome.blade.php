@extends('Layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="div_container justify-content-center">
            <a href="{{ route('enroll') }}">
                <div class="entranceButton button1">
                    <img src="/storage/images/register.png" class="icon_image" alt="register" width="200px" height="200px">
                </div>
            </a>
            <a href="{{ route('login') }}">
                <div class="entranceButton button2">
                    <img src="/storage/images/icon-user_login.png" class="icon_image" alt="login" width="200px" height="200px">
                </div>
            </a>
        </div>
    </div>
@endsection

@extends('Layouts.app')

@section('content')
    <form method="post" action="api/register">
        @csrf

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input id="name" type="text" class="form-control" name="name" placeholder="NAME" required>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input id="password" type="password" class="form-control" name="password" placeholder="PASSWORD" required>

            </div>
        </div>

        <div class="form-group mb-0">
            <div class="col-md-6 offset-md-3">
                <button class="btn btn-primary btn-block" type="submit">
                    {{ __('register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
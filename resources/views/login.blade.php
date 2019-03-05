@extends('Layouts.app')

@section('content')
    <div calss="container">
        <div class="offset-md-3 justify-content-center mt-4">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="post" action="/api/login">
                            @csrf

                            <div class="form-group row">
                                {{--<label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('NAME') }}</label>--}}
                                <div class="col-md-6 offset-md-3">
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-valid' : '' }}" name="name" placeholder="NAME" value="{{ old('name') }}" required>

                                    @if($errors->has('name'))
                                        <span class="invalid-feedback" style="display: inline-block;">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                {{--<label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('PASSWORD') }}</label>--}}
                                <div class="col-md-6 offset-md-3">
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-valid' : '' }}" name="password" placeholder="PASSWORD" value="{{ old('password') }}" required>

                                    @if($errors->has('password'))
                                        <span class="invalid-feedback" style="display: inline-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    @if(isset($message))
                                        <strong>{{ $message }}</strong>
                                    @endif
                                    @if(session('message'))
                                        <span class="invalid-feedback" style="display: inline-block">
                                            <strong>{{ session('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button class="btn btn-primary btn-block" type="submit">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
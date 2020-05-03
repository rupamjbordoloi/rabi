@extends('admin.layout.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
                <form role="form" method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control"
                                placeholder="{{ __('Email') }}" type="email" name="email"
                                value="{{ old('email','admin@admin.com') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control"
                                name="password" placeholder="{{ __('Password') }}" type="password" value="123456"
                                required>
                        </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheckLogin">
                            <span class="text-muted">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">{{ __('Sign in') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
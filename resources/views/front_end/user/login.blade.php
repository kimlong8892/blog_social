@extends('front_end.master')

@section('main')
    <form class="form-signin mt-3 mb-3" autocomplete="off" method="POST" action="{{ route('user.login.post') }}">
        @if (session('error-login'))
            <div class="alert alert-danger text-center">
                {{ session('error-login') }}
            </div>
        @endif
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Đăng nhập</h1>

        <label for="inputEmail" class="sr-only">Địa chỉ email</label>
        <input name="email" style="margin-bottom: 15px;" type="email" id="inputEmail" class="form-control" placeholder="Địa chỉ email..." required="" autofocus="">

        <label for="inputPassword" class="sr-only">Mật khẩu</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu..." required="">

        <button class="btn btn-lg btn-primary btn-block mt-2 mb-2" type="submit">Đăng nhập</button>
    </form>
@endsection

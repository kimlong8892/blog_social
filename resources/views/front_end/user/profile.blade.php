@extends('front_end.master')

@section('head')
    <title>{{ $user->name }} - Trang cá nhân</title>
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12 text-center p-3">
            <div class="member">
                <img style="border-radius: 50%; border: solid 1px blue;" src="{{ asset('theme/eterna/assets/img/team/team-1.jpg') }}" width="50%">
                <h4>{{ $user->name }}</h4>
                <span>{{ $user->bio }}</span>
            </div>
        </div>
    </div>
@endsection

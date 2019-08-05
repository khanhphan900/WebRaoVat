@extends('layout.main')

@section('title')
    Đăng ký
@endsection

@section('content')
    <form method="post" action="{{asset('register')}}" id="form-register">
        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
        <h2>Đăng ký</h2>
        <input type="text" name="name" id="name" placeholder="User Name . . ." class="form-control m-2">
        <input type="password" name="password" id="password"  placeholder="Password . . ." class="form-control m-2">
        <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="Re-password . . ." class="form-control m-2">
        <input type="text" name="email" id="email"  placeholder="Email/SĐT . . ." class="form-control m-2">
        <button class="btn btn-primary btn-sm">Đăng ký</button>
    </form>    
@endsection
@extends('layout.mainLogin')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <form method="post" action="{{asset('login')}}" id="form-login">
        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
        <h2>Đăng nhập</h2>
        <input type="text" name="user_input" id="user_input" placeholder="User Name  or Email. . ." class="form-control m-2">
        <input type="password" name="password" id="password"  placeholder="Password . . ." class="form-control m-2">
        <button class="btn btn-primary btn-sm">Đăng Nhập</button>
    </form>    
@endsection
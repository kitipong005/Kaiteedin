@extends('layouts.main')
@section('header')
    @include('layouts.navbar')
    @include('layouts.search')
@endsection
@section('contents')
    @if (Session::has('loginError'))
        <script>
            alert('Email หรือ Password ไม่ถูกต้อง !!!');
        </script>
    @endif
@endsection
@section('scripts')
    <script>
        $(function(){
            $('#gotoRegisModal').on('click',function(e){
                e.preventDefault();
                 $('#loginModal').modal('hide');
                 $('#regisModal').modal('show');
            });
            $('#gotoLoginModal').on('click',function(e){
                e.preventDefault();
                $('#regisModal').modal('hide');
                $('#loginModal').modal('show');
            })
        })
    </script>
@endsection
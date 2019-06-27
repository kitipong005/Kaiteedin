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
<div class="container-fluid">
    <div class="row">
        @foreach ($posts as $post)
        @php
            $images = unserialize($post->image);
        @endphp
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('img/home/'.$images[0])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->topic}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
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
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
    <div class="row mb-1">
        <div class="col-md-4 text-center mt-5">
            <h2 style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                โครงการที่น่าสนใจ</h2>
        </div>
    </div>
    {{-- end row title --}}
    <div class="row mb-2">
        @foreach ($posts as $post)
        @php
        $images = unserialize($post->image);
        
        @endphp
        <div class="col-md-3">
            <div class="card border-danger img-overlay">
                <a href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}" class="text-decoration-none">
                <img src="{{asset('img/home/'.$images[0])}}" class="card-img-top" alt="...">
                <span class="card-highlight">โครงการน่าสนใจ</span>
                <div class="text-overlay">
                    <div class="text-show"><i class="fas fa-eye"></i> ดูรายละเอียด</div>
                </div>
                <div class="card-body">
                    @if (strlen($post->topic)>=199)
                        @php
                            $topic = iconv_substr($post->topic, 0, 199,"UTF-8") . "...";
                        @endphp
                        <h5>{{$topic}}</h5>
                    @else
                        <h5>{{$post->topic}}</h5>
                    @endif
                    <hr>
                    <p class="text-muted small"><i class="fas fa-map-marker"></i> {{$post->district}}, {{$post->province}}</p>
                    <p class="text-muted small"><i class="fab fa-btc"></i> {{$post->price}}</p>
                    <p class="text-muted small"><i class="fas fa-bed"></i> {{$post->bedroom}} <i class="fas fa-bath"></i> {{$post->bathroom}}</p>
                    <p class="text-muted small"><i class="fas fa-building"></i> {{$post->prop}}</p>
                    {{-- <a
                        href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->topic}}</a> --}}
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{asset('img/home/'.$images[0])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a
                        href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->topic}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{asset('img/home/'.$images[0])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a
                        href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->topic}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{asset('img/home/'.$images[0])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a
                        href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->topic}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- end row detail --}}
    <div class="row mb-1">
        <div class="col-md-12 text-center mt-3">
            <a href="" role="button" class="btn" style="background-color:#ef6330;"><< ดูโครงการที่น่าสนใจทั้งหมด >></a>
        </div>
    </div>
    {{-- end row button --}}
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
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
                <a href="{{action('PropertyController@viewProp',['id'=>$post->id,'slug'=>$post->slug])}}"
                    class="text-decoration-none">
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
                        <p class="text-muted small"><i class="fas fa-map-marker"></i> {{$post->district}},
                            {{$post->province}}</p>
                        <p class="text-muted small"><i class="fab fa-btc"></i> {{$post->price}}</p>
                        <p class="text-muted small"><i class="fas fa-bed"></i> {{$post->bedroom}} <i
                                class="fas fa-bath"></i> {{$post->bathroom}}</p>
                        <p class="text-muted small"><i class="fas fa-building"></i> {{$post->prop}}</p>
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
    <div class="row mb-5">
        <div class="col-md-12 text-center mt-3">
            <a href="" role="button" class="btn" style="background-color:#ef6330;">
                << ดูโครงการที่น่าสนใจทั้งหมด>>
            </a>
        </div>
    </div>
    {{-- end row button --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body small text-muted">
                    <b style="font-size:1rem">เว็บไซต์</b> ลงประกาศฟรี ขายที่ดิน ขายบ้าน ขายคอนโด ขายตึกอสังหาริมทรัพย์
                    ขายใบจองคอนโด หรือ ลงประกาศฟรี ฝากเช่าบ้าน เช่าคอนโด เช่าตึก อาคารพาณิชย์ ธุรกิจต่างๆ ลงประกาศได้ฟรี
                    ไม่มีค่าใช้จ่าย หาลูกค้าซื้อไม่เกิน 15 วัน
                    ลงประกาศ ขาย/ซื้อ อสังหาริมทรัพย์ ได้รวดเร็ว ลงประกาศง่า์ ได้เลยที่นี่ www.kaiteedin.net
                    ได้เลยวันนี้
                </div>
            </div>
        </div>
    </div>
    {{-- end row --}}
    <div class="row justify-content-between">
        <div class="col-md-4 text-center">
            <h2 style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                โครงการยอดนิยม</h2>
        </div>
        <div class="col-md-2 text-left align-self-end">
            <a href="" class="text-decoration-none">
                ดูโครงการยอดนิยมเพิ่มเติม >
            </a>
        </div>
    </div>
    {{-- end row title --}}
    <div class="row mb-3">
        @foreach ($posts as $post)
        @php
        $images = unserialize($post->image);
        @endphp
        <div class="col-md-2">
            <div class="card img-overlay">
                <a href="" class="text-decoration-none">
                    <img src="{{asset('img/home/'.$images[0])}}" alt="..." class="img-thumbnail">
                    <span class="card-highlight" style="background-color:yellowgreen">{{$post->prop}}</span>
                    <div class="text-overlay" style="background-color:darkgreen">
                        <div class="text-show" style="font-size:14px;"><i class="fas fa-eye"></i> ดูรายละเอียด</div>
                    </div>
                    <div class="card-body">
                        <p class="small">{{$post->address_name}} ({{$post->type}})</p>
                        <p class="small text-muted"><i class="fas fa-map-marker"></i> {{$post->district}},
                            {{$post->province}}</p>
                        <p class="small text-muted"><i class="fab fa-btc"></i> {{$post->price}} บาท, {{$post->prop}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    {{-- end row 6 data --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h4>ทำเลยอดนิยม</h4>
        </div>
    </div>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background-color:#C0C0C0">
                <div class="card-body">
                    <div class="container">
                        <ul class="row">
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    กรุงเทพ</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    เชียงใหม่</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    ประจวบคีรีขันธ์/หัวหิน</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i> ภูเก็ต</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i> ชลบุรี</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    ปทุมธานี</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    นนทบุรี</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    เชียงราย</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i> ระยอง</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    สุราษฎร์ธานี</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    นครราชสีมา</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    ขอนแก่น</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i> พัทยา</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    สุราษฎร์ธานี/เกาะสมุย</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i> พังงา</a>
                            </li>
                            <li class="col-md-3">
                                <a href="" class="text-decoration-none"><i class="fas fa-map-marker-alt"></i>
                                    นครราชสีมา/ปากช่อง</a>
                            </li>
                        </ul>
                        <hr>
                        <div class="text-center">
                            <a href="" role="button" class="btn btn-outline-pink"><i
                                    class="fas fa-cogs">ค้นหาแบบละเอียด</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body small text-muted">
                    <b style="font-size:14px;">เว็บไซต์ Kaiteedin (<a
                            href="www.kaiteedin.net">www.kaiteedin.net</a>)</b>
                    เป็นเว็บไซต์ฝากประกาศขาย - เช่า อสังหาริมทรัพย์
                    ในรูปแบบต่างๆ เช่น บ้าน คอนโดมิเนียม ที่ดิน ทาวน์โฮม อาคารพาณิชย์ สำนักสำนักงาน โกดัง
                    ด้วยระบบฝากประกาศที่ใช้งานง่าย สามารถลงประกาศ ซื้อ ขาย ได้ภายใน 3 นาที ไม่ยุ่งยาก สะดวกรวดเร็ว
                    และที่สำคัญสามารถฝากประกาศได้ฟรี คุณจะพบกับอสังหาริมทรัพย์ทั้งประกาศขาย หรือให้เช่า บ้าน คอนโด
                    ทาวน์โฮม
                    ที่ดิน อพาร์ทเมนท์ อาคารพาณิชย์ หลากหลายรายการ รวมทั้งโครงการใหม่ โครงการคอนโดมิเนียมยอดนิยม
                    ที่ครบครันรายละเอียดข้อมูลที่ครบ ท่านสามารถทราบข้อมูลต่างๆ ไม่ว่าจะเป็น รูปภาพ
                    ข้อมูลที่อยู่ ขนาดห้อง จำนวนห้องต่างๆ สิ่งอำนวยความสะดวก ซึ่งการแสดงข้อมูลก็ดูง่าย อ่านง่าย
                    สามารถใช้งานได้ทุกระบบปฏิบัติการไม่ว่าจะเป็น บน windows หรือ สมาร์ทโฟน ทั้ง IOS และ Android
                    และเว็บไซต์ kaiteedin ยังมีผู้เข้าชมต่อวันมากกว่า 1000 ครั้ง ทำให้ประกาศของคุณสามารถถูกเห็นได้ง่าย
                    และทำให้ขาย หรือ ให้เช่าได้ไวกว่า การค้นหาประกาศก็ง่าย สะดวกสบายกว่าที่อื่น ด้วยระบบค้นหาที่ง่าย
                    และมีประสิทธิภาพ ไม่ยุ่งยาก และค้นหาได้รวดเร็ว
                    และระบบสมาชิกของเราจะทำให้คุณสามารถจัดการประกาศของคุณได้อย่างง่าย และมีระบบจัดการข้อมูลของคุณเองด้วย
                    เว็บไซต์ของเรายังมีระบบบทความที่คอยให้ข้อมูลเกี่ยวกับอสังหาริมทรัพย์
                    เพื่อให้คุณสามารถศึกษาข้อมูลต่างๆ
                    ที่เกี่ยวกับอสังหาริมทรัพย์
                    เว็บไซต์ของเราจึ่งเป็นเว็บไซต์แบบ one stop service ที่มีทั้งระบบฝากขาย ฝากเช่า
                    และบบค้นหาที่มีประสิทธิภาพ ทั้งยังมีบทความที่ให้คุณศึกษาข้อมูลอสังหาริมทรัพย์ได้อีกด้วย
                </div>
            </div>
        </div>
    </div>
    {{-- end row title 2 --}}
    <hr>
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="row mb-1 justify-content-between">
                <div class="col-md-6 text-center">
                    <h2
                        style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                        โครงการใหม่</h2>
                </div>
                <div class="col-md-6 text-right align-self-end">
                    <a href="" class="text-decoration-none">
                        ดูโครงการใหม่เพิ่มเติม >
                    </a>
                </div>
            </div>
            {{-- end row title new project --}}
            <div class="row p-3" style="background-color:lightskyblue">
                @foreach ($posts as $post)
                @php
                $images = unserialize($post->image);
                @endphp
                <div class="col-md-4 mb-2">
                    <div class="card new-project">
                        <a href="" class="text-decoration-none">
                            <img src="{{asset('img/home/'.$images[0])}}" alt="..." class="img-thumbnail">
                            <span class="card-highlight" style="background-color:orchid">โครงการใหม่</span>
                            <div class="card-body">
                                <p class="small text-muted"><i class="fas fa-map-marker"></i> {{$post->district}},
                                    {{$post->province}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- end row 6 new project --}}
        </div>
        {{-- end col new project --}}
        <div class="col-md-6">
            <div class="row mb-1 justify-content-between">
                <div class="col-md-6 text-center">
                    <h2
                        style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                        ที่ดินที่น่าสนใจ</h2>
                </div>
                <div class="col-md-6 text-right align-self-end">
                    <a href="" class="text-decoration-none">
                        ดูที่ดินที่น่าสนใจเพิ่มเติม >
                    </a>
                </div>
            </div>
            {{-- end row title land --}}
            <div class="row p-3" style="background-color:lightpink">
                @foreach ($posts as $post)
                @php
                $images = unserialize($post->image);
                @endphp
                <div class="col-md-4 mb-2">
                    <div class="card new-project">
                        <a href="" class="text-decoration-none">
                            <img src="{{asset('img/home/'.$images[0])}}" alt="..." class="img-thumbnail">
                            <span class="card-highlight" style="background-color:darkblue">ที่ดินที่น่าสนใจ</span>
                            <div class="card-body">
                                <p class="small text-muted"><i class="fas fa-map-marker"></i> {{$post->district}},
                                    {{$post->province}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- end row 6 land --}}
        </div>
        {{-- end col land --}}
    </div>
    {{-- end row new project and land --}}
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center rounded-pill bg-secondary p-2"><img src="{{asset('img/why.gif')}}" alt="">
                        ทำไมต้อง ลงประกาศ ขาย/เช่า
                        อสังหาริมทรัพย์กับเรา</h2>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('img/con1.png')}}" alt=""></td>
                                        <td><b>ลงประกาศฟรีได้ใน 3 นาที</b><br>เขียนประกาศง่าย มีระบบจัดการดี</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('img/con2.png')}}" alt=""></td>
                                        <td><b>ขายได้เร็ว</b><br>รับประกันการลงประกาศ ขายที่ดิน ขายบ้าน
                                            ขายคอนโดได้เร็วกว่าเว็บอื่น</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('img/con3.png')}}" alt=""></td>
                                        <td><b>ฟรี</b>
                                            <br>
                                            ลงประกาศฟรี ฝากประกาศฟรี ไม่มีค่าใช้จ่าย
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            {{-- end col table left why use our web --}}
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td><img src="{{asset('img/con4.png')}}" alt=""></td>
                                        <td><b>Search หาข้อมูลได้ไว</b><br>ระบบการค้นหา มีประสิทธิภาพและรวดเร็ว</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('img/con5.png')}}" alt=""></td>
                                        <td><b>ปล่อยเช่าได้เร็ว</b><br>ปล่อยเช่าคอนโด ปล่อยเช่าบ้าน เช่าตึกอาคาร</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset('img/con6.png')}}" alt=""></td>
                                        <td><b>ผู้ชมต่อวันมากกว่า 1000 ครั้ง</b><br>
                                            มีการเข้าชมของผู้คนมากกว่า 1000 ครั้งต่อวัน
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        {{-- end row table why use our web --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end row why --}}
    <hr>
    <div class="row mb-3">
        <div class="col-md-8">
            <div class="row mb-1 justify-content-between">
                <div class="col-md-6 text-center">
                    <h2
                        style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                        บทความน่ารู้</h2>
                </div>
                <div class="col-md-6 text-right align-self-end">
                    <a href="" class="text-decoration-none">
                        บทความน่ารู้เพิ่มเติม >
                    </a>
                </div>
            </div>
            {{-- end row title Archives --}}
            <div class="row">
                <div class="col-md-12">
                    ....
                </div>
            </div>
        </div>
        {{-- end Archives --}}
        <div class="col-md-4 border-left">
            <div class="row mb-1 justify-content-between">
                <div class="col-md-6 text-center">
                    <h2
                        style="border-bottom: 3px solid black ;border-top: 3px solid black ;border-radius: 12px;font-size:200%">
                        ติดตามเราได้ที่</h2>
                </div>
            </div>
            {{-- end row title Follow us --}}
            <div class="row">
                <div class="col-md-12">
                    <div id="fb-root"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/groundchiangmai" data-tabs="timeline" data-width="480" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/groundchiangmai" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/groundchiangmai">รับฝากซื้อ-ขาย-เช่า คอนโด ที่ดิน บ้าน เชียงใหม่</a></blockquote></div>
                </div>
            </div>
        </div>
        {{-- end Follow us --}}
    </div>
    {{-- end row Archives and Follow us --}}
</div>
@endsection
@section('scripts')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.3"></script>
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
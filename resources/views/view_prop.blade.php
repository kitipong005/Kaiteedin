@extends('layouts.main')
@section('header')
@include('layouts.navbar')
@include('layouts.search')
@endsection
@section('contents')
<div class="container-fluid mt-5">
    <h2>{{$post->topic}}</h2>

    {{-- card row --}}
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2" style="border-left:1rem solid #4e73df!important;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mr-2 text-center">
                            <i class="fab fa-btc fa-2x text-primary"></i>
                            <div class="font-weight-bold text-primary">ราคา (บาท)</div>
                        </div>
                        <div class="col-md-7 text-center">
                            <div class="font-weight-bold">
                                <h2>{{$post->price}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card 1 --}}
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2" style="border-left:1rem solid #FF8C00!important;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mr-2 text-center">
                            <i class="fas fa-map-marker-alt fa-2x" style="color:#FF8C00;"></i>
                            <div class="font-weight-bold" style="color:#FF8C00;">พื้นที่</div>
                        </div>
                        <div class="col-md-7 text-center">
                            <div class="font-weight-bold">
                                <h5>{{$post->district}}, {{$post->province}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card 2 --}}
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2" style="border-left:1rem solid #006400!important;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mr-2 text-center">
                            <i class="fas fa-building fa-2x" style="color:#006400;"></i>
                            <div class="font-weight-bold" style="color:#006400;">ประเภท</div>
                        </div>
                        <div class="col-md-7 text-center">
                            <div class="font-weight-bold">
                                <h2>{{$post->prop}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card 3 --}}
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2" style="border-left:1rem solid #FF00FF!important;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 mr-2 text-center">
                            <i class="fas fa-eye fa-2x" style="color:#FF00FF;"></i>
                            <div class="font-weight-bold" style="color:#FF00FF;">ยอดเข้าชม</div>
                        </div>
                        <div class="col-md-7 text-center">
                            <div class="font-weight-bold">
                                <h2>{{$post->count}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card 4 --}}
    </div>
    {{-- end card row --}}
</div>
@php
$images = unserialize($post->image);
@endphp
<div class="caontainer slide mb-5">
    <div class="row mx-2">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($images as $index=>$image)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($images as $index=>$image)
                    <div class="carousel-item">
                        <img src="{{asset('img/home/'.$image)}}" class="d-block w-100" style="height:400px;">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            {{-- end slide --}}
            <div class="text-center">
                <!-- Sharingbutton Facebook -->
                <a class="resp-sharing-button__link"
                    href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkaiteedin.net%2Fview_property.php%3Fid%3D079618%26%26name%3D%25E0%25B9%2583%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B9%2580%25E0%25B8%258A%25E0%25B9%2588%25E0%25B8%25B2%2520LUMPINI%2520PLACE%2520RAMA%25204%2520%25E2%2580%2593%2520KLUAYNAMTHAI%25201%2520%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2599%25E0%25B8%25AD%25E0%25B8%2599%2520%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%25A1%25E0%25B8%25AD%25E0%25B8%25A2%25E0%25B8%25B9%25E0%25B9%2588"
                    target="_blank" rel="noopener" aria-label="Share on Facebook">
                    <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M18.77 7.5H14.5V5.6c0-.9.6-1.1 1-1.1h3V.54L14.17.53C10.24.54 9.5 3.48 9.5 5.37V7.5h-3v4h3v12h5v-12h3.85l.42-4z" />
                                </svg>
                        </div>Share on Facebook
                    </div>
                </a>

                <!-- Sharingbutton Twitter -->
                <a class="resp-sharing-button__link"
                    href="https://twitter.com/intent/tweet/?url=http%3A%2F%2Fkaiteedin.net%2Fview_property.php%3Fid%3D079618%26%26name%3D%25E0%25B9%2583%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B9%2580%25E0%25B8%258A%25E0%25B9%2588%25E0%25B8%25B2%2520LUMPINI%2520PLACE%2520RAMA%25204%2520%25E2%2580%2593%2520KLUAYNAMTHAI%25201%2520%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2599%25E0%25B8%25AD%25E0%25B8%2599%2520%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%25A1%25E0%25B8%25AD%25E0%25B8%25A2%25E0%25B8%25B9%25E0%25B9%2588"
                    target="_blank" rel="noopener" aria-label="Share on Twitter">
                    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M23.4 4.83c-.8.37-1.5.38-2.22.02.94-.56.98-.96 1.32-2.02-.88.52-1.85.9-2.9 1.1-.8-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.04.7.12 1.04-3.78-.2-7.12-2-9.37-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.73-.03-1.43-.23-2.05-.57v.06c0 2.2 1.57 4.03 3.65 4.44-.67.18-1.37.2-2.05.08.57 1.8 2.25 3.12 4.24 3.16-1.95 1.52-4.36 2.16-6.74 1.88 2 1.3 4.4 2.04 6.97 2.04 8.36 0 12.93-6.92 12.93-12.93l-.02-.6c.9-.63 1.96-1.22 2.57-2.14z" />
                                </svg>
                        </div>Share on Twitter
                    </div>
                </a>

                <!-- Sharingbutton Pinterest -->
                <a class="resp-sharing-button__link"
                    href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fkaiteedin.net%2Fview_property.php%3Fid%3D079618%26%26name%3D%25E0%25B9%2583%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B9%2580%25E0%25B8%258A%25E0%25B9%2588%25E0%25B8%25B2%2520LUMPINI%2520PLACE%2520RAMA%25204%2520%25E2%2580%2593%2520KLUAYNAMTHAI%25201%2520%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2599%25E0%25B8%25AD%25E0%25B8%2599%2520%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%25A1%25E0%25B8%25AD%25E0%25B8%25A2%25E0%25B8%25B9%25E0%25B9%2588&amp;media=http%3A%2F%2Fkaiteedin.net%2Fview_property.php%3Fid%3D079618%26%26name%3D%25E0%25B9%2583%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B9%2580%25E0%25B8%258A%25E0%25B9%2588%25E0%25B8%25B2%2520LUMPINI%2520PLACE%2520RAMA%25204%2520%25E2%2580%2593%2520KLUAYNAMTHAI%25201%2520%25E0%25B8%25AB%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%2587%25E0%25B8%2599%25E0%25B8%25AD%25E0%25B8%2599%2520%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B9%2589%25E0%25B8%25AD%25E0%25B8%25A1%25E0%25B8%25AD%25E0%25B8%25A2%25E0%25B8%25B9%25E0%25B9%2588&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking."
                    target="_blank" rel="noopener" aria-label="Share on Pinterest">
                    <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--large">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z" />
                                </svg>
                        </div>Share on Pinterest
                    </div>
                </a>

            </div>
            <h3 class="text-left mt-3"><i class="fas fa-map fa-lg"></i> สถานที่ใกล้เคียง</h3>
            <div class="card border-primary" style="background-color:#EE82EE">
                <div class="card-body">
                    <p>{!! $post->nearplace !!}</p>
                </div>
            </div>
        </div>
        {{-- end col slide --}}
        <div class="col-md-6">
            <h3><i class="fas fa-clipboard fa-lg"></i> รายละเอียดเบื้องต้น</h3>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><i class="fas fa-address-book fa-lg" style="color:#FF1493"></i></td>
                        <td>ประเภทประกาศ</td>
                        @if ($post->type == null)
                        <td>-</td>
                        @else
                        <td>{{$post->type}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-building fa-lg" style="color:#FF1493"></i></td>
                        <td>สภาพห้อง</td>
                        @if ($post->pro == null)
                        <td>-</td>
                        @else
                        <td>{{$post->pro}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-bed fa-lg" style="color:#FF1493"></i></td>
                        <td>ห้องนอน</td>
                        @if ($post->bedroom == null)
                        <td>-</td>
                        @else
                        <td>{{$post->bedroom}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-bath fa-lg" style="color:#FF1493"></i></td>
                        <td>ห้องน้ำ</td>
                        @if ($post->bathroom == null)
                        <td>-</td>
                        @else
                        <td>{{$post->bathroom}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-car fa-lg" style="color:#FF1493"></i></td>
                        <td>ที่จอดรถ</td>
                        @if ($post->garage == null)
                        <td>-</td>
                        @else
                        <td>{{$post->garage}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-database fa-lg" style="color:#FF1493"></i></td>
                        <td>จำนวนชั้น</td>
                        @if ($post->floor == null)
                        <td>-</td>
                        @else
                        <td>{{$post->floor}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td><i class="fas fa-vector-square fa-lg" style="color:#FF1493"></i></td>
                        <td>ขนาด (ตารางเมตร)</td>
                        @if ($post->size == null)
                        <td>-</td>
                        @else
                        <td>{{$post->size}}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <h3><i class="fas fa-home fa-lg"></i> สนใจติดต่อหรือเข้าไปดูสถานที่จริง</h3>
            <div class="card border-primary" style="background-color:#f7a032">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">
                            ชื่อหมู่บ้านหรือชื่อโครงการ:</div>
                        <div class="col-md-8">{{$post->address_name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">ที่อยู่:</div>
                        <div class="col-md-8">{{$post->address}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">ตำบล:</div>
                        <div class="col-md-8">{{$post->district}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">อำเภอ:</div>
                        <div class="col-md-8">{{$post->amphoe}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">จังหวัด:</div>
                        <div class="col-md-8">{{$post->province}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">รหัสไปรษณีย์:</div>
                        <div class="col-md-8">{{$post->zipcode}}</div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-12" style="border-bottom-style:solid; border-color: white;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">ติดต่อที่: </div>
                        <div class="col-md-8 text-primary">{{$post->name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bolder font-italic" style="font-size:1rem">เบอร์โทรศัพท์:
                        </div>
                        <div class="col-md-8 text-primary">{{$post->tel}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    {{-- end row slide --}}
</div>
<div class="container-fluid mb-5">
    <h3 class="text-left"><i class="fas fa-comment fa-lg fa-flip-horizontal"></i> ข้อมูลเพิ่มเติม</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-body">
                    <h5>{!! $post->description !!}</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="fb-root"></div>
</div>
{{-- end container  --}}
@endsection
@section('scripts')
<script>
    $(function(){
        $('.carousel-item').first().addClass('active');
        $('.carousel-indicators > li').first().addClass('active');
    })
</script>
@endsection
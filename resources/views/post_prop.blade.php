@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{asset('jquery.Thailand.js/dist/jquery.Thailand.min.css')}}">
<script type="text/javascript" src="{{asset('jquery.Thailand.js/dist/jquery.Thailand.min.js')}}"></script>

<style>
    .card-header {
        background-color: #fee376;
    }
</style>
@endsection
@section('header')
@include('layouts.navbar')
<div class="post-img">
    <div class="container text-center text-white p-3">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top:10%">
                <h3 style="border: 3px solid white;border-radius: 12px;font-size:300%">ลงประกาศขาย-เช่า</h3>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contents')
<div class="container mt-5">
    {{-- <div class="row">
        <div class="col-md-12"> --}}
    <form action="{{action('PostController@postCreate')}}" method="post" class="user" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card mb-5">
            <div class="card-header">
                <h3> ข้อมูลผู้ลงประกาศ</h3>
            </div>
            <div class="card-body">
                <div class="form-group row justify-content-md-center">
                    <label for="name" class="col-md-2 col-form-label">ติดต่อ:</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control form-control-user"
                            value="{{Auth::user()->name}}" required>
                    </div>
                </div>
                @if ($errors->has('name'))
                <span style="color:red">
                    <ul>
                        <li><small>please Enter Name<small></li>
                    </ul>
                </span>
                @endif
                <div class="form-group row justify-content-md-center">
                    <label for="email" class="col-md-2 col-form-label">อีเมลย์:</label>
                    <div class="col-md-6">
                        <input type="text" name="email" class="form-control form-control-user"
                            value="{{Auth::user()->email}}" required>
                    </div>
                </div>
                @if ($errors->has('email'))
                <span style="color:red">
                    <ul>
                        <li><small>please Enter Email<small></li>
                    </ul>
                </span>
                @endif
                <div class="form-group row justify-content-md-center">
                    <label for="tel" class="col-md-2 col-form-label">เบอร์โทรติดต่อ:</label>
                    <div class="col-md-6">
                        <input type="text" name="tel" class="form-control form-control-user"
                            placeholder="เบอร์โทรศัพท์ใช้ติดต่อ..." required>
                    </div>
                </div>
                @if ($errors->has('tel'))
                <span style="color:red">
                    <ul>
                        <li><small>please Enter Telephone Number<small></li>
                    </ul>
                </span>
                @endif
            </div>
        </div>
        {{-- end card profile --}}
        <div class="card mb-5">
            <div class="card-header">
                <h3> ข้อมูลอสังหาริมทรัพย์</h3>
            </div>
            <div class="card-body">
                <div class="form-group row justify-content-md-center">
                    <label for="topic" class="col-md-2 col-form-label">หัวข้อประกาศ:</label>
                    <div class="col-md-6">
                        <input type="text" name="topic" class="form-control form-control-user"
                            placeholder="หัวข้อประกาศ..." required>
                    </div>
                    @if ($errors->has('topic'))
                    <span style="color:red">
                        <ul>
                            <li><small>please Enter Topic<small></li>
                        </ul>
                    </span>
                    @endif
                    <p class="text-danger">*** หัวข้อประกาศไม่ควรยาวหรือสั้นจนเกินไป
                        เพราะจะทำให้ประกาศของคุณขาดความน่าสนใจ ***</p>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="type" class="col-md-2 col-form-label">ประกาศประเภท:</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" value="สำหรับขาย">
                            <label class="form-check-label" for="inlineRadio1">สำหรับขาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" value="สำหรับเช่า">
                            <label class="form-check-label" for="inlineRadio2">สำหรับเช่า</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" value="สำหรับขาย-เช่า">
                            <label class="form-check-label" for="inlineRadio3">สำหรับขาย-เช่า</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="pro" class="col-md-2 col-form-label">สภาพ:</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pro" value="มือหนึ่ง">
                            <label class="form-check-label" for="inlineRadio1">มือหนึ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pro" value="มือสอง">
                            <label class="form-check-label" for="inlineRadio2">มือสอง</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-md-center">
                    <label for="prop" class="col-md-2 col-form-label">ประเภทอสังหาฯ:</label>
                    <div class="col-md-6">
                        <select class="form-control custom-select" name="prop">
                            <option value="บ้าน">บ้าน</option>
                            <option value="คอนโด">คอนโด</option>
                            <option value="ทาวน์โฮม">ทาวน์โฮม</option>
                            <option value="อาคารพาณิชย์">อาคารพาณิชย์</option>
                            <option value="ที่ดิน">ที่ดิน</option>
                            <option value="อพาตเมนต์">อพาตเมนต์</option>
                            <option value="สำนักงาน">สำนักงาน</option>
                            <option value="โกดัง/โรงงาน">โกดัง/โรงงาน</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="address_name" class="col-md-2 col-form-label">ชื่อโครงการหรือหมู่บ้าน:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user"
                            placeholder="ชื่อโครงการหรือหมู่บ้าน...." name="address_name">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="address" class="col-md-2 col-form-label">เลขที่:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" placeholder="เลขที่...."
                            name="address">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="road" class="col-md-2 col-form-label">ถนน:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" placeholder="ถนน...." name="road">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="post_name" class="col-md-2 col-form-label">ตำบล:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" id="district" placeholder="ตำบล...."
                            name="district">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="post_name" class="col-md-2 col-form-label">อำเภอ:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" id="amphoe" placeholder="อำเภอ...."
                            name="amphoe">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="post_name" class="col-md-2 col-form-label">จังหวัด:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" id="province"
                            placeholder="จังหวัด...." name="province">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="post_name" class="col-md-2 col-form-label">รหัสไปรษณีย์:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-user" id="zipcode"
                            placeholder="รหัสไปรษณีย์...." name="zipcode">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="geo" class="col-md-2 col-form-label">ภูมิภาค:</label>
                    <div class="col-md-6">
                        <select class="form-control custom-select" name="geo" required>
                            <option value="ภาคเหนือ">ภาคเหนือ</option>
                            <option value="ภาคกลาง">ภาคกลาง</option>
                            <option value="ภาคตะวันออกเฉียงเหนือ">ภาคตะวันออกเฉียงเหนือ</option>
                            <option value="ภาคตะวันตก">ภาคตะวันตก</option>
                            <option value="ภาคตะวันออก">ภาคตะวันออก</option>
                            <option value="ภาคใต้">ภาคใต้</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="floor" class="col-md-2 col-form-label">จำนวนชั้น:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user" placeholder="จำนวนชั้น...."
                            name="floor">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="size" class="col-md-2 col-form-label">พื้นที่ใช้สอย:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user"
                            placeholder="พื้นที่ใช้สอย.... (ตารางเมตร)" name="size">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="price" class="col-md-2 col-form-label">ราคา:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user" placeholder="ราคา...." id="Addprice"
                            name="price">
                        <br>
                        <p id="priceComma"></p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card prop --}}
        <div class="card mb-3">
            <div class="card-header">
                <h3> ข้อมูลเพิ่มเติม</h3>
            </div>
            <div class="card-body">
                <div class="form-group row justify-content-md-center">
                    <label for="bedroom" class="col-md-2 col-form-label">จำนวนห้องนอน:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user"
                            placeholder="โปรดระบุจำนวนห้องนอน..." name="bedroom">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="bathroom" class="col-md-2 col-form-label">จำนวนห้องน้ำ:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user"
                            placeholder="โปรดระบุจำนวนห้องน้ำ..." name="bathroom">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="garage" class="col-md-2 col-form-label">จำนวนที่จอดรถ:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control form-control-user"
                            placeholder="โปรดระบุจำนวนที่จอดรถ..." name="garage">
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="nearplace" class="col-md-2 col-form-label">สถานที่ใกล้เคียง:</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="โปรดระบุสถานที่ใกล้เคียง เพื่อให้ง่ายต่อการตัดสินใจของผู้ซื้อหรือเช่า"
                            name="nearplace"></textarea>
                    </div>
                </div>
                <div class="form-group row justify-content-md-center">
                    <label for="description" class="col-md-2 col-form-label">รายละเอียดเพิ่มเติม:</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                            placeholder="โปรดกรอกรายละเอียดเพิ่มเติม เช่น มีเครื่องปรับอากาส มีสระว่ายน้ำส่วนกลาง มี รปภ เป็นต้น"
                            name="description"></textarea>
                    </div>
                </div>
                <div id="copy_pic">
                    <div class="form-group row justify-content-md-center" id="input-pic">
                        <label for="image" class="col-md-2 col-form-label" id="label-name">รูปภาพ:</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="image[]" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="Addpic">+</button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-danger" type="button" id="Delpic">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card more --}}
        <div class="card mb-3 text-white" style="background-color:orchid">
            <div class="card-body">
                <div class="form-group row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agree">
                            <label class="form-check-label text-center" for="agree">
                                ฉันยอมรับข้อกำหนดในการลงประกาศ <a href="http://">อ่านข้อกำหนด</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row justify-content-md-center mb-5">
            <div class="col-md-6">
                <p class="text-danger">**** โปรดยอมรับข้อกำหนดในการลงประกาศ ท่านถึงจะสามารถลงประกาศได้ ****</p>
                <button type="submit" class="btn btn-success btn-block" id="btn-submit" disabled><i
                        class="fas fa-share-square"></i> บันทึกข้อมูล</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')

<script type="text/javascript" src="{{asset('jquery.Thailand.js/dependencies/JQL.min.js')}}"></script>
<script type="text/javascript" src="{{asset('jquery.Thailand.js/dependencies/typeahead.bundle.js')}}"></script>
<script>
    $.Thailand({ 
    database: './jquery.Thailand.js/database/db.json', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
    });

    $(function(){
        //--------------- check comma ----------
        $('form').on('keyup','#Addprice',function(){
            var price = $('#Addprice').val();
            var prices = addCommar(price);
            console.log(prices.length)
            if(prices.length > 0)
            {
                $('#priceComma').html("ราคาประกาศของคุณ : " + prices + " บาท");
            }
            else {
                $('#priceComma').html("");
            }
        });
        //------------- add pic ---------------
        $('form').on('click','#Addpic',function(){
            var cln = $('#input-pic').clone();
            let last = $('#copy_pic')
            let count = $('#copy_pic').children().length;
            if(count < 6){
                let v = last.append(cln).children(':last').find('input').map(function(){
                    return $(this).val('')
                });
            }
        });
        //------------ del pic ----------------
        $('form').on('click','#Delpic',function(){
            let last = $('#input-pic:last-child');
            let count = $('#copy_pic').children().length;
            if(count > 1)
            {
                last.remove();
            }
        })
        //----------- checkbox agree ---------------
        $('form').on('click','#agree',function(){
            var check = $('#agree');
            if(check.is(':checked')){
                $('#btn-submit').removeAttr('disabled','');
            }
            else{
                $('#btn-submit').attr('disabled','true');
            }
        })

    });

    function addCommar(price)
    {
        price += '';
        x = price.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>
@endsection
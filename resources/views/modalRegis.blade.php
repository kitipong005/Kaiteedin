<!-- Modal -->
<div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="p-2 text-center">
                        <h3>สมัครสมาชิก</h3>
                    </div>
                    <form action="" method="post" class="user">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" class="form-control form-control-user"
                                    placeholder="Email Address" value="{{old('email')}}" required>
                                @if ($errors->has('email'))
                                <span style="color:red">
                                    <ul>
                                        <li><small>please Enter Email<small></li>
                                    </ul>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- 
                          *********** Login with google  *****************
                        --}}
                        <div class="form-group row" id="regis-google" style="display:none">
                            <div class="col-md-12 text-center">
                                <p style="color:red">Email นี้มีอยู่ในระบบแล้ว คุณสามารถเข้าสู่ระบบได้</p>
                                <a href="{{action('LoginController@redirectToProviderGoogle')}}"
                                    class="btn btn-block btn-google btn-user"><i class="fab fa-google fa-fw"></i>
                                    Login with Google</a>
                            </div>
                        </div>
                        {{-- 
                          *********** Login with facebook  *****************
                        --}}
                        <div class="form-group row" id="regis-facebook" style="display:none">
                            <div class="col-md-12 text-center">
                                <p style="color:red">Email นี้มีอยู่ในระบบแล้ว คุณสามารถเข้าสู่ระบบได้</p>
                                <a href="http://" class="btn btn-block btn-facebook btn-user"><i
                                        class="fab fa-facebook fa-fw"></i> Login with Facebook</a>
                            </div>
                        </div>
                        {{-- 
                          *********** Login with website  *****************
                        --}}
                        <div class="form-group row" id="regis-website" style="display:none">
                            <div class="col-md-12 text-center">
                                <a href="" id="gotoLoginModal"><p style="color:red">Email นี้มีอยู่ในระบบแล้ว ท่านต้องการ เข้าสู่ระบบ หรือไม่ ?</p></a>                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="" class="form-control form-control-user"
                                    placeholder="ชื่อ - สกุล" value="{{old('name')}}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="career" id="" class="form-control form-control-user"
                                    placeholder="อาชีพ..." value="{{old('career')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="ที่อยู่..." name="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="number" name="tel" id="" class="form-control form-control-user"
                                    placeholder="เบอร์โทรศัพท์ ..." value="{{old('tel')}}" required>
                            </div>
                            <div class="col-md-2">
                                <label for="" class="form-control-user">เพศ:</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check-inline form-control-user">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        ชาย
                                    </label>
                                </div>
                                <div class="form-check-inline form-control-user">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        หญิง
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="password" name="password" id="" class="form-control form-control-user"
                                    placeholder="Password" min="6" required>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" id=""
                                    class="form-control form-control-user" placeholder="Confirm Password" required>
                            </div>
                            @if ($errors->has('password'))
                            <span style="color:red">
                                <ul>
                                    <li><small>password has less 6 little up !!!</small></li>
                                    <li><small>Or Confirm password Invalid !!!</small></li>
                                  </ul>
                            </span>
                          @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block btn-user">ลงทะเบียน</button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <a href="{{action('LoginController@redirectToProviderGoogle')}}"
                                    class="btn btn-block btn-google btn-user"><i class="fab fa-google fa-fw"></i>
                                    Register with Google</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <a href="http://" class="btn btn-block btn-facebook btn-user"><i
                                        class="fab fa-facebook fa-fw"></i> Register with Facebook</a>
                            </div>
                        </div>
                        <hr>
                    </form>
                    {{-- end form --}}
                    <div class="text-center">
                        <a href="#" id="gotoLoginModal" class="small">คุณมีรหัสสำหรับเข้าเว็บไซต์อยู่แล้ว?
                            ต้องการไปที่หน้า เข้าสู่ระบบ !!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="text-center p-2">
                        <h3>เข้าสู่ระบบ</h3>
                    </div>
                    <hr>
                    <form action="{{action('LoginController@Login')}}" method="post" class="user">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" name="email" id="" class="form-control form-control-user"
                                    placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="password" name="password" id="" class="form-control form-control-user"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label text-muted" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block btn-user">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <a href="{{action('LoginController@redirectToProviderGoogle')}}"
                                    class="btn btn-block btn-google btn-user"><i class="fab fa-google fa-fw"></i>
                                    Login with Google</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <a href="http://" class="btn btn-block btn-facebook btn-user"><i
                                        class="fab fa-facebook fa-fw"></i> Login with Facebook</a>
                            </div>
                        </div>
                        <hr>
                    </form>
                    {{-- end form --}}
                    <div class="text-center">
                        <a href="http://" class="small">ลืมรหัสผ่าน ?</a>
                    </div>
                    <div class="text-center">
                        <a href="#" id="gotoRegisModal" class="small">สมัครสมาชิก !!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
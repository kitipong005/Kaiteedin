<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#9370DB">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    พื้นที่
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ภาคเหนือ</a>
                    <a class="dropdown-item" href="#">ภาคกลาง</a>
                    <a class="dropdown-item" href="#">ภาคตะวันออกเฉียงเหนือ</a>
                    <a class="dropdown-item" href="#">ภาคตะวันตก</a>
                    <a class="dropdown-item" href="#">ภาคตะวันออก</a>
                    <a class="dropdown-item" href="#">ภาคใต้</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        โครงการล่าสุด
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">ภาคเหนือ</a>
                        <a class="dropdown-item" href="#">ภาคกลาง</a>
                        <a class="dropdown-item" href="#">ภาคตะวันออกเฉียงเหนือ</a>
                        <a class="dropdown-item" href="#">ภาคตะวันตก</a>
                        <a class="dropdown-item" href="#">ภาคตะวันออก</a>
                        <a class="dropdown-item" href="#">ภาคใต้</a>
                    </div>
                </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{action('PostController@postForm')}}">ลงประกาศ <img src="{{asset('img/free.gif')}}" style="width:30%;height:4%;"></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            {{-- @if (Auth::user())
            <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#regisModal"><i
                            class="fas fa-user-alt fa-lg"></i> {{Auth::user()->name}}</a>
            </li>
            @else --}}
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#regisModal"><i
                        class="fas fa-user-alt fa-lg"></i> สมัครสมาชิก</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-outline-pink" data-toggle="modal"
                    data-target="#loginModal">เข้าสู่ระบบ</button>
            </li>
            {{-- @endif --}}
        </ul>
    </div>
</nav>
@include('modalRegis')
@include('modalLogin')
{{-- #FF1493 --}}
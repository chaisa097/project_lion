<div class="nav-destop">
<div class="d-flex">
    <div class="text-center m-auto nav-top-logo header-color">
        <a href="{{route('index','home')}}">
          <img class="icon-destop" src="{{ asset('front-ends-assets/images/logojetsada.svg')}}" >
        </a>
    </div>
    <div class="left-content header-color  mt-4"> 
            <div class="pr-5  mt-1">
            <div>
            @foreach($contact as $con)
            @if($con->type != 4)
                @if($con->type == 1)
                Phone :  <a style="color:inherit" href="tel:{{$con->name}}">{{$con->name}}<a> <br>
                @elseif($con->type == 2)
                ID Line : {{$con->name}} <br>
                @elseif($con->type == 3)
                Email : {{$con->name}} <br>
                @endif
            @endif
            @endforeach
             </div>
            </div>
        </div>
</div>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent bor-nav-tran sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
        <div class="container-fluid">
            {{--
            <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="nav navbar-nav nav-flex-icons ml-auto  m-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('index','home')}}">หน้าหลัก
                            {{-- <span class="sr-only">(current)</span> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><span class="text-upderline">สมัครสมาชิก</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','pay_rate')}}">อัตราการจ่าย</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','special_privileges')}}">สิทธิพิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','business_partner')}}">หุ้นส่วนธุรกิจ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','rules')}}">กติกา</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">ดูผลหวย</a> --}}
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">ดูผลหวย</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{route('index','thai_lottery')}}">ดูผลหวยหุ้นไทย</a>
                            <a class="dropdown-item" href="{{route('index','part_results_thai_lottery')}}">ผลหวยหุ้นไทยย้อนหลัง</a>
                            <a class="dropdown-item" href="{{route('index','foreign_lottery')}}">ดูผลหวยหุ้นต่างประเทศ</a>
                            <a class="dropdown-item" href="{{route('index','lottovip')}}">ดูผลหวยยี่กี</a>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">โปรโมชั่น</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','contact')}}">ติดต่อเรา</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="nav-mobile">
    <div class="inside-nav d-flex">
       <div class="m-auto ">
            <img class="mobile-logo" src="{{ asset('images/logojetsada.svg')}}" >
        </div>
       <span class="color-w po-si-r burger-color" style="cursor:pointer " onclick="openNav()">&#9776;</span>
    </div>
    <div class="help-contact px-2 text-center">ID LINE : raklotto2 ,Tel : 062-4026406 </div>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('index','home')}}">หน้าหลัก</a>
        <a href="#">สมัครสมาชิก</a>
        <a href="{{route('index','pay_rate')}}">อัตราการจ่าย</a>
        <a href="{{route('index','special_privileges')}}">สิทธิพิเศษ</a>
        <a href="{{route('index','business_partner')}}">หุ้นส่วนธุรกิจ</a>
        <a href="{{route('index','rules')}}">กติกา</a>
        {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">ดูผลหวย</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="{{route('index','thai_lottery')}}">ดูผลหวยหุ้นไทย</a>
        <a class="dropdown-item" href="{{route('index','part_results_thai_lottery')}}">ผลหวยหุ้นไทยย้อนหลัง</a>
        <a class="dropdown-item" href="{{route('index','foreign_lottery')}}">ดูผลหวยหุ้นต่างประเทศ</a>
        <a class="dropdown-item" href="{{route('index','lottovip')}}">ดูผลหวยยี่กี</a>
    </div> --}}
        <a href="{{route('index','contact')}}">ติดต่อเรา</a>
      </div>
</div>

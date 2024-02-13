<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{url('/')}}" class="navbar-brand mx-4 mb-3">
                    <img src="{{asset('ex/images/cw.png')}}" width="100px">
                  <img src="{{asset('ex/images/name.png')}}" width="100px">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('img/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black-thumbnail.png')}}" alt="" style="width: 40px; height: 40px;">


                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                   <div class="ms-3">
                        <h6 class="mb-0">{{Auth()->user()->name}}</h6>
                        <span>@if (Auth()->user()->admin==0)
                            User
                            @else
                            Admin

                        @endif</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/') }}" class="nav-item nav-link active"><i
                            class="fa fa-home"></i>الرءيسيه</a>
                    @if (Auth()->user()->admin === 1)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i
                                    class="bi bi-diagram-3-fill"></i>المنتجات </a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('computer') }}" class="dropdown-item"><i
                                        class="bi bi-laptop"></i>اجهزه الكمبيوتر </a>
                                <a href="{{route('computer_tool')}}" class="dropdown-item"> <i
                                        class="bi bi-door-open-fill"></i>مستلزمات الكمبيوتر</a>
                                <a href="{{route('printer')}}" class="dropdown-item">
                                    <i class="bi bi-printer-fill"></i>طابعات</a>
                                <a href="{{route('camera')}}" class="dropdown-item"> <i
                                        class="bi bi-camera-video-fill"></i>منظومات كميرات مراقبه</a>
                                <a href="{{route('network')}}" class="dropdown-item"> <i class="bi bi-router-fill"></i>اجهزه
                                    شبكات</a>
                                <a href="{{route('projector')}}" class="dropdown-item"> <i class="bi bi-cast"></i>اجهزه عرض</a>
                                <a href="{{route('game')}}" class="dropdown-item"> <i class="bi bi-joystick"></i>اجهزه
                                    العاب</a>
                                <a href="{{route('bag')}}" class="dropdown-item"> <i class="bi bi-backpack4"></i>حقاءب لاب
                                    توب ماركات</a>
                            </div>
                        </div>
                        <a href="{{ route('show_user') }}" class="nav-item nav-link">
                            <i class="bi bi-people-fill"></i> المستخدمين</a>
                    @endif

                    <a href="{{ route('profile.edit') }}" class="nav-item nav-link"> <i
                            class="bi bi-diagram-3-fill"></i>الاعدادات </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <p class="nav-item nav-link"> <i class="bi bi-box-arrow-right"></i>تسجيل الخروج </p>
                        </x-dropdown-link>
                    </form>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img src="ex/images/cw.png" width="50px"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <i class="bi bi-person-circle" class="rounded-circle me-lg-2" style="width: 40px; height: 40px;"></i>
                            <span class="d-none d-lg-inline-flex">Safwan Ali</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->

            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="bg-secondary rounded h-100 p-4" >
                        <h6 class="mb-4">Basic Form</h6>
                        <form action="{{route('update_user',$users->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control" value="{{$users->name}}" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" value="{{$users->email}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Is admin</label>
                                <select name="admin" class="form-select form-select-sm mb-3" name="type" aria-label=".form-select-sm example">
                                    <option value="0" selected>user</option>
                                    <option value="1">admin</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary">change</button>
                        </form>
                    </div>

                </div>
            </div>
            <!-- Recent Sales End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

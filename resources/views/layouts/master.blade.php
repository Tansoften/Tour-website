<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Njere Tours and Safaris</title>

     <!-- Bootstrap CSS -->
     <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet">

     <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;
                0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
         
                <!-- Ec=xternal css -->
                <link rel="stylesheet" href="{{ asset('global css/global.css') }}">

</head>


<body>
    <Main class="" style="background-color:"> 
        {{-- #078E10 --}}

    <nav class="navbar navbar-expand-lg navbar-light  py-4 d-block fixed-top  backdrop padding-transition"
                data-navbar-on-scroll="data-navbar-on-scroll" style="background-color:none; background-color: rgba(249, 250, 253, 0); 
                transition: background-color 0s ease 0s, padding 0.35s ease 0s;">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4" href="#" style="color: #024006;">Njere Tours and Safaris</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/places"> Places </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    

    <div>
        @yield('content')
    </div>
    @include('layouts.footer')

</Main>

<script>
    const activePage= window.location.pathname;
    const navLinks = document.querySelectorAll('nav li a').
         forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.classList.add('active');
        }
    })
</script>
</body>

</html>
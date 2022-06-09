<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>


    {{-- extensions --}}
    
    {{-- bootstrap extension --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    {{--CSS--}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- JQUERRY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- JQUERRY CONFIRM --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css"
        integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"
        integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @yield('extra-cdn')

    {{-- @include('sweetalert::alert') --}}
    

</head>
<style>
   
</style>
@yield('extra-style')

<body style="background-color: #FFFFFF;">
    <nav class="navbar  navbar-expand-lg haft-navbar pb-4">
        <div class="container-fluid">
            <a class="navbar-brand ms-md-5" href="/">
                {{-- <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> --}}
                <div class="cirle-logo">

                </div>
            </a>
          {{-- <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
                
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-5">
                <li class="nav-item px-5 pt-2">
                    <a class="nav-link" href="/forum">About Us</a>
                </li>
                <li class="nav-item px-5 pt-2">
                    <a class="nav-link" href="/learn">Product</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="/login">
                        <button type="button" class="btn btn-primary login-button ">Login</button>
                    </a>
                </li>

              
            </ul> --}}
          </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
    
    
</body>


@yield('js')
<script>
    AOS.init({
    once: true
    })
</script>
</html>

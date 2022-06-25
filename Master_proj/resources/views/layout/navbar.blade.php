<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Specify the character encoding for the HTML document --}}
    <meta charset="UTF-8">
    
    {{-- Edge mode tells Internet Explorer to display content in the highest mode available. --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Define keywords for search engines: --}}
    <meta name="keywords" content="HTML, CSS, JavaScript, Najeh , platform">

    {{-- Define a description of your web page: --}}
    <meta name="description" content="najeh platform">
    {{-- Define the author of a page: --}}
    
    <meta name="author" content="Tamara Al-Shabatat">

    {{-- Refresh document every 30 seconds: --}}
    <meta http-equiv="refresh" content="30">

    {{-- Setting the viewport to make your website look good on all devices: --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    {{-- StyleSheet --}}
    <link rel="stylesheet" href="/css/stu/style.css">
    <link rel="stylesheet" href="/css/stu/nav.css">
    <link rel="stylesheet" href="/css/stu/@yield('CSS','')">

    {{-- fontawesome icons --}}
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    
    {{-- icon  --}}
    <link rel="shortcut icon" href="/img/najih.ico" type="image/x-icon">

    {{-- font-family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    
    {{-- Title --}}
    <title>@yield('Title', '')</title>
    
</head>
<body>
<header class="head">
<div class="navbar">

    <div class="logo-div">
    <img src="/img/najehLogo.png" alt="" srcset="" class="logo-img">   
    </div>

    <div class="link">
                <a href="{{url('/')}}" class="nav-links" active>Home</a>
                <a href="/course" class="nav-links">Courses</a>
                <a href="{{url('/register')}}" class="nav-links">Sign up</a>
                {{-- <a href="{{url('/login')}}" class="nav-links">Sign in</a> --}}
                <a href="{{url('/about')}}" class="nav-links">About</a>
                <a href="{{url('/contact')}}" class="nav-links">Contact Us</a>
                <a href="{{url('/contact')}}" class="nav-links">Contact Us</a>

    </div>
</div>    
</header><br>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.skypack.dev/pin/@hotwired/turbo@v7.1.0-V83RMQBlYCPK9CvTqQoL/mode=imports,min/optimized/@hotwired/turbo.js"></script>

    <!-- custom css file link  -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/style.css">
    @livewireStyles
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="{{url('')}}" class="logo"> <i class="fas fa-lightbulb"></i> furni </a>

        <form action="" class="search-form">
            <input type="search" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </header>

    <!-- header section ends  -->

    <!-- closer btn  -->

    <div id="closer" class="fas fa-times"></div>

    <!-- navbar  -->

    <nav class="navbar">
        <a href="{{url('')}}">home</a>
        <a href="{{url('shop')}}">shop</a>
        <a href="{{url('about')}}">about</a>
        <a href="{{url('team')}}">team</a>
        <a href="{{url('blog')}}">blog</a>
        <a href="{{url('contact')}}">contact</a>
    </nav>

    <!-- Scripts -->
    @yield('content')
<!-- footer section  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a href="home.html"> <i class="fas fa-arrow-right"></i> home</a>
        <a href="shop.html"> <i class="fas fa-arrow-right"></i> shop</a>
        <a href="about.html"> <i class="fas fa-arrow-right"></i> about</a>
        <a href="team.html"> <i class="fas fa-arrow-right"></i> team</a>
        <a href="blog.html"> <i class="fas fa-arrow-right"></i> blog</a>
        <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
        <a href="#"> <i class="fas fa-arrow-right"></i> terms of user</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest</a>
    </div>

    <div class="box">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </div>

</div>

</section>

    @livewireScripts
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>

</html>
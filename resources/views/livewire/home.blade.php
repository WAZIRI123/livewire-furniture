@extends('layouts.app')
@section('title','home')
@section('content')
   <!-- shopping cart  -->

   <div class="shopping-cart">

<div class="box">
    <i class="fas fa-times"></i>
    <img src="../asset/image/cart-img-1.jpg" alt="">
    <div class="content">
        <h3>morden furniture</h3>
        <span class="quantity"> 1 </span>
        <span class="multiply"> x </span>
        <span class="price"> $140.00 </span>
    </div>
</div>

<div class="box">
    <i class="fas fa-times"></i>
    <img src="../asset/image/cart-img-2.jpg" alt="">
    <div class="content">
        <h3>morden furniture</h3>
        <span class="quantity"> 1 </span>
        <span class="multiply"> x </span>
        <span class="price"> $140.00 </span>
    </div>
</div>

<div class="box">
    <i class="fas fa-times"></i>
    <img src="../asset/image/cart-img-3.jpg" alt="">
    <div class="content">
        <h3>morden furniture</h3>
        <span class="quantity"> 1 </span>
        <span class="multiply"> x </span>
        <span class="price"> $140.00 </span>
    </div>
</div>

<div class="box">
    <i class="fas fa-times"></i>
    <img src="../asset/image/cart-img-4.jpg" alt="">
    <div class="content">
        <h3>morden furniture</h3>
        <span class="quantity"> 1 </span>
        <span class="multiply"> x </span>
        <span class="price"> $140.00 </span>
    </div>
</div>

<h3 class="total"> total : <span>$560.00</span> </h3>

<a href="#" class="btn">checkout cart</a>

</div>

<!-- login form  -->

<div class="login-form">

<form action="">
    <h3>login form</h3>
    <input type="email" placeholder="enter your email" class="box">
    <input type="password" placeholder="enter your password" class="box">
    <div class="remember">
        <input type="checkbox" name="" id="remember-me">
        <label for="remember-me">remember me</label>
    </div>
    <input type="submit" value="login now" class="btn">
    <p>forget password? <a href="#">click here</a></p>
    <p>don't have an account? <a href="#">create now</a></p>
</form>

</div>

<!-- home section starts  -->

<section class="home">

<div class="slides-container">

    <div class="slide active">
        <div class="content">
            <span>new arrivals</span>
            <h3>flexible chair</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quisquam, magnam enim sed debitis perspiciatis.</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
            <img src="../asset/image/home-img-1.png" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <span>new arrivals</span>
            <h3>flexible chair</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quisquam, magnam enim sed debitis perspiciatis.</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
            <img src="../asset/image/home-img-2.png" alt="">
        </div>
    </div>

</div>

<div id="slide-next" onclick="next()" class="fas fa-angle-right"></div>
<div id="slide-prev" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

<div class="banner">
    <img src="../asset/image/banner-1.jpg" alt="">
    <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
    </div>
</div>

<div class="banner">
    <img src="../asset/image/banner-2.jpg" alt="">
    <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
    </div>
</div>

<div class="banner">
    <img src="../asset/image/banner-3.jpg" alt="">
    <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
    </div>
</div>

</section>

<!-- banner section ends -->

@endsection
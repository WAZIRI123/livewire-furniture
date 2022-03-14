@extends('layouts.app')
@section('title','About')
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

<section class="heading">
    <h3>about us</h3>
    <p> <a href="{{url('')}}">home</a> / <span>about</span> </p>
</section>

<section class="about">

    <div class="image">
        <img src="../asset/image/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>welcome to our shop</span>
        <h3>we make your home more astonishing</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officiis, reiciendis veniam incidunt architecto quam velit dolorum exercitationem cum aliquam ab quas dicta dolores ad earum quasis.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci totam, nam voluptates quis delectus. Ea quo repudiandae.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<section class="services">

    <h1 class="title"> <span>our services</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../asset/image/serv-1.svg" alt="">
            <h3>product selling</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="../asset/image/serv-2.svg" alt="">
            <h3>product designing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="../asset/image/serv-3.svg" alt="">
            <h3>24 / 7 support</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>
@endsection
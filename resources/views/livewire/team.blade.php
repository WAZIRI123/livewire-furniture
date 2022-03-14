@section('content')

<body>

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
        <h3>our team</h3>
        <p> <a href="home.html">home</a> / <span>team</span> </p>
    </section>

    <section class="team">

        <h1 class="title"> <span>our team</span> <a href="#">view all >></a> </h1>

        <div class="box-container">

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-1.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-2.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-3.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-4.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-5.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

            <div class="box">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <div class="image">
                    <img src="../asset/image/team-6.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>

        </div>

    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
@endsection
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troutys</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts-->

    <header>

        <input type="checkbox" id="toggler">
        <label for="toggler" class="fa-solid fa-bars"></label>

        <a href="#" class="logo"><span>.</span>troutys</a>

        <nav class="navbar">
            <a href="#acasa">Acasa</a>
            <a href="#desprenoi">Despre noi</a>
            <a href="#produse">Produse</a>
            <a href="#recenzii">Recenzii</a>
            <a href="#contact">Contact</a>

            @if (Route::has('login'))
            @auth
            <div class="icons">
                <a href="{{ url('/') }}" class="fa-solid fa-cart-shopping"></a>
                @else
                <a href="{{ route('login') }}" class="fa-solid fa-user"></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="fa-solid fa-address-card"></a>
            </div>
        </nav>
        @endif
        @endauth
        @endif
    </header>

    <!-- header section ends-->


    <!-- acasa section starts-->

    <section class="acasa" id="acasa">
        <div class="content">
            <h3>Produse</h3>
            <span>nvwkwnvw</span>
            <p>fnsjvnfdvjjjjjjkdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</p>
            <input type="checkbox" id="button">
            <label for="button" class="btn">Cumpara acum</label>

        </div>

    </section>

    <!-- acasa section ends-->

    <!-- desprenoi section starts-->

    <section class="desprenoi" id="desprenoi">
        <h1 class="heading">despre noi</h1>
        <div class="row">
            <div class="photo">
                <img src="image/poza2.jpg">
                <h2>calitate superioara</h2>
            </div>
            <div class="content">
                <h3>De ce noi?</h3>
                <p> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                <a href="#" class="citeste">citeste mai mult</a>
            </div>
        </div>
    </section>
    <!-- desprenoi section ends-->

    <!-- icons section starts-->
    <section class="icons-container">
        <div class="icons">
            <img src="image/fast-delivery.png" alt="">
            <div class="info">
                <h3>delivery</h3>
                <span>all orders</span>
            </div>
        </div>
        <div class="icons">
            <img src="image/quality.png" alt="">
            <div class="info">
                <h3>quality</h3>
                <span>bla bla bla</span>
            </div>
        </div>
        <div class="icons">
            <img src="image/card.png" alt="">
            <div class="info">
                <h3>payment</h3>
                <span>security</span>
            </div>
        </div>
        </div>
    </section>
    <!-- icons section ends-->

    <!-- produse section starts-->
    <section class="produse" id="produse">
        <h1 class="heading">noutati</h1>

        <div class="box-container">

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="image/prod1.jpg" alt="">
                    <div calss="icons">
                        <a href="#" class="fa-solid fa-cart-shopping"> adauga in cos</a>
                    </div>
                </div>
                <div class="content">
                    <h3>Fish&chips</h3>
                    <div class="pret">20lei<span> 28lei</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="image/prod1.jpg" alt="">
                    <div calss="icons">
                        <a href="#" class="fa-solid fa-cart-shopping"> adauga in cos</a>
                    </div>
                </div>
                <div class="content">
                    <h3>mancare</h3>
                    <div class="pret">20lei<span> 28lei</span> </div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="image/prod1.jpg" alt="">
                    <div calss="icons">
                        <a href="#" class="fa-solid fa-cart-shopping"> adauga in cos</a>
                    </div>
                </div>
                <div class="content">
                    <h3>mancare</h3>
                    <div class="pret">20lei<span> 28lei</span> </div>
                </div>
            </div>

        </div>
    </section>
    <!-- produse section ends-->

    <!-- recenzii section starts-->

    <section class="recenzii" id="recenzii">
        <h1 class="heading">recenzii clienti</h1>
        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div calss="user">
                    <img src="image/user.png" alt="">
                    <div class="user-info">
                        <h3>John</h3>
                        <span>client multumit</span>
                    </div>
                    <p> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                </div>
            </div>
            <span class="fa-solid fa-qoute-right"></span>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div calss="user">
                    <img src="image/user.png" alt="">
                    <div class="user-info">
                        <h3>John</h3>
                        <span>client multumit</span>
                    </div>
                    <p> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                </div>
            </div>
            <span class="fa-solid fa-qoute-right"></span>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div calss="user">
                    <img src="image/user.png" alt="">
                    <div class="user-info">
                        <h3>John</h3>
                        <span>client multumit</span>
                    </div>
                    <p> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                </div>
            </div>
            <span class="fa-solid fa-qoute-right"></span>
        </div>
    </section>

    <!-- recenzii section ends-->

    <!-- contact section starts-->

    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>

        <div class="row">
            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea name="" class="box" placeholder="your message.." id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
        </div>
        </div>
    </section>

    <!-- contact section ends-->

    <!-- subsol section starts-->

    <section calss="subsol">
        <div calss="continut">
            <div class="rand">
                <h3>Linkuri rapide</h3>
                <a href="#">acasa</a>
                <a href="#">despre noi</a>
                <a href="#">produse</a>
                <a href="#">recenzii</a>
                <a href="#">contact</a>
            </div>
            <div class="rand">
                <h3>Linkuri utile</h3>
                <a href="#">contul meu</a>
                <a href="#">comanda mea</a>
            </div>
            <div class="rand">
                <h3>Locatie</h3>
                <a href="#">CLuj-Napoca</a>
            </div>
            <div class="rand">
                <h3>Inforamtii contact</h3>
                <a href="#">+40751157454</a>
                <a href="#">info@troutys.com</a>
                <a href="#">Cluj-Napoca, Romania - 450715</a>
                <img src="image/visa-mastercard-paypal.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- subsol section ends-->
</body>

</html>
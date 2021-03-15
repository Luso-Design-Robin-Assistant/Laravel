
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Robin assistant</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-content">
                <div class="navbar-logo"></div>
                <div class="navbar-menu">
                    <div class="navbar-links">
                        <a class="nav-link" href="#what-is-robin">What is Robin?</a>
                        <a class="nav-link" href="#benefits">Benefits</a>
                        <a class="nav-link" href="#how-it-works">How does it work?</a>
                        <a class="nav-link" href="#faq">FAQ</a>
                    </div>
                    <div class="navbar-login">
                        <div class="nav-language">
                            <img src="{{ asset('../resources/images/np.png') }}" alt="">
                        </div>
                        <a class="nav-login-btn" href="#login">Sign up/Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <div class="main">
            <section class="hero-image bg-color-444">
                <div class="hero-content color-fff txt-cen">
                    <h1>Robin assists <br>
                        your daily assistant</h1>
                    <p>
                        Robin Assistant is a new assistive software solution for <br> people with special needs and their carers in performing
                        <br> everyday activities.
                    </p>
                    <a class="hero-btn" href="#lees-meer">Read more</a>
                </div>
            </section>
            <div class="main-content">
                <section class="overflow-vis">
                    <div class="section overflow-vis h-250">
                        <div class="img-div">
                            <div class="number">1</div>
                        </div>
                        <div class="img-div">
                            <div class="number">2</div>
                        </div>
                        <div class="img-div">
                            <div class="number">3</div>
                        </div>
                    </div>
                    <div class="section bg-color-444">
                        <div class="txt-div color-fff txt-cen">
                            <h3>Independence</h3>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                        <div class="txt-div color-fff txt-cen">
                            <h3>Daily routines</h3>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                        <div class="txt-div color-fff txt-cen">
                            <h3>Dashboard management</h3>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                    </div>
                </section>
                <section class="">

                </section>
            </div>
        </div>

    </body>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('../js/app.js') }}"></script>

</html>

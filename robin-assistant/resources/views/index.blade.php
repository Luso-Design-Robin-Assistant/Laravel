
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

        <!-- Header -->
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
            <section class="hero-image">
                <div class="hero-content color-white txt-cen">
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
                    <div class="section-1 bg-dgrey overflow-vis h-250">
                        <div class="box-div">
                            <div class="number">1</div>
                        </div>
                        <div class="box-div">
                            <div class="number">2</div>
                        </div>
                        <div class="box-div">
                            <div class="number">3</div>
                        </div>
                    </div>
                    <div class="section-1 bg-dgrey">
                        <div class="txt-div color-white txt-cen">
                            <h3>Independence</h3>
                            <p>Robin has several benefits to make your daily life
                                as comfortable as possible. What are the benefits
                                of Robin Assistent and why should you use it?</p>
                        </div>
                        <div class="txt-div color-white txt-cen">
                            <h3>Daily routines</h3>
                            <p>Robin has several benefits to make your daily life
                                as comfortable as possible. What are the benefits
                                of Robin Assistent and why should you use it?</p>
                        </div>
                        <div class="txt-div color-white txt-cen">
                            <h3>Dashboard management</h3>
                            <p>Robin has several benefits to make your daily life
                                as comfortable as possible. What are the benefits
                                of Robin Assistent and why should you use it?</p>
                        </div>
                    </div>
                </section>
                <section id="what-is-robin">
                    <div class="section-2 bg-white">
                        <div class="img-section-2"></div>
                        <div class="txt-section-2">
                            <h1 class="color-green">What is robin service?</h1>
                            <p>Robin is an assistive software solution that allows
                                carers to set up and plan daily activities for the
                                ones they are taking care of. Robin will then assist
                                the individual in performing these activities by
                                providing step-by-step guidance, using images,
                                text and audio instructions.</p>
                            <p>During the XI Autism-Europe International Congress
                                2016 in Edinburgh, one small booth surprised many
                                of the attendees. It was Robin officially presenting
                                for the first time, showcasing its interface and
                                fresh design which was developed together with
                                Mediacollege Amsterdam. The Robin team was very
                                happy to have been met with overwhelmingly positive
                                reactions, advice, and support from people with
                                autism, their family members and carers, therapists,
                                and autism specialists. All of them provided their
                                feedback, opinions, new ideas, and many other very
                                useful contributions. Everyone shared our goal of
                                creating a service that fully caters to the needs
                                of people with special needs, helping them to have
                                a better quality of life.</p>
                        </div>
                    </div>
                </section>
                <section class="sign-up section overflow-vis">
                    <div class="txt-div color-fff txt-cen sign-up-div">
                        <h3>Sign up now</h3>
                        <p>Did we already convince you? Get Robin Assistant today
                            and start helping others.</p>
                        <div class="button-div">
                            <a class="nav-login-btn" href="#login" style="color: white;">Sign up/Login</a>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <!-- Footer -->
        <footer class="bg-dgrey">
            <div class="footer-content">
                <p class="color-white">&copy; Copyright 2021 Luso Design</p>
                <a class="footer-link color-white" href="#">Privacyverklaring</a>
                <a class="footer-link color-white" href="#">Algemene voorwaarden</a>
            </div>
        </footer>

    </body>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('../js/app.js') }}"></script>

</html>

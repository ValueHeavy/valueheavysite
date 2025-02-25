<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Valueheavy Coaching</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Laravel/Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet" type="text/css">

        <!-- Responsiveness Media Queries -->
        <link href="{{ asset('css/mediaqueries.css') }}" rel="stylesheet" type="text/css">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/828b557ec0.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="cover"></div>
        <header id="top">
        <nav>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="container nav-container">
                <ul class="navlist">
                    <li><a href="#top" class="logobox scroll"><div class="logo"></div></a></li>
                    <li><a class="navlink scroll" href="#about">Mission</a></li>
                    <li><a class="navlink scroll" href="#coaches">Team</a></li>
                    <li><a class="navlink scroll" href="#reviews">Reviews</a></li>
                    <li><a class="navlink scroll" href="#social-media">Contact</a></li>
                </ul>
            </div>
        </nav>
            <div class="mainlogo-box">
                <div class="mainlogo"></div>
            </div>     
        </header>
        <main>
        <section class="about red" id="about">
            <h3 class="section-title">Mission</h3>
            <div class="container">
                
                <div class="info">
                <p>
                ValueHeavy Coaching strives to provide the most affordable and reliable poker coaching services out there. We offer both personal and group coaching from professional poker players that have proven themselves in the poker world and have the needed experience to teach microstakes players from the ground up. 
                </p>
                </div>
            </div>
        </section>
        <section class="coaches" id="coaches">
            <div class="container">
                <h3 class="section-title">The Team</h3>
                <div class="row">
                    <div class="col-lg-4 pic-container ">
                        <div class="coach-pic peter">
                        </div>
                    </div>
                    <div class="coach-container col-lg-8">
                        <div>
                            <p><span class="tag">Name: </span> Peter</p>
                            <p><span class="tag">Pricing: </span> €39,-/h</p>
                            <p><span class="tag">Description: </span>  I’ve been playing poker for 12 years, playing professionally for 4, and coaching for 2. During this time I’ve coached about a dozen people in the low microstakes cash games and taught them the most valuable tools and knowledge they need to escape these. My focus is on clear understandable explanations and using exploitative gameplay to achieve the biggest winrate. Personally, I played Pokerstars Zoom until I started crushing 25NLz, after which I moved my bankroll to Unibet, where I still play today at 100NL. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 pic-container ">
                            <div class="coach-pic rafael">
                            </div>
                        </div>
                    <div class="coach-container col-lg-8">
                        <div>
                            <p><span class="tag">Name: </span> Rafael </p>
                            <p><span class="tag">Pricing: </span> €30,-/h</p>
                            <p><span class="tag">Description: </span> Hello fellow poker enthusiasts! My name is Rafael and I am a 22-year-old Poker player from Italy. I have been playing poker for two years and have been taking it seriously from the very beginning. I currently play 50/100nl on both Pokerstars.it and on GG poker. I have experience playing regular and zoom tables, so I know the advantages, disadvantages, and intricacies of both formats very well. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="parallax">
            
        </div>
        <section class="reviews red" id="reviews">
            <div class="container">
            <h3 class="section-title">Reviews</h3>
            <div class="carousel">
                <button class="carousel__button carousel__button--left is-hidden">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="carousel__track-container">
                    <ul class="carousel__track">
                        <li class="carousel__slide current-slide">
                            <img class="carousel__image" src="{{ asset('img/review1.png') }}" alt="">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="{{ asset('img/review2.jpg') }}" alt="">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="{{ asset('img/review3.jpg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <button class="carousel__button carousel__button--right">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="carousel__nav">
                    <button class="carousel__indicator current-slide"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                </div>
            </div>
                <ul class="carousel__quotes">
                    <li class="carousel__quote current-quote">"I started working with Peter when he approached me back in 2019, I was posting some hands in a different group and was struggling to get a better understanding of the game of Poker. He proposed coaching to me and offered me a free session to see if it would be a good fit. I had a very high work ethic at the time to improve and when we started coaching I instantly saw a benefit. One thing that really helped was tips on improving my mental game, I also saw a lot of benefit in understanding how to exploit other opponents better. Whilst I had coaching a very long time ago, I can confidently say that If I did not have that experience in the first place I wouldn't be where I am today, I am very thankful to also say I have formed a strong friendship with Peter whilst progressing on my journey and its great to see his brand grow where he can help others start the journey I am currently on. Peter gave me the tools to go out on my own and improve my game massively, I now battle the 50NL streets and starting to move mainly into playing 100NL within the space of 1.5 years"</li>
                    <li class="carousel__quote">"Hey, my name is Emils and I'm a cash game grinder from Latvia. I started getting coaching from Peter in February 2020 because I wanted to take poker more seriously and eventually quit my 9/5 job. The coaching sessions were very helpfull and also fun at the same time. My understanding about the game got better after every coaching we had. In only couple months I went from marginal NL5 winner to crushing NL25. So in July 2020 I finally quit my job and been grinding ever since. Could not have done that without Peter's help and I honestly think he's a really great coach."</li>
                    <li class="carousel__quote">"ValueHeavy-Coaching defintitely helped me to improve my game a ton. Before starting the coaching i was a fairly passive break-even 5NL player and i was at a point where i realised i'm gonna need some help from experienced players to beat the ridicolously high rake at the micros. After a few weeks of coaching i managed to beat 5NL properly, moved up to 10NL and currently i am shotting 16NL. I would recommend ValueHeavy-Coaching to anyone who is interested in improving quickly and preparing their game for future stakes at which real money can be made. In my opinion it is very important to realise that it is no shame to get yourself help in such an early stage of your poker career because games are getting tougher and you basically want to get out of the microstakes rake trap as soon as possible."</li>
                </ul>
            </div>
        </section>
        <section class="social-media" id="social-media">
            <div class="container">
                <h3 class="section-title">Contact</h3>
                <h5 class="head-contact"><i class="far fa-user-circle"></i> Find us on Social Media </h5>
                <p>Follow us on all our social media. Valueheavy has a welcoming community! Our coaches are active on all of these platforms shown below.</p> 
                <div class="row justify-content-center">
                    <a href="https://www.youtube.com/channel/UCWPqWj7aYn059xuFO1e4HZg" target="_blank" class="social-link">
                        <div class="col-2-md">
                            <h5 class="platform">youtube</h5>
                            <p class="icon-box"><i class="fab fa-youtube social"></i></p>
                        </div>
                    </a>
                    <a href="https://discord.gg/yP5Mcpam" target="_blank" class="social-link">
                        <div class="col-2-md">
                            <h5 class="platform">discord</h5>
                            <p class="icon-box"><i class="fab fa-discord social"></i></p>
                        </div>
                    </a>
                    <a href="https://www.twitch.tv/valueheavy" target="_blank" target="_blank" class="social-link">
                        <div class="col-2-md">
                            <h5 class="platform">twitch</h5>
                            <p class="icon-box"><i class="fab fa-twitch social"></i></p>
                        </div>
                    </a>
                    <a href="https://twitter.com/valueheavy" target="_blank" target="_blank" class="social-link">
                        <div class="col-2-md">
                            <h5 class="platform">twitter</h5>
                            <p class="icon-box"><i class="fab fa-twitter-square social"></i></p>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/valueheavy/" target="_blank" target="_blank" class="social-link">
                        <div class="col-2-md">
                            <h5 class="platform">Instagram</h5>
                            <p class="icon-box"><i class="fab fa-instagram-square social"></i></p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- <div class="contactform">
                <div class="container">
                <h5 class="head-contact"><i class="far fa-envelope"></i> Contactform </h5>
                <p>Do you have any specific questions? Do not hesitate to send us an e-mail and we will get back to you as soon as possible. </p>
                <button class="modal-btn btn btn-primary">Open Contactform </button>
                <div class="modal-bg">
                    <div class="modalform container"> 
                        <span><i class="far fa-times-circle close-modal"></i></span>
                        <form action="/" method="POST">
                                <h3 class="section-title">Contactform</h3>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    <div>{{ $errors->first('name') }}</div>        
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail:</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                                    <div>{{ $errors->first('email') }}</div>        
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                    <div>{{ $errors->first('subject') }}</div>   
                                </div>     
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type Your Message Here"></textarea>
                                    <div>{{ $errors->first('message') }}</div>
                                </div>
                                @csrf
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>  -->
        </section>        
        </main>
        <footer>
            <div class="container">
                <div class="row footer-container">
                    <div class="col-4-md">
                        <ul>
                            <li class="footer-title"><h5>Contact</h5></li>
                            <li>Email: pietpat@valueheavy.com</li>
                            <li>Discord</li>
                        </ul>
                    </div>
                    <div class="col-4-md">
                        <ul>
                            <li class="footer-title"><h5>Follow Us</h5></li>
                            <li>Instagram</li>
                            <li>Twitch</li>
                            <li>Youtube</li>
                            <li>Twitter</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h6 class="copyright">&copy Valueheavy</h6>
        </footer>

        

        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/scripts.js') }}" type="text/javascript" defer></script>
    </body>
</html>

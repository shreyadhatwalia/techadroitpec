<? 
    include "connection.php"; 
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Techadroit</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" id = "title"><strong>Techadroit</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Sponsors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="index.php?logout=1"><span class="glyphicon glyphicon-user"></span>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                    
                <div class="intro-heading">TECHADROIT</div>
                <div class="intro-lead-in">To unleash the gamer within you!</div>
                <a href="#services" class="page-scroll btn btn-xl"><span class = "span_style">START</span></a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id = "about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class= "section-heading">About Us</h2>
                </div>
            </div>
            <br><br>
            
            <div class="timeline-heading text-center">
                        <h4>IEEE PEC</h4>
            </div>
            <br>
            <div class="row">
               <div class="col-md-5" >
                       <img src="img/pec.jpg" class="img-responsive dimen" alt="About images" border:5>
               </div>
               <div class = "col-md-7">
                    <div class="timeline-body resp">
                    <p align = "justify">IEEE Student Branch was started in PEC in January 2001, under the guidance of Dr. Gurnam Singh (in charge of IEEE, PEC Student Chapter) and Mr. Sanjeev Sofat, with Mr. Mohit Aggarwal as its Chairperson. The 2003 batch of the computer society consisted of 22 enthusiastic members, continuously striving to gain and share technical knowledge and awareness.<br>

                        At IEEE-PEC we strive to take the vision of IEEE forward. IEEE-PEC has been the strongest and the most productive technical society in the college for years. It has been serving as a knowledge provider, opportunities provider and a practice platform for Computer Science, Electrical and Electronics engineers. Students from other trades having overlapping interests are free to join the society. We hold regular workshops by students as well as experts on various technologies such as Android, JavaScript, OpenCV, MATLAB, Big Data, VLSI etc. Our students participate in various inter-college competitions held in various IITs and NITs and bring laurels for the college. Last year IEEE-PEC organized 5 events at PECFest’14, the annual technical-cultural fest of our college that attracted a huge audience with the main attraction being Hackathon-PEC, a 12-hour long coding extravaganza.
                    </p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="timeline-heading text-center">
                <h4>TECHADROIT 2016</h4>
            </div>
            <br>
            <div class="row">
            <div class="col-md-5" >
                <img src="img/logos/techadroit2015.png" class="img-responsive dimen" alt="About images" border ="90">
            </div>
                <div class = "col-md-7">
                    <div class="timeline-body resp">
                        <p>     Techadroit 2016         </p>
                    </div>
                </div>
            </div>   
        </div>  
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/designmania.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Design Mania</h4>
                        <p class="text-muted">Website Designing Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/rapidfire.jpeg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rapid Fire</h4>
                        <p class="text-muted">Technical Quizzing Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/techblog.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Techblog</h4>
                        <p class="text-muted">Online Writing Event</p>
                    </div>
                </div>
                                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/codestrike.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Code Strike</h4>
                        <p class="text-muted">Coding Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/innothon.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Innothon</h4>
                        <p class="text-muted">Electronics Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/rushhour.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rush Hour</h4>
                        <p class="text-muted">Robotics Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/photography.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Unleash With A Flash</h4>
                        <p class="text-muted">Photography Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/imageprocessing.gif" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pixelate</h4>
                        <p class="text-muted">Image Processing Event</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/transporter.jpg" class="img-responsive img-height-port" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Transporter</h4>
                        <p class="text-muted">Robotics Event</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SPONSORS</h2>
                </div>
            </div>
            <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    
                        <img src="img/logos/cod_blocks.png" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
                <div class="col-md-3 col-sm-6">
                        <img src="img/logos/codechef.jpg" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
                <div class="col-md-3 col-sm-6">
                        <img src="img/logos/kyrion.jpg" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
                <div class="col-md-3 col-sm-6">
                        <img src="img/logos/wac.png" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img src="img/logos/startupelves.jpg" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
                <div class="col-md-3 col-sm-6">
                        <img src="" class="img-responsive img-centered" alt="" class = "img-size">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                        <img src="" class="img-responsive img-centered" alt="" class = "img-size">
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                        <img src="" class="img-responsive img-centered" alt="" class = "img-size">
                </div>
            </div>

        </div>
    </aside>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                </div>
            </div>            
            <div class="row">
                    <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Prof. Rintu Khanna</h4>
                        <p class="text-muted">Officer Incharge, IEEE PEC</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="" class="img-responsive img-circle" alt="">
                        <h4>Nikhil Arora</h4>
                        <p class="text-muted">Chairperson, IEEE PEC</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rashpinder Jagait</h4>
                        <p class="text-muted">Vice Chairperson, IEEE PEC</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted timeline-heading"><h3>WEBSITE DEVELOPMENT TEAM</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Shreya Dhatwalia</h4>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Shivam Thakur</h4>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mayank Goyal</h4>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!--
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">contact</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    -->
    
    <section id = "contact">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-12 text-center">
                    <h2 class = "section-heading resp">contact</h2>
                </div>
                <br>
                <div class = "row">
                <div>
                    <div class = "timeline-heading resp">
                    <h3>How to reach us?</h3><br>
                    </div>
                    <div class = "row">
                    <div class = "col-lg-6">
                    <div id = "map" class = "map-responsive"></div>
                    </div>
                    <div class = "col-lg-6">
                        <address class="contact-details resp">
                                <h3>Contact Us</h3>                     
                                <p><i class="fa fa-pencil"></i> PEC University of Technology, <span>Sector - 12,</span> <span>Chadigarh </span><span>160012</span></p><br>
                                <p><i class="fa fa-phone"></i> Phone: (+91) 95306-62773 </p>
                                <p><i class="fa fa-envelope"></i> pec.ieee@gmail.com</p><br>
                                <p><i class = "fa fa-user"></i> Prof. Rintu Khanna <span>Officer Incharge, </span><span>IEEE PEC</span></p>
                                <p><i class = "fa fa-phone"></i> Phone: (+91) 97797-05738 </p>
                                <p><i class = "fa fa-envelope"></i> ieee@pec.edu.in</p>
                            </address>
                    </div>
                    </div>
                    <br>
                    <div class = "row">
                    <div class = "col-lg-12">
                    <address class = "contact-details resp">
                    <h3 >IEEE PEC</h3>
                    </div></div>
                    <div class = "row">
                    <div class = "col-lg-6">
                    <address class = "contact-details resp">
                    <p><i class = "fa fa-user"></i> Nikhil Arora <span>Chairperson, </span> <span>IEEE PEC</span></p><br>
                    <p><i class = "fa fa-phone"></i> Phone: (+91) 95306-62773 </p>
                    <p><i class = "fa fa-envelope"></i> nikhilarora1696@gmail.com</p>
                    </div>
                    
                    <div class = "col-lg-6">
                    <address class = "contact-details resp">
                    <p><i class = "fa fa-user"></i> Rashpinder Jagait <span>    Vice Chairperson, </span> <span>IEEE PEC</span></p><br>
                    <p><i class = "fa fa-phone"></i> Phone: (+91) 98728-88599 </p>
                    <p><i class = "fa fa-envelope"></i> rashjagait@gmail.com</p>
                    </div>

            </div>
            </div>
            </div>      
        </div>
    </section>
 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href=""><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/TechadroitPEC/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class ="mid">
                <h2>Design Mania</h2>
                                <p class="item-intro text-muted">Website Design Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">Princess Pia has been taken by the mischievous Tai Lung. With the prestige of the Kingdom at stake, General Po is assigned the task of defeating Tai Lung and bringing back Pia. Since Po knows little of Tai Lung he calls upon his revered Master Shifu for help. Shifu now looks up to you to design a website interface that offers special tools by him, that may help Po.
                                </p>
                                <h4 class = "timeline-heading">TOOLS FOR MAKING WEBSITE:</h4>
                                <p class = "timeline-body" align = "justify">
                                You are allowed to use following frameworks for building the website:<br>
Plain HTML/CSS/JavaScript using Text Editors- Notepad, Notepad++ and Sublime text.<br>
You are provided with Internet Access for downloading suitable stuffs. Invent rest of the plot yourself.
                                </p> 
                                <h4 class = "timeline-heading">JUDGING CRITERIA:</h4>
                                <p class = "timeline-body" align = "justify">You will be marked on the basis of your website’s interface, innovation, design and content.</p>
                                <h4 class = "timeline-heading">Breakup:</h4>
                                <p class = "timeline-body" align = "left"><ul class = "timeline-body">
                                <li>Features – 50 %</li> <li>Designing – 30 %</li> <li>Reliability – 10%</li> <li>Innovation – 10%</li></ul></p>
                                <h4 class = "timeline-heading">TIME ALLOWED: 4 hours</h4>
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>Rapid fire</h2>
                                <p class="item-intro text-muted">Technical Quizzing Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Task:</h4>
                                <p class = "timeline-body" align = "justify">Test your technical concepts and answer the questions as fast as you can!</p>
                                <h4 class = "timeline-heading">RULES:</h4>
                                <p class = "timeline-body" align = "left">
                                <ol><li>A team shall consist of maximum two persons.</li>
                                <li>Students of different educational institutions can make a team.</li>
                                <li>An individual cannot be part of more than one team.</li>
                                <li>The decision of the quiz-master will be final and will not be subjected to any change.</li>
                                <li>The participants shall not be allowed to use mobile or other electronic instruments.</li>
                                <li>The questions shall be in the form of multiple choice, True / False statement, Specific-answer question etc.</li>
                                <li>Audience shall not give any hints or clues to the competitors.</li></ol>
                                </p> 
                                <h3 class = "timeline-heading">EVENT DESCRIPTION:</h3>
                                <h4 class = "timeline-heading">ELIMINATION ROUND:</h4>
                                <p class = "timeline-body" align = "justify"><ul><li>This is a pen‐paper based quiz to check participant’s knowledge of basic aptitude, digital and analog circuits.</li>       
                                <li>The top 5 teams of the quiz will qualify to the second round.</li></ul></p>
                                <h4 class = "timeline-heading">FINAL ROUND:</h4>
                                <p class = "timeline-body" align = "left"><ul class = "timeline-body">
                                After calculating the sum of scores for the below mentioned rounds, the top 2 winner teams will be declared.
                                <ol><li><b>RAPID FIRE ROUND:</b> <ul><li>Each team will be asked 10 questions one after another in one minute’s time.</li>
                                <li>10 marks for the correct answer and negative 5 marks for the wrong answer.</li>
                                <li>If a team cannot answer the question, they can say pass for the next question. The question will not be forwarded to the next team </li></ul></li><li><b>AUDIO-VISUAL ROUND:</b><ul><li>Teams will be shown clips according to different concept of digital and analog electronics, embedded systems,etc and they have to answer question  related to architecture, practical utility,etc.</li>
                                <li>10 marks for the correct answer and 0 negative marks for the wrong answer. Also partial marking are allowed in some cases.</li>
                                <li>If a team cannot answer the question, it will be announced as a bonus question for other qualified teams with same marking scheme as described, with no negative marking applicable.</li>
                                <li>Answering time is only 30seconds.</li></ul></li></ol> </p>
                                ** The decision of judges will be final.
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class ="mid">
                <h2>Techblog</h2>
                                <p class="item-intro text-muted">Online Writing Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">Are you the next generation technology expert? Have desire to write about Tech? An avid reader of latest gazettes? Don't have a platform to express your ideas, give your views? IEEE PEC is continuing its tradition of giving tech lovers a one of its kind opportunity.<br>
"The online Tech-Blog competition”<br>
All with passion to write, its time to start shaping your skills.
                                </p>
                                <h4 class = "timeline-heading">DESCRIPTION:</h4>
                                <p class = "timeline-body" align = "justify">
                                This PECFest, IEEE PEC is initiating a Blog Contest providing a common platform for all the interested candidates to present their ideas on how technology is impacting society where they can get reviews and suggestions from like-minded people.                                </p> 
                                <h4 class = "timeline-heading">RULES:</h4>
                                <p class = "timeline-body" align = "justify">The initial contest ends on 18th March, 2017 midnight. Mail your entries at pec.ieee@gmail.com<br>
                                <ol><li>All students with a valid ID card of their respective educational institutes are eligible to participate.</li>
                                <li>No entries will be accepted after the deadline.</li>
                                <li>Can be submitted solo or in a group of maximum two.</li>
                                <li>Only one entry per team is allowed.</li>
                                <li>The blog must adhere to writing standards.</li>
                                <li>Word limit shouldn't exceed 500 words.</li>
                                <li>Plagiarism is strictly prohibited. If caught, entry will be directly disqualified.</li></ol>
                                There can be possibly more than one winner. Help readers understand your perspectives through writing. It can be one of your greatest contributions. Winning entries will be published in our biannual magazine</p>
                                <h4 class = "timeline-heading">RESOURCES:</h4>
                                <p class = "timeline-body" align = "left">Go through news articles, technical papers and stuff that allow you to find out and explore more about the technology, social concepts and its impact.</p>
                                
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

                        
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                        <div class ="mid">
                <h2>CODE STRIKE</h2>
                                <p class="item-intro text-muted">Coding event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">A terrorist attack is being planned. Counter-terrorists are required to fight back. First we need
to find the location and then defuse the bomb.<br>
This March, we bring to you an opportunity to put down the terrorism, in the form of our event,
CODE STRIKE. Decode the location in the first round and then build a code to defuse the bomb
in the next round and save the world from terrorisms by using your coding skills!! 
                                </p>
                                <h4 class = "timeline-heading"></h4>
                                <p class = "timeline-body" align = "justify">
                                <ul><li>Round 1: consists of pen-paper test to test the problem solving abilities.</li>
<li>Round 2: involves online coding questions. </li></ul>
                                </p> 
                                <h4 class = "timeline-heading">EVENT DESCRIPTION:</h4>
                                <p class = "timeline-body" align = "justify">For the event, you need to participate individually. There will be two rounds:<br>
                                <b>Round 1:</b><br> 
                                <ul><li>20 numerical problems will be given based on mathematical intricacies, statistical
inferences, physics, real-life situations and gaming stuff.</li>
<li>Participants will have to write mini-codes for solving tricky numerical problems and
can run their codes on their compiler and write the answers on the sheet provided.</li>
<li>Only final answers on the sheet will be evaluated, not the code.</li>
<li>Some problems marked by * will have double weightage.</li>
<li>50% of the total participants will advance for the secon round. </li></ul>
                                <br>
                                <b>Round 2:</b><br>
                                <ul><li>An online coding test will be conducted consisting of two questions.</li>
<li>The participant with max score in the second round will be the winner!! </li></ul></p>
                                <h4 class = "timeline-heading">Rules:</h4>
                                <p class = "timeline-body" align = "left"><ul class = "timeline-body">
                                <ul><li>Individual participation only, no teams allowed.</li>
<li>Participants have to bring their own laptops.</li>
<li>Charging points will be provided at the venue for assistance.</li>
<li>Use of electronic gadgets during quiz is strictly prohibited.</li>
<li>Each round will be of two hours.</li>
<li>The organizers reserve the rights to change any or all of the above rules. Change in
rules, if any will be highlighted on the website and notified to the registered teams. </li></ul></p>
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

                       
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>INNOTHON</h2>
                                <p class="item-intro text-muted">Electronics Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">The ship has sailed. The planet is close to doom! And it's your superhero skills only which can save the fleet and your home. It's a summon call to all the protagonists who have altruistic values, as they shall be required to apply these ideals to difficult dilemmas.

This time we bring to you an opportunity to serve in your very own Starfleet, in the form of our event, . Explore Innovate and Excel to develop digital circuitry to deal with the enemy and emerge as the Guardians of the Galaxy!
                                </p>
                                <h4 class = "timeline-heading">TASK:</h4>
                                <p class = "timeline-body" align = "justify"><ul><li>
                                Round 1 consists of pen‐paper test to test knowledge of digital and analog circuits.</li>
                                <li>
Round 2 involves simulation and hardware implementation of circuit according to problem statement provided.   </li></ul>                             </p> 
                                <h4 class = "timeline-heading">EVENT DESCRIPTION:</h4>
                                <p class = "timeline-body" align = "justify">For the event, you need to participate in teams of two. There will be two rounds‐<ul><li><b>Round 1</b>:<br>This is a pen‐paper based quiz to check participants’ knowledge of digital and analog circuits.

The top 5 teams of the quiz will qualify to the second round.</li><li><b>Round 2</b><br>:

The teams will be given a problem statement with multiple questions. They will need to design the circuit and simulate their solutions on any
simulating software.

Teams will also have to implement a circuit on the hardware. Teams will be marked for every solution circuit they design.

The team which accomplishes the task with the maximum points will be the winner!</li></ul></p>
                                <h4 class = "timeline-heading">RULES:</h4>
                                <p class = "timeline-body" align = "left">
                                <ul><li>A team consists of maximum 2 students.</li>

<li>Students of different educational institutions can make a team .</li><li>An individual cannot be part of more than one team.</li>

<li>The test in round one is a team event. Both members can contribute and solve questions.</li>
<li>Use of electronic gadgets during quiz is strictly prohibited.</li>
<li>Teams will be given 2 hours for simulation and hardware implementation of solution circuit.</li>
<li>Teams need to specify which simulating software/tool they will use, at the start of the event.</li>
</ul></p>
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>RUSH HOUR</h2>
                                <p class="item-intro text-muted">Robotics Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Description:</h4>
                                <p class = "timeline-body" align = "justify">A manually controlled bot is supposed to travel front and back in order to catch the balls. The arena is an inclined surface containing different types of obstacles so that the balls while coming down change their paths many times in order to confuse the participant maneuvering the bot. The balls are of different colours having different points. The bot would have to move such that it catches the most number of points and simultaneously is not catching the balls having negative points. The bot having the maximum number of points wins this event.
                                </p>
                                <h4 class = "timeline-heading">Game procedure:</h4>
                                <p class = "timeline-body" align = "justify">
                                <ul><li>Four different coloured balls of different points (Negative and Positive points) will be released simultaneously from one end. </li>
<li>The balls will collide with the obstacles and change its direction. The bot will have to track the ball and catch it when it will arrive at the opposite end. This will be repeated 20 times and the score will be noted in all cases.</li>
<li>Ball specification: A standard table tennis ball of four different colours will be used for the
event. There will be a ball also for bonus points.</li></ul>

                                </p> 
                                <h4 class = "timeline-heading">BOT SPECIFICATIONS:</h4>
                                <p class = "timeline-body" align = "justify"><ul><li>The manually controlled bot must fit in a cube of 25x25x25 cc.(excluding the hollow cylinder/cube).</li>
<li>No kind of  AC power supply will be provided at the event.</li>
<li>Each team is allowed to have only one bot.</li>
<li>The area through which the balls will pass can be a hollow cylinder of diameter 7 cm(maximum) or it can be a cube with side 7 cm.(maximum) </li> 
<li>The balls will pass through this hollow cylinder/cube and they won't be collected.</li></ul></p>
                                <h4 class = "timeline-heading">TEAM SPECIFICATIONS:</h4>
                                <p class = "timeline-body" align = "left"><ul>
                                <li>Each team must not exceed 3 members.</li>
<li>They may not necessarily be from the same institute.</li>
<li>Each team must have a team leader who must be present when called upon by the organizers.</li></ul></p>
                                
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>UNLEASH WITH A FLASH</h2>
                                <p class="item-intro text-muted">Photography Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">TECHADROIT presents to you - Unleash with a flash : roll, camera, action. This event offers a welcome

recluse from the tiring curriculum, and ofcourse to bring out the best photographer lurking beneath 

the stress of engineering studies. So, this techadroit  Explore your country and capture its allure and 

showcase your talent by capturing some innovating photographs on the theme : “ Made in INDIA”.
                                </p>
                                <h4 class = "timeline-heading">TASK:</h4>
                                <p class = "timeline-body" align = "justify">
                                This is an online event where participants are required to submit an innovative photograph on the

theme-‘MADE IN INDIA’. The entries need to be mailed at pec.ieee@gmail.com by 25th Feb, 17.
                                </p> 
                                <h4 class = "timeline-heading">RULES:</h4>
                                <p class = "timeline-body" align = "justify"><ul><li>The participants are requested to mail their individual entries.</li>

<li>Participants must register themselves and then mail their photograph at pec.ieee@gmail.com.</li>

<li>These photographs will be then uploaded on the techadroit official fb page by ieee team.</li></ul></p>
                                                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>


<!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>Pixelate</h2>
                                <p class="item-intro text-muted">Image Processing Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">
                                </p>
                                <h4 class = "timeline-heading">TOOLS FOR MAKING WEBSITE:</h4>
                                <p class = "timeline-body" align = "justify">
                                
                                </p> 
                                <h4 class = "timeline-heading">JUDGING CRITERIA:</h4>
                                <p class = "timeline-body" align = "justify"></p>
                                <h4 class = "timeline-heading">Breakup:</h4>
                                <p class = "timeline-body" align = "left"><ul class = "timeline-body">
                                </p>
                                
                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>


<!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class ="mid">
                <h2>Transporter</h2>
                                <p class="item-intro text-muted">Robotics Event</p>
                </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            </div>
                        </div>
                        <div class = "col-lg-6">
                                <h4 class = "timeline-heading">Abstract:</h4>
                                <p class = "timeline-body" align = "justify">
                                </p>
                                <h4 class = "timeline-heading">TOOLS FOR MAKING WEBSITE:</h4>
                                <p class = "timeline-body" align = "justify">
                                
                                </p> 
                                <h4 class = "timeline-heading">JUDGING CRITERIA:</h4>
                                <p class = "timeline-body" align = "justify"></p>
                                <h4 class = "timeline-heading">Breakup:</h4>
                                <p class = "timeline-body" align = "left"><ul class = "timeline-body">
                                </p>                                
                                </div>  
                        </div>
                        </div>
                        <div class = "mid">
                                <button type="button" class="btn btn-danger"><i class="fa fa-registered"></i> Register</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    
</body>
<script>
                var map;
                function initMap()
                {
                
                    map = new google.maps.Map(document.getElementById('map'), {center:{lat:30.7662, lng:76.7784}, zoom:18});
                    var tribeca = {lat:30.7662, lng:76.7784};
                    var marker = new google.maps.Marker({
                        position : tribeca,
                        map : map, 
                        title : 'PEC'
                    });
                    var infowindow = new google.maps.InfoWindow({
                        content:'Hi! Welcome to PEC University of TEchnology, Chandigarh'
                    });
                    marker.addListener('click', function(){
                    infowindow.open(map, marker);
                });
                }
                </script>
    
            <script async defer
                src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAde8RNBIPzCZDutHsRy55c2H2FhnbHxps&v=3.exp&callback=initMap">
            </script>
</html>


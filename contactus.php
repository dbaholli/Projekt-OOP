<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact us | Projekti</title>
        <link rel='stylesheet' href='style.css' type='text/css' />
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">Products</a></li>
                    <li><a href="sherbimet.html">SHERBIMET</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li class = "current"><a href="contactus.php">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>
</head>
    <body>
        <center>
        <div class="container">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <h1>Contact us</h1>
                    
                    

                    <form role="form" class="contact-form" action="vkontakt.php" method="post">


                        
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                                </div>
                            </div>
                            <br>
                            <div class="col">

                                <div class="form-group">
                                    <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <textarea  name="msg" id="msg" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                
                                <button type="submit" class="btn get-start">Send a message</button>
                            </div>
                        </div>
                    </form>
                </div>
    </body>
</html>
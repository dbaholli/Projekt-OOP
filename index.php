<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Design Project</title>
    <link rel="stylesheet" href="style.css" />
    <script src="validimikodit.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">Products</a></li>
                    <li><a href="sherbimet.html">SHERBIMET</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
<body onload="slider()">
    <div class="banner">
        <div class="slider">
            <img src="https://aimconsulting.com/wp-content/uploads/2020/10/angular-website-development.jpg" id="slideImg">
        </div>
        <div class="overlay">
            <div class="content">
                <h1>DE Digital Marketing & Web Dev</h1>
                <h3>Learn about digital marketing and web development</h3>
                <div>
                    <form action="about.html">
                    <button type="submit">Learn More</button>
                    <button type="submit">Contact Us</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
        var slideImg = document.getElementById("slideImg");

        var images = new Array(
            "img/slide1.jpg",
            "img/slide2.jpg",
            "img/slide3.jpg",
            "img/slide1.jpg"
        );

        var len = images.length;
        var i = 0;
        
        function slider(){
            if(i > len-1){
                i = 0;
            }
            slideImg.src = images[i];
            i++;
            setTimeout('slider()',1000);
        }
    </script> 
    

    <!-- <section id="showcase">
        <div class="container">
            <h1>Ofrojme sherbimet e Digital Marketing</h1>
            <p>Website profesionale & digital marketing per biznesin tuaj</p>
        </div>
    </section> -->

    <section id="newsletter">
        <div class="container">
            <h1>Merrni ofertat tona ne e-mail tuaj</h1>
            <form>
                <input type="email" placeholder="Enter Email..." />
                <button type="submit" class="button_1">Merr Oferten</button>
            </form>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="img/logo1.png" />
                <h3>Web Development</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="box">
                <img src="img/logo1.png" />
                <h3>Web Maintenance</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="box">
                <img src="img/logo1.png" />
                <h3>Digital Marketing</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>DE Digital Marketing, Copyright &copy; 2020/2021</p>
    </footer>
</body>
</body>
</html> 

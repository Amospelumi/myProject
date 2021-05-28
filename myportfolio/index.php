<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <!-- Navigation Bar Container -->
    <div class="navbar" id="Navigation">
        <img src="img/acw.png" alt="logo" width="90px">
        <ul>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a class="active" href="index.php"> Home</a></li>
        </ul>
    
    </div>
    <hr><br>
    
    <!-- Home page Banner -->
    <div class="banner">
        <img src="img/banner.jpg" alt="banner">
    
        <div class="text">  
            <h2>Welcome To<br>Amos Computer World</h2>
            <a href="service.php"><button>Continue >>></button></a>
        </div>
        
    </div><br>

    <div class="service">
        <h2 class="servehead">Our Services</h2>

        <table class="serv">
            <tr>
                <td><div class="serv1">
                    <div class="img1">
                        <img src="img/marketing.gif" alt="Digital Marketing" width="100%" height="100%">
                    </div>
                    <h3>Digital Marketing</h3>
                </div></td>

                <td><div class="serv1">
                    <div class="img1">
                        <img src="img/web-development.gif" alt="Digital Marketing" width="100%" height="100%">
                    </div>
                    <h3>Web Development</h3>
                </div></td>

                <td><div class="serv1">
                    <div class="img1">
                        <img src="img/ui.gif" alt="Digital Marketing" width="100%" height="100%">
                    </div>
                    <h3>UI/UX Design</h3>
                </div></td>

                <td><div class="serv1">
                    <div class="img1">
                        <img src="img/graphicsdesign.gif" alt="Digital Marketing" width="100%" height="100%">
                    </div>
                    <h3>Graphics Design</h3>
                </div></td>

                <td><div class="servbut">
                    <a href="service.php"><button>>>></button></a>
                </div></td>
            </tr>

        </table>

    </div>

    <br><br>

    <div class="ContactUs">
        <img src="img/customercare.jpg" alt="customercare">
        <form class="main" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
            <h2>Contact Us</h2>
            <table class="formtable">
                <tr>
                    <td><span id="gender">Full Name:</span><br><input margin-left: 70px; type="text" name="fname" placeholder="Full Name"></td>
                    <td><span id="gender">Email Address:</span><br><input size=100 type="text" name="email" placeholder="example@gmail.com"></td>
                </tr>

                <tr>
                    <td><span id="gender">Telephone:</span><br><input size=100 type="text" name="tel" placeholder="09023564789"></td>
                    <td><span id="gender">Date of Birth:</span><br><input size=100 type="date" name="date" placeholder="09023564789"></td>
                </tr>

                <tr>
                    <td><span id="gender">Message:</span><br><textarea name="message" id="message" cols="50" rows="10"></textarea></td>
                    <td><span id="gender">Gender:</span><br>
                        <select name="gender" id="gender">
                            <option value="select">Select Your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    
                    
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>

        </form>
        
    </div><br>

    <div class="aboutus">
        <h2 style="margin-left: 300px; color: rgb(99, 99, 99);">About The Founder</h2>
        
        <div class="content">
            <p>
                Hi my name is Abiodun Oluwapelumi Amos. I'm a Developer and as well study Computer Engineering in <br><br> 
                Abraham Adesanya Polytechnic Ijebu-Igbo. I graduated with a Distinction in my National Diploma Program. <br><br>
                I fell in love with technology right from my Junior Secondary School Days, and me opportune to do my IT <br><br>
                program in a technical company has boost my moral for coding and developing nice things.  
            </p>
        </div>
        
    </div>

    <div class="topbutton">
        <a href="#Navigation"><button>TOP</button></a>
    </div>
    











    <br><footer>
    <div class="footnote">
        <h4 style="display: inline-block; margin-left: 25px;">&#169; <?php echo "2020 - " . Date("Y-m"); ?> (Amos Computer World). </h4>
        
        <h4 style="display: inline-block;float:right; margin-right: 25px;">Contact: 09061289943, 07051670747.</h4>
    </div>

    </footer>

</body>
</html>
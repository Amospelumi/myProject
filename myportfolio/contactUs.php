<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        form.form1{
                padding: 10px;
                margin-left: 180px;
            }
    </style>
</head>
<body>
    
    <!-- Navigation Bar Container -->
    <div class="navbar" id="Navigation">
       <img src="img/acw.png" alt="logo" width="90px">
        <ul>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a class="active" href="service.php">Services</a></li>
            <li><a href="index.php"> Home</a></li>
        </ul>
    
    </div><hr><br>
    <!-- Home page Banner -->
    <div class="banner">
        <img src="img/customercare.jpg" alt="banner">
    
        <div class="text">  
            <marquee behavior="" direction=""><h2 style="text-align: center;">Contact Us</h2></marquee>
        </div>
        
    </div><br>


    <div class="ContactUs">
        <form class="form1" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
            <h2>Fill the Form Below.</h2>
            <table>
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
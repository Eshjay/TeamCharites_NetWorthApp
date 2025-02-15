<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <!-- Font awesome -->
    <!-- <link href="font-awesome.css" type='text/css' rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
    

    <style>
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke=' #008000 ' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-toggler {
            border-color: #008000;
        }
    </style>
</head>


<body>
            <nav class="navbar navbar-expand-md text-white navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="css/img/nav.png" id='logo' alt="Brand"></a>
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse text-white" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">SIGN UP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calculator.php">CALCULATOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


    <div class="container mt-5" class="animate-bottom">
        <div class="text-content">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 class="pt-3">About Us</h2>
                    <img src="css/img/networth.png" id='circle' class='img-flud' alt="">
                    <p>Charites Finance is a start up that aims to create a stable financial life
                        for its users. We are
                        interested in helping you have a knowledge of your current financial status and assist you in
                        maximizing your money for a secure future.</p>
                </div>

                <div class="col-md-6">
                    <h2 class="pt-3">Contact Us</h2>
                    <form action="">
                        <input type="text" class='field' placeholder="Your Name" required>
                        <input type="email" class="field" placeholder="Email Address" required>
                        <input type="text" class="field" placeholder="Telephone Number" required>
                        <textarea name="" class="field area" id="" placeholder="Message"
                            required></textarea>
                        <button type="submit" class='btn'>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class=''>About Us</h3>
                    <p>Charites Finance is a start up that aims to create a stable financial life for its users. We are
                        interested in helping you have a knowledge of your current financial status and assist you in
                        maximizing your money for a secure future.</p>
                </div>
                <div class="col-md-4">
                    <h3 class=''>About the App</h3>
                    <p>This free calculator helps you get a view of your financial positon by adding the values of your
                        assets and substracting your liabilites.</p>
                </div>
                <div class="col-md-3">
                    <h3 class='      '>Contact Us</h3>
                    <address style="margin-bottom:30px;">
                        Team Charites <br>
                        3, Remote House,<br>
                        HNG Avenue, Nigeria <br>
                        +234-1111-0000 <br>
                        info@charitesfinance.com
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <p style='text-align: center' class='   rollIn'>
                    CharitesFinance.com &copy;  2019
                </p>
            </div>
            </div>
        </div>
        </footer>


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


</html>
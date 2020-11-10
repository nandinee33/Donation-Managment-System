<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">    
</head>
<body>
    <div class="header">
        <!-- Logo -->
        <nav id="logo"><a class="navbar-brand" href="#"><img src="assets/images/logo.jpeg"> Find Fortune</a></nav>
        <!-- Logo-->
        <input type="checkbox" id="chk">
        <label for="chk" class="show-btn">
            <i class="fa fa-bars" ></i>
        </label>
        <form action="">
        <ul class="menu">
            <!-- Links -->
            <li><a href="About.html">About Us</a></li>
            <li><a href="faq_page.html">FAQ</a></li>
            <li class = "dropdown"><a href="docharity.html">Do Charity<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <ul class="submenu">
                    <li> <a href="docharity.html#individual">Individual</a></li>
                    <li><a href="docharity.html#emergency">Emergency</a></li>
                    <li><a href="docharity.html#organization">Organization</a></li>
                </ul>
            </li>
            <li><a href="#">My Account</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
            <li>
                    <!------logout button ------>
                    <a href="Home page.php?logout='1'"> 
                    <input type="submit" value = "Log out" name = "logout" class = "logout"></a>
            </li>
           <label for="chk" class="hide-btn">
               <i class="fa fa-times" ></i>
           </label>
       </ul>
       </form>
    </div>
    
    <br><br><br><br><br>


   <!-- Footer -->
   <footer>
        <div class="footer">
            <div class="container">
                 <!-- Grid row -->
                 <div class="row">
                    <!-- Grid column1 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                       <h3>Find Fortune</h3>
                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error incidunt voluptates possimus vero aut est!</p> 
                                    
                   </div>
                    <!-- Grid column1 -->

                     <!-- Grid column2 -->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-two ">
                        <!-- Links -->
                       <h2>Useful  Link</h2>
                      <ul>
                          <li><a href="">Event</a></li>
                          <li><a href="">Event</a></li>
                          <li><a href="">Event</a></li>
                          <li><a href="">Event</a></li>
                          <li><a href="">Event</a></li>
                      </ul>
                                    
                   </div>
                    <!-- Grid column2 -->

                     <!-- Grid column3 -->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-three ">
                        <h2>Follow Us</h2>
                        <!-- Links -->
                        <p>Please Follow us on our Social Media Profile In order to keep updated.</p>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Grid column3 -->

                     <!-- Grid column 4-->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-four ">
                        <h2>Our Newsletter</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt quam id adipisci assumenda quasi ad.</p>
                         <!-- Form -->
                         <form action="">
                            <input type="email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                     <!-- Grid column 4-->

                </div>
                <!-- Grid row -->
                </div>
        </div>
         <!-- Copyright -->
         <p class="footer-bottom-text">All Right reserved by &copy;Find Fortune.2020</p>
         <!-- Copyright -->
    </footer>
    <!-- End Footer -->
</body>
</html>
<html>
    <head>
        <title>User Login and registration </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="logincss.css">  
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        
<style>
    /* destination */
#header ul li ul.dropdown{
    min-width: 10%;
    background: lightgray;
    display: none;
    position: absolute;
    z-index: 999;
    left: 0;
}
#header ul li:hover ul.dropdown{
    display: block;
}

#header ul li ul.dropdown li{
    display: block;
}
/* destination finish */
/* holiday  */


#header ul li ul.dropdownone{
    min-width: 10%;
    background: lightgray;
    display: none;
    position: absolute;
    left: 13%;
    z-index: 999;
    
}
#header ul li:hover ul.dropdownone{
    display: block;
}

#header ul li ul.dropdownone li{
    display: block;
}

/* holiday finish */

/* package */
#header ul li ul.dropdowntwo{
    min-width: 10%;
    background: lightgray;
    display: none;
    position: absolute;
    left: 22%;
    z-index: 999;
    
}
#header ul li:hover ul.dropdowntwo{
    display: block;
}

#header ul li ul.dropdowntwo li{
    display: block;
}

/* package finish */
</style>
    </head>
    <body>
    <header id="header">
    <a href="#" class="logo">Dream-Travel</a>
            <ul>
                <li><a href="#">Destination</a>
                      <ul class="dropdown">
                          <li><a href="Maharashtra.php">Maharashtra</li></a>
                          <li><a href="Goa.php">Goa</li></a>
                      </ul>

                </li>

                <li><a href="#">Holiday</a>
                <ul class="dropdownone">
                          <li><a href="Maldives.php">Maldives</li></a>
                          
                      </ul>

                </li>



                <li><a href="#">Package</a>
                <ul class="dropdowntwo">
                          <li><a href="Jaipur details.php">Rajasthan special</li></a>
                          <li><a href="Chittorgharh fort.php">Chittorgharh fort</li></a>
                         
                          
                      </ul>


                </li>


                <li><a href="#">Weekend Gateway</li></a>        
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="#">Contact us</a></li>
                      
            </ul>
    </header>   
        </header>
















       
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login Here</h2>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>

                    </form>
                </div>



                <div class="col-md-6 login-right">
                    <h2>Register  Here</h2>
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>

                    </form>
                </div>

            </div>


            </div>
        </div>





        <footer>
        <div class="footer-content">
            <h2>Dream-Travel</h2>
            <p>Take only memory,Leave foot print</p>
             <ul class="icons">
              <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
             <li><a href="#"> <i class="fab fa-instagram-square"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        
            </ul>     
        </div>
        <div class="footer-boottom">
            <p>Copyright &copy;2021 Dream-Travel. designed by <span>sushmit</span> </p>
        </div>
      </footer>







    </body>
</html>







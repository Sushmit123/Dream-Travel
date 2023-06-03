<html>
    <head>
        <title>Dream travel</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style>
 
 *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
body
{
      overflow-x: hidden  ;   
    background: #fff;
    min-height: 100vh;
}
header{
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px ;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 10000;

}

#header .logo{
    background: linear-gradient(to right, #f32170 ,   #2196f3 ,#ff00eb);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text ; 
     font-weight: 700;
    font-size: 5vh;
    font-family: 'Rancho', cursive;
}
#header ul{
    display: flex;
    justify-content: left;
    align-items: left;
    font-size: 1.2rem;
    font-weight: 200;
    position: relative;
    left: -10%;
    font-family: 'Rancho', cursive;
}
#header ul li{

    list-style: none;
    /* margin-left: 10px; */
}

#header  ul li a{
    text-decoration: none;
    padding: 6px 15px;
    color: red;
    border-radius: 20px;
}
#header ul li a:hover{
    background: red;
    color: #fff;  
}

/* middle start */

section{
    /* position: relative; */
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
section::before{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, #094b65,transparent);
    z-index: 10;
}



section img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;

}



section #text{
    position: absolute;
    top: 20%;
    color: red;
    font-size: 10vh;
    text-align: center;
    line-height: 0.55em;
    font-family: 'Rancho', cursive;
    z-index: 20;
   
}
 

section #text span{
    font-size: 0.20em;
    letter-spacing: 2px;
    font-weight: 400;
    font-family: 'poppins', sans-serif;

}


.sec{
    
    padding: 390px;
    background:  #094b65;
    
   

}
.sec h1{
    font-size: 1.8rem;
    color: #fff;
    position: absolute;
    top: 120%;
    left: 5%;
}

#box{
    margin: 90px;
    display: flex;
    width: 50%;
    
    

}
#box .boxx{
    border: 2px solid rgb(175, 178, 179);
    padding: 40px;
     margin:  50px; 
    border-radius: 28px;
    background: whitesmoke;
    height: 20%;
    width: 80%;
  
    
}
#box .boxx img{
   height: 240px;
   width: 250px;
   margin: auto;
   display: block;
   border-radius: 20px;
}


#box .boxx p{
    font-family: 'Playfair Display', serif;
    text-align: center;
    font-size: 1.8rem;
}

#box .boxx button{
    display: block;
    align-items: center;
    padding: 3px 22px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 1rem;
    float: left;
   
    
}

#smallbox{
    margin: 5px;
    display: flex;
    width: 50%;
    
   
    

}
#smallbox .sboxx{
    border: 1px solid rgb(6, 181, 240);
    padding: 40px;
    margin: 5px 20px;
    border-radius: 28px;
    background:  #094b65;
    height: 20%;
    width: 80%;
}
#smallbox .sboxx img{
   height: 240px;
   width: 500px;
   margin: auto;
   display: block;
   border-radius: 20px;
}


#smallbox .sboxx p{
    font-family: 'Playfair Display', serif;
    text-align: center;
    font-size: 1.8rem;
    color: white;
}

#smallbox .sboxx button{
    display: block;
    align-items: center;
    padding: 3px 10px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 1rem;
    float: left;
    position: relative;
    left: 40%;
   
    
}
/* footer start */
footer{
   position:absolute;
   top: 230% ;
   left: -0%;
    background: gray;
    height: auto;
    width: 100%;
    font-family:  'Stint Ultra Condensed', cursive;
    padding-top: 40px;
    color: whitesmoke;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h2{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
} 
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}

.icons{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}

.icons li{
    margin: 0 10px;
}
.icons a{
    text-decoration: none;
    color: whitesmoke;
}
.icons a i{
    font-size: 1.1rem;
    transition: color 1s ease;
}

.icons a:hover i {
    color: turquoise;
}
.footer-bottom{
    background: gray;
    width: 100%;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    text-align: center;
}

.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}

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

/* family tour */
#header ul li ul.dropdownthree{
    min-width: 10%;
    background: lightgray;
    display: none;
    position: absolute;
    left: 45%;
    z-index: 999;
    
}
#header ul li:hover ul.dropdownthree{
    display: block;
}

#header ul li ul.dropdownthree li{
    display: block;
}
/* family tour end */


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
                          <li><a href="Kerala.php">Kerala</li></a>
                      </ul>

                </li>

                <li><a href="#">Holiday</a>
                <ul class="dropdownone">
                          <li><a href="Maldives.php">Maldives</li></a>
                          <li><a href="Goa.php">Goa</li></a>
                          
                      </ul>

                </li>



                <li><a href="#">Package</a>
                <ul class="dropdowntwo">
                          <li><a href="Jaipur details.php">Rajasthan special</li></a>
                          <li><a href="Chittorgharh fort.php">Chittorgharh fort</li></a>
                         
                          
                      </ul>


                </li>


                <li><a href="#">Family tour</a> 
                <ul class="dropdownthree">
                          <li><a href="Agra.php">Agra</li></a>
                          <li><a href="nainital.php">Nainital</li></a>
                         
                          
                      </ul>


                </li>






                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="Enquiry.php">Contact us</a></li>
                <li><a href="login.php">Sign up</a></li>         
            </ul>
    </header> 

    
    <section>
            <h2 id="text"><span>It's time for a next</span><br>Adventure</h2> 
            <img src="bird1.png" id="bird1">
            <img src="bird2.png" id="bird2">
            <img src="forest.png" id="forest">
            <img src="rocks.png" id="rocks">
            <img src="water.png" id="water">



        </section>
    





        <div class="deals" style=" background:  #094b65;">
      <center><h1 style="color:  white;"> Deals for next months</h1></center>
      <div id="box">
        <div class="boxx">
          <img  class="img"src="city-palace-JAIPUR-.jpg" alt="">
                  <center><h2>Rajasthan special</h2></center>
                 <center> <h4 style="color: green;">Earliest Departure 30-12-2021</h4></center>
                 <center> <h2 style="background-color: rgb(236, 18, 18); color: white;">You save 12000</h2></center><br>
                   <button ><a href="Jaipur details.php">View Details</button></a><button><a href="login.php">For booking Login</button> </a>         
        </div>
     
        <div class="boxx">
          <img  class="img"src="Chittorgharh.jpg" alt="">
                  <center><h2>Chittorgharh fort</h2></center>
                 <center> <h4 style="color: green;">Earliest Departure 30-12-2021</h4></center>
                 <center> <h2 style="background-color: rgb(236, 18, 18); color: white;">You save 12000</h2></center><br>
                  <button><a href="Chittorgharh fort.php">View Details</button></a><button><a href="login.php"> For booking login</button></a>
                 
        </div>
       
     
        <div class="boxx">
          <img  class="img"src="Rajasthan_Jaipur_Birla-Mandir-in-Jaipur.jpg" alt="">
                  <center><h2>Birla-Mandir Jaipur</h2></center>
                 <center> <h4 style="color: green;">Earliest Departure 30-12-2021</h4></center>
                 <center> <h2 style="background-color: rgb(236, 18, 18); color: white;">You save 12000</h2></center><br>
                  <button><a href="Birla-Mandir Jaipur.php">View Details</button></a><button><a href="login.php">For booking login</button></a>
                 
        </div>
     
        <div class="boxx">
          <img  class="img"src="Jantar_mantar.jpg" alt="">
                  <center><h2>Jantar mantar</h2></center>
                 <center> <h4 style="color: green;">Earliest Departure 30-12-2021</h4></center>
                 <center> <h2 style="background-color: rgb(236, 18, 18); color: white;">You save 12000</h2></center><br>
                  <button><a href="Jantar mantar.php">View Details</button></a><button><a href="login.php">For booking login</button></a>
                 
        </div>
      </div>







      <center><h1 style="color: white;">Top Trending India Holiday Destination</h1></center>

     
    
      <div id="smallbox">
        <div class="sboxx">
          <center><img  class="img"src="sikkim.jpg" alt=""></center>
                  <center><h2 style="color: white;">sikkim</h2></center>
                   <center><button>Coming soon</button></center>
                 
        </div>
        <div class="sboxx">
         <center> <img  class="img"src="Uttarakhand.jpg" alt=""></center>
                  <center><h2 style="color: white;">Uttarakhand</h2></center>
                   <center><button>Coming soon</button></center>
              </div>   
              <div class="sboxx">
          <center><img  class="img"src="kashmir.jpg" alt=""></center>
                  <center><h2 style="color: white;">kashmir</h2></center>
                  <center> <button>Coming soon</button></center>
                 
        </div>
      
      </body>
        









              
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
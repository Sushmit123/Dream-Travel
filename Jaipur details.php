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


#services{
    margin: 100px;
    display: flex;
}
#services .box{
    border: 2px solid rgb(175, 178, 179);
    padding: 40px;
    margin: 5px 10px;
    border-radius: 28px;
    background: whitesmoke;
    height: 100%;
}
#services .box img{
   height: 50%;
   margin: auto;
   display: block;
   border-radius: 20px;
}


#services .box p{
    font-family: 'Playfair Display', serif;
    text-align: center;
    font-size: 1.8rem;
}

#services .box button{
    display: block;
    align-items: center;
    padding: 3px 32px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 1.8rem;
    float: left;
    position: relative;
    left: 40%;
   
    
}

/* footer start */
footer{
   position:absolute;
   top: 117% ;
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
             
              </div> </li>
              <ul>
                <li><a href="#">Destination</a>
                <ul class="dropdown">
                          <li><a href="Maharashtra.php">Maharashtra</li></a>
                          <li><a href="Goa.php">Goa</li></a>
                          <li><a href="kerala.php">Kerala</li></a>
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

               
                </ul>      
        </header> 


    <div id="services">
          <div class="box">
              <img  class="img"src="city-palace-JAIPUR-.jpg" alt="">
              <center><h1 >Rajasthan</h1></center>
               <h2> Rajasthan is located in northwestern India, bounded on the west and northwest by Pakistan and shares domestic borders with the states of Punjab, Haryana, Uttar Pradesh, Madhya Pradesh and Gujarat. With a land area of 342,239 sq km, Rajasthan is the largest state in India geographically.8 The state is divided into 33 districts and comprises nine regions – Ajmer State, Hadoti, Dhundhar, Gorwar, Shekhawati, Mewar, Marwar, Vagad and Mewat.9</h2>
                <br>
                <h1>1)Best Time To Visit:September </h1>
                <br>
                <h1>2)Place to visit: Udauipur,jodhpur,jaipur</h1>
                <br>
                <h1>3)Things to do : Wildlife,heritage,pilgrimage,Adventure</h1>
                <br>
                <h2>Price RS 3000</h2>
                <button><a href="Enquiry.php">Enquiry</button></a>
                <button><a href="login.php">For booking Login</button></a>
                 

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
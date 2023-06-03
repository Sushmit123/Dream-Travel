<?php

session_start();
if(!isset($_SESSION['username'])){
    // header('location:login.php');
}

?>





<head>
    <title>Tour</title>
    <link rel="stylesheet" type="text/css" href="tour.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
       /* Header start */

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
    font-family:'Rancho', cursive;
}
#header ul li{

    list-style: none;
    margin-left: 10px;
}

#header  ul li a{
    text-decoration: none;
    padding: 6px 15px;
    color: red;
    border-radius: 20px;
}
#header ul li a:hover{
    background: black;
    color: #fff;  
}

/* header end */

/* main start */
#box{
    margin: 20px;
    display: flex;
    position: absolute;
    top: 290%;
}
#box .square{
    border: 2px solid rgb(175, 178, 179);
    padding: 40px;
    margin: 2px 5px;
    border-radius: 28px;
    background: lightgray;
    ;
}
#box .square img{
   height: 100px;
   margin: auto;
   display: block;
   border-radius: 20px;
}


#box .square p{
    font-family: 'Playfair Display', serif;
    text-align: center;
    font-size: 1.8rem;
}


 .htwo{
    font-size: 5vh;
    font-weight: 700;
    text-align: center;
    font-family: 'Rancho', cursive;
    position: absolute;
    top: 285%;
    left: 40%;
   
}
.hone{
    font-size: 1.6rem;
    text-align: center;
    padding: 20px;
     
  
}
/* main finish */































/* footer start */
footer{
    position:absolute;
    top: 110% ;
    left: -1%;
     background: gray;
     height: auto;
     width: 110%;
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
                          <li><a href="tour.php">Maharashtra</li></a>
                          <li><a href="After login Goa details.php">Goa</li></a>
                          <li><a href="After login kerala details.php">Kerala</li></a>
                      </ul>

                </li>

                <li><a href="#">Holiday</a>
                <ul class="dropdownone">
                          <li><a href="After login Maldives details.php">Maldives</li></a>
                          <li><a href="After login Goa details.php">Goa</li></a>
                          
                      </ul>

                </li>



                <li><a href="#">Package</a>
                <ul class="dropdowntwo">
                          <li><a href="After login Jaipur details.php">Rajasthan special</li></a>
                          <li><a href="After login Chittorgharh fort details.php">Chittorgharh fort</li></a>
                         
                          
                      </ul>


                </li>


                
                <li><a href="#">Family tour</a> 
                <ul class="dropdownthree">
                          <li><a href="After login agra details.php">Agra</li></a>
                          <li><a href="After login nainital details.php">Nainital</li></a>
                         
                          
                      </ul>


                </li>    
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="Enquiry.php">Contact us</a></li>
                <li><a href="logout.php">logout</a></li>         
            </ul>

               
                </ul>         
        </header>


     

    <h1 style="position: absolute; top:15% ; left:40% ;  font-family:'Rancho', cursive; font-size:2rem" >Welcome <?php echo $_SESSION['username']; ?></h1>

     

            

           
           <div class="container" style="background-color: lightgray; position:absolute; top: 20%; margin-left: 50px;  border-radius:20px">
           <center><h1 >1.Ganpatipule:</h1></center>
           <img src="Ganapatipuleee.jpg"  height="300px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37289.565790538974!2d73.26071962484173!3d17.153090896030516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bea055561b27b67%3A0xc0450524831ec163!2sGanpatipule%2C%20Maharashtra%20415615!5e1!3m2!1sen!2sin!4v1630855337170!5m2!1sen!2sin"
            height="300px" style="border:0;padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address: Ganpatipule</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 25 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹ 1000 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="ganapatipule.php">Book</button></a>
           </div>
           </div>

           <div class="container" style="background-color: lightgray; position:absolute; top: 20%; left:50%; margin-left: 50px;  border-radius:20px">
           <center><h1 >2.Nagpur:</h1></center>
           <img src="Nagpur.jpg"  height="300px" width="390px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119064.8958258438!2d79.0024701414605!3d21.161231529106598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2sNagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632152012118!5m2!1sen!2sin"
              height="300px" style="border:0;padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="nagpur.php">Book</button></a>
           </div>
           </div>

           <div class="container" style="background-color: lightgray; position:absolute;top:80%; margin-left: 50px;  border-radius:20px">
           <center><h1 >3.Nashik:</h1></center>
           <img src="nashik.jpg"  height="340px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.26415271562!2d73.73344082875727!3d19.991110619503427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632152693364!5m2!1sen!2sin"
            height="300px" style="border:0; padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="nashik.php">Book</button></a>
           </div>
           </div>

           <div class="container" style="background-color: lightgray; position:absolute;top:80%; left:50%; margin-left: 50px;  border-radius:20px">
           <center><h1 >4.Pune:</h1></center>
           <img src="pune.jpg"  height="340px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.26415271562!2d73.73344082875727!3d19.991110619503427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632152693364!5m2!1sen!2sin"
            height="300px" style="border:0; padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="pune.php">Book</button></a>
           </div>    
           </div>

            <div class="container" style="background-color: lightgray; position:absolute;top:150%;  margin-left: 50px;  border-radius:20px">
           <center><h1 >5.kolhapur:</h1></center>
           <img src="kolhapur.jpg"  height="340px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61141.86638729136!2d74.20384842824373!3d16.708547811219205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1000cdec07a29%3A0xece8ea642952e42f!2sKolhapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632154050129!5m2!1sen!2sin" 
           height="300px" style="border:0; padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="kolhapur.php">Book</button></a>
           </div>
           </div> 
           
           <div class="container" style="background-color: lightgray; position:absolute;top:150%; left:50%; margin-left: 50px;  border-radius:20px">
           <center><h1 >6.Shirdi:</h1></center>
           <img src="shirdi.jpg" height="340px" width="400px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30038.974018679703!2d74.45902325372943!3d19.760602687237522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc5ba7461768af%3A0xd802d2c2943c99c!2sShirdi%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632154544208!5m2!1sen!2sin"
             height="300px" style="border:0; padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="shirdi.php">Book</button></a>
           </div>
           </div> 

           <div class="container" style="background-color: lightgray; position:absolute;top:220%; ; margin-left: 50px;  border-radius:20px">
           <center><h1 >7.Ratnagir:</h1></center>
           <img src="ratnagir1.jpg" height="340px" width="400px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30524.838387326014!2d73.30808750218448!3d16.99397899397101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bea0d1839a6bb7f%3A0x63ab969b79bf6561!2sRatnagiri%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632154832322!5m2!1sen!2sin"
              height="300px" style="border:0;padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="ratnagir.php">Book</button></a>
           </div>
           </div> 

           <div class="container" style="background-color: lightgray; position:absolute;top:220%; left:50%; margin-left: 50px;  border-radius:20px">
           <center><h1 >8.Raigad:</h1></center>
           <img src="raigad.jpg" height="340px" width="400px" style="padding: 15px;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29988.111586232353!2d79.72553040389629!3d20.0289044092238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2d1fff77cf7313%3A0x80dd0176549c2ee3!2sRajgad%2C%20Maharashtra%20441225!5e0!3m2!1sen!2sin!4v1632154902169!5m2!1sen!2sin" 
           height="300px" style="border:0;padding:15px" allowfullscreen="" loading="lazy"></iframe>
            <h2 style="margin-left: 50px;">Pick up address:Teen Hath Naka Thane</h2>
            <h2  style="margin-left: 50px;">Destination Address:Nagpur</h2>
            <h2  style="margin-left: 50px;"> Departure Date/Time : 30 September 2021 9.00pm</h2>
            <h2  style="margin-left: 50px;">  price: ₹800 per person<h2>
            <button  style="font-size: 22px; border: radius 20px;  margin-left: 50px;" ><a href="raigad.php">Book</button></a>
           </div>
           </div> 



           <h2 class="htwo">Our services</a></h2>

       <div id="box">    
           <div class="square">
               <img class="img" src="dish 2.png" >
               <h2 class="hone">Food services</h2>
               <p class="center">Dapoli is a Coastal Hillstation as well as a City in Ratnagiri district, Maharashtra.</p>
            </div>
            <div class="square">
                <img  class="img"src="road 3.png" >
               <h2 class="hone">Road guidance</h2>
               <p class="center">Dapoli is a Coastal Hillstation as well as a City in Ratnagiri district, Maharashtra.</p>
            </div>
            <div class="square">
                <img  class="img"src="first aid2.png" >
               <h2 class="hone">Emergemcy serivce</h2>
               <p class="center">Dapoli is a Coastal Hillstation as well as a City in Ratnagiri district, Maharashtra.</p>
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

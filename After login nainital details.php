<html>
    <head>
        <title>Details</title>
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

/* footer start */
footer{
   position:absolute;
   top: 227% ;
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
 
     
/* services section*/


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
                <li><a href="logout.php">Log out</a></li>         
            </ul>

               
                </ul>      
        </header> 
     
     
     
     

        <div id="services">
          <div class="box">
              <img  class="img"src="nainital2.jpg" width="30% " height="30%" alt="">
              <center><h2 >Nainital</h2></center>
              <p class="center">Visit:
Day:1Nainital
Arrive at the designated reporting place and report to the coach. On arrival visit Birla Mandir and Sanganeri Printings Showroom. Visit Chokhi Dhani – a traditional Rajasthani village in the evening.
Extra Topping : Frooti at Nainital Airport.
Dinner
<br><br>
Day:2Nainital – City Tour
Enjoy city tour of Nainital. Photo stop at Hawa Mahal literally means Palace of winds. Explore City Palace and Jantar Mantar - an astronomical observatory built by Sawai Jai Singh. Later visit Amer Fort - known for its artistic style elements, large ramparts and series of gates and cobbled paths. In the evening fee time for shopping.
Extra Topping : Matka Kulfi at Jantar Mantar. Frooti at Amer Fort.
Breakfast
Lunch
Dinner
<br><br>
Day:3 Nainital – uttrakhand
Today proceed to uttrakhand. On arrival visit Moinuddin Chishti Dargah – a holy place where Khwaja Moinuddin enshrined his secular preachings. Later Proceed to Pushkar. Visit Pushkar Tirth and Bramha Mandir at Pushkar.
Extra Topping : Tea / Coffee / Soft Drink en-route to Ajmer / Pushkar
Breakfast
Lunch
Dinner
<br><br>
Day:4 uttrakhand city tour
Proceed to Nathdwara. En-route visit Chittorgarh Fort, 'Pride of Rajasthan State” and also an UNESCO site. Visit different section of this fort like Ranakumbha Palace, Meera Mandir, Vijay Stambha and Padmini's Palace – from where Ala-ud-din Khilji was permitted to obtain a glimpse of Padmini in a mirror placed in the main hall. Arrive in Nathdwara in the evening.
Extra Topping : Kachori, Tea / Coffee / Soft Drink at Chittorgarh.
Breakfast
Lunch
Dinner
<br><br>
Day:5 Uttarakhand
Today morning visit Nathdwara temple and Eklingji temple. Then proceed to Udaipur. En-route visit Haldighati Museum to know the spine Chilling tale of the battle between Maharana Pratap and Mughals in 1576. Arrive at Udaipur in the evening.
Extra Topping : Saffron Tea at Nathdwara.
Breakfast
Lunch
Dinner
<br><br>
Day:6 Nainital
Enjoy City orientation tour of Udaipur. Visit Maharana Pratap Smarak at Moti Magri, Saheliyon Ki Bari - Garden of the Maids of Honour, the famous City Palace and unique Crystal Gallery. Get amazed by the luxurious lifestyle of the Mewar Royals when you visit the Vintage car museum. Later enjoy boating in Lake Pichola famous for it's picturesque beauty and scenic surrounding.
Extra Topping : Pyaaz Kachori at Udaipur. Tea / Coffee / Soft Drink / Lassi near City Palace.
Breakfast
Lunch
Dinner
<br><br>
Day:7Departure from Nainital
Board the train / flight to your hometown. Tour Concludes.</p>
    
<button> <a href="After login nainital form.php">Book</button> <button> <a href="Enquiry.php">Enquiry</button></a>
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
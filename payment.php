<?php
session_start();
if(!isset($_SESSION['name'])){}
if(!isset($_SESSION['pickup'])){}
if(!isset($_SESSION['destination'])){}
if(!isset($_SESSION['departure'])){}

?>

<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="userregistration";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo"ok";
}else{
    echo"failed".mysqli_connect_error();
}
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $pickup = $_POST['pickup'];
  $destination = $_POST['destination'];
  $departure = $_POST['departure'];
  $cardhoder = $_POST['cardhoder'];
  $cardnumber = $_POST['cardnumber'];
  $expiry = $_POST['expiry'];
  $cvvnumber = $_POST['cvvnumber'];

  $query="INSERT INTO `payment`(  `name`, `pickup`, `destination`, `departure`, `card hoder`, `card number`, `expiry`, `cvv number`) 
  VALUES ('$name','$pickup','$destination','$departure','$cardhoder','$cardnumber','$expiry','$cvvnumber')";
   
  $data=mysqli_query($conn,$query);
  if($data){
     header("Location:Ticket.php");
      exit;
      echo "Payment succesful";
  }
  else{
      echo"payment fail".mysqli_error($conn);
  }





}
?>








<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <style>

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

.login-box{
    max-width: 500px;
    max-height: 500px;
    float: none;
    margin: 200px auto;
    /* position: relative;
    top: 50%; */
    
}
.login-right{
    background: lightgray;
    padding: 50px;
    position: absolute;
    top: 20%;
    left: 30%;
}

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
        </style>
    </head>
    <body>
    <header id="header">
            <a href="#" class="logo">Dream-Travel</a>
    </header>

   
   
   
   



    <div class="container">
            
                <div class="col-md-6 login-right">
                    <h2>Credit/Drebit Card</h2>
                    <form action="" method="POST">

                    <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value=" <?php echo $_SESSION['name']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Pickup</label>
                            <input type="text" name="pickup" value=" <?php echo $_SESSION['pickup']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <input type="text" name="destination" value=" <?php echo $_SESSION['destination']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Departure</label>
                            <input type="text" name="departure" value=" <?php echo $_SESSION['departure']; ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Card hoder</label>
                            <input type="text" name="cardhoder" placeholder="Name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>card number</label>
                            <input type="password" name="cardnumber" placeholder="###-###-###" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Expiry</label>
                            <input type="text" name="expiry" placeholder="dd-mm-yyyy" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>CVV number</label>
                            <input type="password" name="cvvnumber" placeholder="xxx" class="form-control" required>
                        </div><br>
                        <button type="submit" name="submit" class="btn btn-primary" onclick="return mess()"> Payment</button>

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
       <script type="text/javascript">
 function mess()
{
    alert ("Your payment is successful")
   return true;
 } 
</script>
    </body>
</html>
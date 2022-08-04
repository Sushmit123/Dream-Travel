<?php

session_start();
if(!isset($_SESSION['username'])){
    // header('location:login.php');
}
if(!isset($_SESSION['password'])){
    // header('location:login.php');
}

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
if (isset($_POST['submit']))
{
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$mobile = $_POST['mobile'];
$pickup = $_POST['pickup'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$seat = implode(',',$_POST['hob']);



$query="INSERT INTO `goa`( `name`, `username`, `password`, `adults`, `childern`, `mobile`, `pickup`, `destination`, `depature`, `seat`) 
VALUES ('$name','$username','$password','$adults','$children','$mobile','$pickup','$destination','$departure' , '".$seat."' ) ";

$data=mysqli_query($conn,$query);

if($data){
    $_SESSION['name'] = $name;
    $_SESSION['pickup'] = $pickup;
    $_SESSION['destination'] = $destination;
    $_SESSION['departure'] = $departure;
    $_SESSION['hob'] = $seat;
     header("Location:payment.php");
    exit;
    echo "Data inserted into database";
}
else{
     echo "Failed inserted into database".mysqli_error($conn);
}
}

?>































<html>
    <head>
        <title>Goa Form</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="GanaptilpuleForm.css"> -->
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
    width: 200px;
    /* max-width: 200px;
    max-height: 3000px; */
    float: none;
    margin: 250px auto;
    
}
.login-left{
    background-color: lightgray;
    padding: 50px;
    top: 10%;
    left: 25%;
    position: absolute;

}

.login-right{
    background: gray;
    padding: 50px;
}

.form-control{
    background-color: white;
    
}



        </style>



    </head>

    <body>
    <header id="header">
            <a href="#" class="logo">Dream-Travel</a>
    </header>

    <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <center><h2>Book Form of Goa </h2></center>
                    <form action="" method="POST">

                    <div class="form-group">
                            <label>Full name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                    <div class="form-group-one">
                            <label>Email:</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" required>
                        </div>

                        <div class="form-group-two" >
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $_SESSION['password']; ?>" required>
                        </div>

                        <div class="form-group-three">
                            <label>Number of Adults:</label>
                            <input type="text" name="adults" class="form-control"  required> 
                        </div>

                        <div class="form-group-four" >
                            <label>Number of Children:</label>
                           <input type="text" name="children" class="form-control" required> 
                        </div>

                        <div class="form-group-four" >
                            <label>Mobile no:</label>
                           <input type="text" name="mobile" class="form-control" required> 
                        </div>

                        <div class="form-group-five" >
                            <label>Pick up address: <span>Mumbai Airport,Mumbai </span></label>
                            <input type="radio" id="html" name="pickup" value="Mumbai Airport,Mumbai">
                        </div>
                      
                        
                        <div class="form-group-five" >
                            <label> Destination address: <span> Goa</span></label>
                            <input type="radio" id="html" name="destination" value="Goa">
                        </div>

                        <div class="form-group-five" >
                            <label> Departure Date/Time : <span> 30 Decmber 2021 9.00pm</span></label>
                            <input type="radio" id="html" name="departure" value="30 December 2021 9.00pm">
                        </div>
                        

                        <div>
                    <table border="0">
                        <tr>
                            <td>Seat</td>
                        </tr>
                        <tr>
                           
                            <td>1<input type="checkbox" value="1" name="hob[]"/></td><td>11</td><td><input type="checkbox" value="11" name="hob[]"/></td>
                        </tr>
                        <tr>
                           
                            <td>2<input type="checkbox" value="2" name="hob[]"/></td><td>12</td><td><input type="checkbox" value="12" name="hob[]"/></td>
                        </tr>
                        <tr>
                           
                            <td>3<input type="checkbox" value="3" name="hob[]"/></td><td>13</td><td><input type="checkbox" value="13" name="hob[]"/></td>
                        </tr>
                        <tr>
                           
                            <td>4<input type="checkbox" value="4" name="hob[]"/></td><td>14</td><td><input type="checkbox" value="14" name="hob[]"/></td>
                        </tr>
                        <tr>
                           
                            <td>5<input type="checkbox" value="5" name="hob[]"/></td><td>15</td><td><input type="checkbox" value="15" name="hob[]"/></td>
                        </tr>

                        <tr>
                           
                            <td>6<input type="checkbox" value="6" name="hob[]"/></td><td>16</td><td><input type="checkbox" value="16" name="hob[]"/></td>
                        </tr>
                        <tr>
                          
                            <td>7<input type="checkbox" value="7" name="hob[]"/></td><td>17</td><td><input type="checkbox" value="17" name="hob[]"/></td>
                        </tr>
                        <tr>
                           
                            <td>8<input type="checkbox" value="8" name="hob[]"/></td><td>18</td><td><input type="checkbox" value="18" name="hob[]"/></td>
                        </tr>
                        <tr>
                            
                            <td>9<input type="checkbox" value="9" name="hob[]"/></td><td>19</td><td><input type="checkbox" value="19" name="hob[]"/></td>
                        </tr>
                        <tr>
                            
                            <td>10<input type="checkbox" value="10" name="hob[]"/></td><td>20</td><td><input type="checkbox" value="20" name="hob[]"/></td>
                        </tr>
                        
                    </table>
                </div> 




                        <button type="submit"  name="submit"class="btn btn-primary" onclick="return mess()"> submit</button> 




</form>
</div>
</div>

 <script type="text/javascript">
function mess()
{
    alert ("Your Ticket is book")
    return true;
}

</script> 

</body>
</html>

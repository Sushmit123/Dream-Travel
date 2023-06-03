
<?php
session_start();
if(!isset($_SESSION['name'])){}
if(!isset($_SESSION['pickup'])){}
if(!isset($_SESSION['destination'])){}
if(!isset($_SESSION['departure'])){}
if(!isset($_SESSION['hob'])){}
?>









<html>
    <head>
        <title>Ticket</title>
        <style>
            

.cardWrap {
  width: 27em;
  height: 27%;
  margin: 3em auto;
  color: #fff;
  font-family: sans-serif;
}

.card {
  background: linear-gradient(to bottom, red 0%, red 26%, grey 26%, grey 100%);
  height: 18em;
  width: 15em;
  float: left;
  position: relative;
  padding: 1em;
  margin-top: 100px;
}

.cardLeft {
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  width: 16em;
}

.cardRight {
  width: 6.5em;
  border-left: .18em dashed #fff;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
}

        </style>
    </head>
    <body>
    <div class="cardWrap">
  <div class="card cardLeft">
    <h1 style="position: relative;top: -15px;">Dream Travel</h1>
    <div class="title">
      <h3 style="position: relative;top: -10px;">Tour:-<?php echo $_SESSION['pickup']; ?><br>To <?php echo $_SESSION['destination']; ?></h3>
      <h4 style="position: relative;top: -15px;">Time-<?php echo $_SESSION['departure']; ?></h4>
    </div>
    <div class="name">
      <h3 style="position: relative;top: -5px;">Name:- <?php echo $_SESSION['name']; ?></h3>
     <h3> Payment succesful</h3>
    </div>
   
   
    
  </div>
  <div class="card cardRight">
    <div class="eye"></div>
    <div class="number">
      <h3>Seat</h3>
      <span> <?php echo $_SESSION['hob']; ?></span>
    </div>
<br>
<br>
    <button onclick="window.print()">Print this Ticket</button>
   
  </div>

</div>
    </body>
</html>
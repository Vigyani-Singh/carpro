<html>
    <head>
        <title>BOOKING SLOT</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="style1.css" rel="stylesheet">
    </head>
    <body>
        
        <h1 style="color: cadetblue; text-align: center;">BOOK YOUR SLOT</h1>
        <hr>
        <marquee style="color: red; font-weight: bold;">Click on button to book your slot</marquee>
        <section id="parking_lot">
            <div class="container">
            <div class="row"> 
                <div class="col-lg-6">
                    <h4 style="text-align: center;margin-top: 2%;">PARKING AREA 1</h4>
                </div>
                <div class="col-lg-6">
                    <h4 style="text-align: center;margin-top: 2%;">PARKING AREA 2</h4>
                </div>
            </div>
        </div>
        <form action ="Signin.html" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-1">
                <a href="Signin.html?slot=slot1"> <button class="slot_num" id="slot1" onclick="name='slot1',chBackcolor('slot1');"><h2>1</h2></button></a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot2" onclick="name='slot2',chBackcolor('slot2');"><a href="Signin.html?slot=slot2"><h2>2</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot3" onclick="name='slot3',chBackcolor('slot3');"><a href="Signin.html?slot=slot3"><h2>3</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot4" onclick="name='slot4',chBackcolor('slot4');"><a href="Signin.html?slot=slot4"><h2>4</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot5" onclick="name='slot5',chBackcolor('slot5');"><a href="Signin.html?slot=slot5"><h2>5</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot6" onclick="name='slot6',chBackcolor('slot6');"><a href="Signin.html?slot=slot6"><h2>6</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot7" onclick="name='slot7',chBackcolor('slot7');"><a href="Signin.html?slot=slot7"><h2>7</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot8" onclick="name='slot8',chBackcolor('slot8');"><a href="Signin.html?slot=slot8"><h2>8</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot9" onclick="name='slot9',chBackcolor('slot9');"><a href="Signin.html?slot=slot9"><h2>9</h2></a></button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-1">
                    <button class="slot_num" id="slot10" onclick="name='slot10',chBackcolor('slot10');"><a href="Signin.html?slot=slot10"><h2>10</h2></a></button>
                </div>
            </div>
        </div>
    </form>
    </section>
<script>


    function chBackcolor(c) {
    var color ='green';
  document.getElementById(c).style.backgroundColor = color;

  document.getElementById(c).innerHTML =Booked;
//   if(c=='slot1'){
//   }
//   if(c=='slot2'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot2";
//    ?>
//   }
//   if(c=='slot3'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot3";
//    ?>
//   }
//   if(c=='slot4'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot4";
//    ?>
//   }
//   if(c=='slot5'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot5";
//    ?>
//   }
//   if(c=='slot6'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot6";
//    ?>
//   }
//   if(c=='slot7'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot7";
//    ?>
//   }
//   if(c=='slot8'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot8";
//    ?>
//   }
//   if(c=='slot9'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot9";
//    ?>
//   }
//   if(c=='slot10'){
//    <?php
//      session_start();
//      $_SESSION['slot']="slot10";
//    ?>
//   }

    }
       
</script>
</body>
</html>

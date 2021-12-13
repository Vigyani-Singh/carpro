<?php
$insert=false;
if(isset($_POST['name'])){

    $server ='localhost';
    $username = 'root';
    $password ='';
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        echo "not connected with database";
    }
    else{
        $name = $_POST['name'];
        $phonenumber= $_POST['phonenumber'];
        $pass= $_POST['pass'];
        $email=$_POST['email'];
        $slot = $_POST['slot'];
        $sql="INSERT INTO `parking`.`login` (`name`, `phone`, `email`, `password`, `slot`) VALUES ('$name', '$phonenumber','$email','$pass','$slot')";
   if($con->query($sql)==true){
         $insert=true;
        //  echo"successfull";
        $insert=true;
     }
     else{
         echo "query not loaded successfully :$sql<br>$con->error";
     }
     $con->close();
    }  
}
?>




<!-- <***************** Html  code ************************************************************> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Carping </title>
    <script src="slot.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <img src="images\cp1.jpg" height ="50px">
                <h1>Find a slot for your Car </h1>
                <?php if($insert==true ){
                echo "<h1> You have successfully registered. Please login To Sign-In</h1>";
                }
                else{
                    echo "<h1>Register here</h1>";
                }?>
                <form action="index1.php" method="post">
                    <div class="form-input">
                        <input type="text" class="text-field" placeholder="Name"name ="name">
                    </div>
                <div class="form-input">
                    <input type="text" class="text-field" placeholder="Mobile Number"name ="phonenumber">
                </div>
                <div class="form-input">
                    <input type="text" class="text-field" placeholder="Email-Id"name ="email">
                </div>
                <div class="form-input">
                    <input type="password" class="text-field" placeholder="Password"name ="pass">
                </div>
                <div class="form-input">
                    <input type="hidden" id="slot" class="text-field" placeholder="Password"name ="slot">
                </div>
                <div class="form-input">
                    <button>Register</button>
                </div>
                <div class="form-input">
                    <a href="index.html">Signin</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
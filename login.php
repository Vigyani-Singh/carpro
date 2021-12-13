<?php
$login= false;
$unlogin= false;
if(isset($_POST['phonenumber'])){
    $server ='localhost';
    $username = "root";
    $password ="";
    $database ="carping";
    $con = mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("not connected with database".mysqli_connect_error());
    }
    else{
        $phonenumber= $_POST['phonenumber'];
        $password= $_POST['password'];

        $stmt = $con->prepare("select * from  login  where phonenumber = ?");
        $stmt->bind_param("s",$phonenumber);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){
                   $login = true;
            }
            else{
              header("Location: index1.php");
                           exit;
                
            }
        }else{
          header("Location: index1.php");
          exit;
        }
     }
     $con->close();
    }  
?>

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<  ***** Html Code *****  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-popup.css">
    <title>SUCCESS</title>
</head>
<body>
    <div>
    
    <section>
        
        <p>BOOKING SUCCESSFUL!</p><br>
        <p>Dear Patron</p><br>
        <?php
                            if($login==true){
                               echo "<h3 class='mb-4 text-center'> Login Successfull </h3>";
                                }
                            ?>
                 <h2>Thanks <?php echo $data['name'] ?> For Booking The Slot<br> And Your Slot Number is @<?php $data['slot']?><br>Visit Again</h2>
    
    </section>
</div>
    
    <footer>
        <nav>
            <a href="Welcome.html">Home</a>
            <a href="about.html">About</a>
            <a href="">Services</a>
            <a href="contact.html">Contact</a>
        </nav>
    </footer>
  
</body>
</html>
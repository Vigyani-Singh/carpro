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
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <img src="cp1.jpg" height ="50px"><br>
                <h1 style="color='green'">Wrong-Credentials Please Try Again</h1>
                <form action="popup.html" method="post">
                <div class="form-input">
                    <input type="text" class="text-field" placeholder="Mobile Number"name ="phonenumber">
                </div>
                <div class="form-input">
                    <input type="password" class="text-field" placeholder="Password" password="password">
                </div>
                <div class="form-checkbox">
                 <input type="checkbox">
                 <label for="">Keep me Signed-in</label>                    
                </div>
                <div class="form-input">
                    <button>Login</button>
                </div>
                <div class="form-input">
                    <a href="register.html">Sign-Up</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
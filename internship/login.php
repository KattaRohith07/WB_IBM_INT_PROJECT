<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            background-image: url("georgie-cobbs-bKjHgo_Lbpo-unsplash.jpg");
            background-size: cover;
        }
        form{
            background-color: white;
            margin-top: 15em;
            margin-left: 10em;
            margin-right: 15em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up </a></p>
</form>
    </div>
</body>
</html>
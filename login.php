<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 8px  #f1f1f1;}

input[type=text], input[type=password] {
    width: 70%;
    padding: 4px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 4px ridge;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 4px;
    margin-left: 138px;
    margin-bottom: 28px;
    margin-top: 28px;
    border: 2px ridge;
    cursor: pointer;
    width: 35%;
    height: 45px;

}

button:hover {
    opacity: 0.8;
}


.k {
    
    background-color: rgba(0,0,0,0.4);
    margin-top:100px;
    margin-left: 400px;
    border-width: 20px;
    border-spacing: 30px;
    margin-right: 80px;
    width: 520px;
    color: white;
}

</style>
</head>
<body style="background-image: url(wood.jpg)">
<form action="/action_page.php">
<div class="k">

    <center>
     <img src="user.jpg" class="img-circle" alt="Cinque Terre" width="64" height="66" > </center>
  <h2> <center> Login Form </center></h2>
    
    <b>Username:</b>
    <input type="text" placeholder="Enter Username" name="uname" required>
       <br/>
    <b>Password:</b>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br/>
    <button type="submit">Login</button>
</form>
</div>
</body>
</html>

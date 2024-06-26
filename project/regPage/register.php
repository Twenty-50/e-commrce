<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="register.css" />

</head>
 
<body>
  <div class="container">
    <div  class="foram">


      <div class="Reg">
        <h1>Create A Account </h1>
      </div>

      <form action="connect.php" method="POST" >

        <div class="input-form">
          <input type="number" placeholder="phone number"  name="phone" id="phone" autocomplete="off" required>
          <errorDisplay>Entre a vaild phone number</errorDisplay>
        </div>

        <div class="input-form">
          <input type="email" placeholder="email" name="email" id="email" autocomplete="off" required>
          <errorDisplay>Entre a vaild email</errorDisplay>
        </div>

        <div class="input-form">
          <input type="password" placeholder=" Password" name="password" id="password" autocomplete="off" required>
          <errorDisplay>Entre a strong password</errorDisplay>
        </div>


        <div class="input-form">
          <input type="text" placeholder="Address with near landmarks" name="address" id="address" autocomplete="off" required>
          <errorDisplay>Entre a vaild address</errorDisplay>        
        </div>

        <div class="input-form">
          <button type="submit" value="submit"  id="btn" name="button"> Register</button>
        </div>

        <div class="end">
          <p1>Existing Account?&nbsp;</p1>
          <a href="../login/loginn1.php">Login</a>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
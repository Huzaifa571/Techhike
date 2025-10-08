<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php include "./boot.php"?>

 

  <style>
    body {
      background: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: "Segoe UI", Arial, sans-serif;
    }
    .login-box {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
   
      width: 100%;
      max-width: 450px;
      text-align: center;
    }
    .login-box img {
      max-height: 40px;
      margin-bottom: 15px;
    }
    .login-box h4 {
      font-weight: 500;
      margin-bottom: 10px;
    }
    .form-control {
      border: 1.8px solid #0d6efd;
      border-radius: 8px;
      padding: 10px;
      font-size: 15px;
    }
    .btn-login {
      background: #0d6efd;
      color: #fff;
      font-weight: 600;
      padding: 10px;
      border-radius: 6px;
      width: 100%;
      border: none;
      margin-top: 10px;
    }
    .btn-login:hover {
      background: #0b5ed7;
    }
    .login-box small {
      color: #666;
      font-size: 0.9rem;
    }
    .login-box a {
      text-decoration: none;
      font-size: 0.85rem;
      margin: 0 5px;
      color: #0d6efd;
    }
  </style>
</head>
<body>

  <div class="login-box">
    
    <img src="https://cdn.shopify.com/s/files/1/0952/7728/5655/files/logo_1_200x60@2x.webp?v=1757506485.webp" alt="Tech Hunk Logo">


   <div class="text-start">
     <h4 >Sign in</h4>
    <smal>Enter your email and we'll send you a verification code</small>
   </div>

    
    <form action="./signup.php" method="POST" class="mt-3">
      
      <div class="mb-3 text-start">
         
        <input type="text" name="username" class="form-control" placeholder=" Username" required>
      </div>


      <div class="mb-3 text-start">
     
        <input type="email" name="email" class="form-control" placeholder=" Email" required>
      </div>

    
      <div class="mb-3 text-start">
     
        <input type="password" name="password" class="form-control" placeholder=" Password" required>
      </div>

    
      <button type="submit" class="btn-login">Continue</button>
    </form>


    <div class="mt-3">
      <a href="#">Privacy policy</a>
      <a href="#">Terms of service</a>
    </div>
  </div>

</body>
</html>

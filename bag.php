<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php  include "./boot.php" ?>
          <style>
            .navbar-brand img {
    height: 30px;
}

.nav-link {
    color: #1e3a8a !important;
}

.btn {
    padding: 0;
    margin-left: 10px;
}

.btn i {
    font-size: 1.2rem;
    color: #1e3a8a;
}

h1 {
    font-size: 2.5rem;
    font-weight: bold;
}

h4 {
    font-size: 1.25rem;
    font-weight: bold;
}

.btn-dark {
    background-color: #1e3a8a;
    border-color: #1e3a8a;
    padding: 10px 20px;
}

.btn-dark:hover {
    background-color: #152e6f;
    border-color: #152e6f;
}

.input-group .btn-outline-dark {
    border-left: none;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.input-group .form-control {
    border-right: none;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
              .footer {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }
       . footer a {
    color: #007bff;
    text-decoration: none;
}
          </style>
</head>
<body>
    <?php include "./Support-navbar.php"?>


    <div class="container text-center " style=" margin-top: 12rem;">
        <h1 class="text-dark mb-4 fw-bold">Your cart is empty</h1>
        <a href="#" class="btn btn-dark mb-5 px-5 py-3 fw-bold">Continue shopping</a>
        <div class="">
            <h4 class="text-dark fw-bold">Have an account?</h4>
            <p class="text-muted"><a href="">Log in</a> to check out faster.</p>
        </div>
        
    </div>

     <div class="footer">
        <p class="fw-bold mt-4">Subscribe to our emails</p>
        <div class="input-group mb-5" style="max-width: 300px; margin: 0 auto;">
            <input type="email" class="form-control py-2 " placeholder="Email">
            <button class="btn btn-primary px-4 " type="button">→</button>
        </div>
        <hr>
        <p class="my-5">© 2025, TechHunk | Powered by Shoppy | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Shipping Policy</a> | <a href="#">Contact Information</a></p>
        <a href="#" class="text-success"><i class="bi bi-whatsapp"></i></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
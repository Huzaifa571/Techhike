<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php  include "./boot.php" ?>

       <style>
        .card {
    border-radius: 10px;
    background: #fff; 

}

.card h4 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.form-control {
    border-radius: 5px;
}

.btn-dark {
    background-color: #1e3a8a;
    border-color: #1e3a8a;
}

.btn-dark:hover {
    background-color: #152e6f;
    border-color: #152e6f;
}

.btn-outline-primary {
    color: #1e3a8a;
    border-color: #1e3a8a;
}

.btn-outline-primary:hover {
    background-color: #1e3a8a;
    color: #fff;
}

.text-muted {
    font-size: 0.9rem;
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


    <div class="container  text-center " style=" margin-top: 7rem;">
        <h1>Customer Support</h1>
        <p class="text-muted">We're here to help</p>
        <div class="d-flex justify-content-center gap-3 mb-4">
            <button class="btn btn-danger">Warranty Claim</button>
            <button class="btn btn-outline-secondary">Track Your Order</button>
            <a href="#" class="btn btn-outline-primary">Shipping Policy</a>
            <a href="#" class="btn btn-outline-primary">Warranty Policy</a>
            <a href="#" class="btn btn-outline-primary">Privacy Policy</a>
            <a href="#" class="btn btn-outline-primary">Terms & Conditions</a>
        </div>
        <div class="card border-2">
            <div class="text-start mt-4">
            <div class="card p-4 border-3 rounded-4 shadow-sm" style="max-width: 500px; margin: 0 auto;">
                <h4 class="text-center fw-bold">Warranty Claim</h4>
                <p class="text-muted fw-bold fs-6">"If you're experiencing any issue with your product, please complete the form below, our team is always here to help you."</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Contact Number *" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tracking ID (optional)">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Model Name *" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Brief Description*" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-pill fw-bold w-100">Submit</button>
                </form>
                
            </div>
        </div>
        <div class="mt-4">
           <p>Shopify Forms<a href="#" class="btn btn-link"> Powered by HulkApps</a> </p>
        </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Subscribe to our emails</p>
        <div class="input-group mb-3" style="max-width: 300px; margin: 0 auto;">
            <input type="email" class="form-control" placeholder="Email">
            <button class="btn btn-primary" type="button">→</button>
        </div>
        <p>© 2025, TechHunk | Powered by Shoppy | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Shipping Policy</a> | <a href="#">Contact Information</a></p>
        <a href="#" class="text-success"><i class="bi bi-whatsapp"></i></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
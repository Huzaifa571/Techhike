<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php  include "./boot.php" ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .header .nav-link {
            color: #007bff;
            margin: 0 15px;
        }
        .banner {
            background-color: #f0e8d4;
            padding: 50px 20px;
            text-align: center;
            color: #333;
        }
        .banner h1 {
            font-size: 2.5rem;
            color: #007bff;
        }
        .banner h2 {
            font-size: 1.5rem;
            color: #6c757d;
        }
        .banner .satisfaction {
            font-size: 1.2rem;
            color: #28a745;
        }
        .product-card {
            margin: 20px 0;
            text-align: center;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
        }
        .product-card .sold-out {
            background-color: #6c757d;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .product-card .price {
            color: #dc3545;
        }
        .faq-section {
            background-color: #f6f8faff;
            padding: 20px;
            margin-top: 20px;
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
        
           .faq-card{background:#f8fafc;border-radius:10px;padding:20px}
    </style>
</head>
<body>
      <?php include "./navbar.php"?>

     <img src="https://techhunk.pk/cdn/shop/files/projetor_11zon.webp?v=1757531250&width=1100"  width="100%" height="100%" alt="Projector" class="img-fluid">
    
       

    <!-- Products Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://techhunk.pk/cdn/shop/files/4webp.webp?v=1757516721&width=823" alt="TH Smart Projector Gen 4">
                    <p class="sold-out">Sold out</p>
                    <p>TH Smart Projector Gen 4</p>
                    <p class="price">Rs.45,000.00 - Rs.31,650.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://techhunk.pk/cdn/shop/files/gen3prjjctr.webp?v=1757373027&width=823" alt="TH Portable Projector Gen 3">
                    <p class="sold-out">Sold out</p>
                    <p>TH Portable Projector Gen 3</p>
                    <p class="price">Rs.50,000.00 - Rs.25,950.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://techhunk.pk/cdn/shop/files/2.webp?v=1757516714&width=823" alt="TH Portable Projector Gen 2">
                    <p class="sold-out">Sold out</p>
                    <p>TH Portable Projector Gen 2</p>
                    <p class="price">Rs.40,000.00 - Rs.23,650.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://techhunk.pk/cdn/shop/files/1.webp?v=1757516708&width=823" alt="TH Portable Projector Gen 5">
                    <p class="sold-out">Sold out</p>
                    <p>TH Portable Projector Gen 5</p>
                    <p class="price">Rs.70,000.00 - Rs.46,550.00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
            <section class="py-5">
        <div class="faq-card rounded-4   bg-body-secondary">
          <h3 class="fw-bold">Frequently asked questions</h3>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq1">
                <button class="accordion-button bg-body-secondary collapsed  fw-bold " type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">Q: What sets the TH Ultra Classic Smartwatch apart from other models?</button>
              </h2>
              <div id="collapse1" class="accordion-collapse bg-body-secondary  collapse " data-bs-parent="#faqAccordion"><div class="accordion-body">Premium materials, 90Hz AMOLED display and AI features.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq2">
                <button class="accordion-button bg-body-secondary collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">Q: Does the TH Ultra Classic support artificial intelligence features?</button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse bg-body-secondary" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes — watch face generator, translator, and more.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq3">
                <button class="accordion-button bg-body-secondary collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">Q: How long does the battery last on the TH Ultra Classic, and how is it charged?</button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse bg-body-secondary" data-bs-parent="#faqAccordion"><div class="accordion-body">2-3 days typical use. Fast wireless recharge.</div></div>
            </div>
             <div class="accordion-item">
              <h2 class="accordion-header" id="faq3">
                <button class="accordion-button bg-body-secondary collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">Q: Is the TH Ultra Classic a smart alternative to the Apple Watch Ultra?</button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse bg-body-secondary" data-bs-parent="#faqAccordion"><div class="accordion-body">2-3 days typical use. Fast wireless recharge.</div></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
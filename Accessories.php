<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "./boot.php"?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .header {
            background: linear-gradient(to bottom, #e6f0fa, #ffffff);
            padding: 20px 0;
            text-align: center;
        }
        .header nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .header nav a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
        .banner {
            background: url('banner-image.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .banner h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .banner p {
            font-size: 1.2rem;
        }
        .product-grid {
            padding: 40px 0;
            background-color: #fff;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            text-align: center;
        }
        .card img {
            height: 200px;
            object-fit: contain;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            color: #6c757d;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .faq-section {
            padding: 40px 0;
            background-color: #f8f9fa;
        }
        .footer {
            background-color: #eaedf3ff;
            color: #181717ff;
            padding: 20px 0;
            text-align: center;
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

             <img src="https://techhunk.pk/cdn/shop/files/essentialweb_11zon.webp?v=1757536727&width=2000" width="100%" height="100%" alt="">

    <!-- Product Grid -->
    <div class="container product-grid">
        <h2 class="text-center mb-4">TECH ESSENTIALS</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/trail.webp?v=1757770361&width=823" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Trial Loop</h5>
                        <p class="card-text">Rs. 6,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/metal.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/alpine.webp?v=1757770360&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/leatherclasic.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/trail.webp?v=1757770361&width=823" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Trial Loop</h5>
                        <p class="card-text">Rs. 6,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/metal.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/alpine.webp?v=1757770360&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/leatherclasic.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/trail.webp?v=1757770361&width=823" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Trial Loop</h5>
                        <p class="card-text">Rs. 6,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/metal.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/alpine.webp?v=1757770360&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="https://techhunk.pk/cdn/shop/files/leatherclasic.webp?v=1757770361&width=823" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Milanese Loop</h5>
                        <p class="card-text">Rs. 9,500.00</p>
                        <a href="#" class="btn btn-primary">Sale</a>
                    </div>
                </div>
            </div>
            <!-- Add more product cards as needed -->
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
            </ul>
        </nav>
    </div>

    <!-- FAQ Section -->
       <section class="py-5 mt-5">
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

            <!-- Add more FAQ items as needed -->
    

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include "./boot.php" ?>
    <style>
         .faq-card{background:#f8fafc;border-radius:10px;padding:20px}


.text-danger {
    font-size: 0.8rem;
}

.text-muted {
    font-size: 0.8rem;
}

.accordion-button {
    font-size: 0.9rem;
}

footer a {
    color: #007bff;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
     <?php include "./navbar.php"?>
    <!-- Main Banner -->
        <img src="https://techhunk.pk/cdn/shop/files/watches2.webp?v=1758029592&width=1500"  width="100%" height="100%" alt="Projector" class="img-fluid">

    <!-- Product Grid -->
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/spectra1.webp?v=1759587037&width=823" class="card-img-top" alt="Watch 1">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH X Spectra Smart Watch</h6>
                        <p class="card-text">Rs. 6,500.00 <span class="text-danger">Sale</span></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/6ai1_8d7485e3-cc62-429d-8c49-40a90c874a44.webp?v=1759587092&width=823" class="card-img-top" alt="Watch 2">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH 6 AI Smart Watch</h6>
                        <p class="card-text">Rs. 7,250.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/ok2.webp?v=1757765428&width=823" class="card-img-top" alt="Watch 3">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH Fusion Smart Watch</h6>
                        <p class="card-text">Rs. 9,500.00 <span class="text-danger">Sale</span></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/balcknlue_720x720_f5ee3ca5-7d7c-4df6-a131-46ad3b521160.webp?v=1759418667&width=823" class="card-img-top" alt="Watch 4">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH Beast Smart Watch</h6>
                        <p class="card-text">Rs. 8,350.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/ultra_classic.webp?v=1757339778&width=823" class="card-img-top" alt="Watch 5">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH Ultra Classic Smartwatch</h6>
                        <p class="card-text">Rs. 8,350.00 <span class="text-danger">Sale</span></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/primex.webp?v=1757356183&width=823" class="card-img-top" alt="Watch 6">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH X Prime Smartwatch</h6>
                        <p class="card-text">Rs. 9,500.00 <span class="text-muted">Sold out</span></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://techhunk.pk/cdn/shop/files/4g.webp?v=1757339778&width=823" class="card-img-top" alt="Watch 7">
                    <div class="card-body text-center">
                        <h6 class="card-title">TH 4G Smartwatch</h6>
                        <p class="card-text">Rs. 16,550.00 <span class="text-danger">Sale</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    
        <div class="container">
            <p>Smart Watch Price in Pakistan | AMOLED & BT Calling - Tech Hunk</p>
            <p>Shop men's & unisex smart watches with AMOLED, Bluetooth calling, fitness & health tracking, IP67/IP68 and long battery life. Fast delivery, COD & warranty.</p>
            <a href="#">Read More+</a>
            <hr>
</div>
            <footer class=" text-center text-lg-start">
           <div class="footer bg-light">
        <p class="text-center">Subscribe to our emails</p>
        <div class="input-group mb-3" style="max-width: 300px; margin: 0 auto;">
            <input type="email" class="form-control" placeholder="Email">
            <button class="btn btn-primary" type="button">→</button>
        </div>
        <p class="text-center">© 2025, TechHunk | Powered by Shoppy | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Shipping Policy</a> | <a href="#">Contact Information</a></p>
        <a href="#" class="text-success"><i class="bi bi-whatsapp"></i></a>
    </div>

        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
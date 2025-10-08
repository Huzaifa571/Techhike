
<?php 

   session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "./boot.php"?>
 
  <style>
    
    :root{--navy:#0f2240;--accent:#0b2a59;--muted:#6b7280}
    body{font-family:Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; color:#1f2937}
    .topbar{background:var(--navy);color:#fff}
    .logo{font-weight:700;letter-spacing:0.2px}
    .product-title{font-size:1.9rem;font-weight:800}
    .price{font-size:1.6rem;font-weight:700;color:#0b2a59}
    .old-price{color:var(--muted);text-decoration:line-through;margin-left:.6rem}
    .badge-sale{;color:#fff;padding:.5rem .6rem;border-radius:.6rem}
    .product-card{border-radius:12px}
    .thumbs img{width:64px;height:64px;object-fit:cover;border-radius:8px;cursor:pointer}
    .main-img{max-width:420px;border-radius:18px}
    .specs-icon{width:36px;height:36px;border-radius:50%;display:grid;place-items:center;background:#f3f4f6;margin-right:12px}
    .spec-row{padding:18px 0;border-bottom:1px solid #eef2f6}
    .feature-badges .col{display:flex;align-items:center;gap:.8rem}
    .product-price {font-size: 1.8rem; font-weight: bold; color: #0f2240;}
    .rounded-pill-2{border-radius:999px}
    .sticky-footer{background:var(--navy);color:#fff;padding:40px;border-radius:12px}
    .faq-card{background:#f8fafc;border-radius:10px;padding:20px}

   .countdown {
  background: #081133;
  color: #fff;
  padding: .5rem .7rem;
  border-radius: 8px;
  position: relative;
  overflow: hidden;
}

.countdown::after {
  content: '';
  position: absolute;
  top: -20%;
  left: -40%;
  width: 40%;
  height: 140%; 
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, .38) 50%,
    transparent 100%
  );
  animation: move 2.2s linear infinite;
  z-index: 1;
}

@keyframes move {
  0% {
    left: -40%;
  }
  100% {
    left: 120%;
  }
}


    .thst-bar {
    display: flex;
    padding:3px;
    gap: 50px;
    align-items: center;
    overflow: auto;
    scrollbar-width: none;
    }


      footer {
      background-color: #0d1b3d;
      color: #fff;
      padding: 40px 20px;
      border-radius: 20px 20px 0 0;
    }
    footer h5 {
      font-weight: bold;
      margin-bottom: 20px;
    }
    footer a {
      color: #fff;
      text-decoration: none;
      display: block;
      margin-bottom: 8px;
      transition: color 0.3s;
    }
    footer a:hover {
      color: #00bfff;
    }
    .footer-social a {
      font-size: 20px;
      margin-right: 15px;
      color: #fff;
    }
    .footer-social a:hover {
      color: #00bfff;
    }
    .newsletter input {
      border-radius: 20px;
      padding: 8px 15px;
    }
    .newsletter button {
      border-radius: 20px;
    }
    .whatsapp-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: #fff;
      font-size: 28px;
      border-radius: 50%;
      padding: 12px;
    }
    
    @media (max-width:767px){.product-title{font-size:1.45rem}.main-img{max-width:100%}}
  </style>
</head>
<body>

<?php

$data = $_GET['data'];
$product_data = json_decode($data);

?>



<?php include "dark-navbar.php"?>


<section class="">
  <div class="container py-lg-5 p-5 my-5">
    <div class="row g-4 align-items-center justify-content-between d-flex ">
      <div class="col-md-6 text-center">
           <img src="./products_images/<?php echo $product_data->image?>" width="100%" height="100%" alt="">
        <div class="d-flex gap-2 justify-content-center mt-3 thumbs">
          <img src="https://techhunk.pk/cdn/shop/files/ultra_classic.webp?v=1757339778&width=493" onclick="changeImage(this.src)">
          <img src="https://techhunk.pk/cdn/shop/files/1753367686_Th_Ultra_Classic_Tilted_11zon.webp?v=1757357982&width=493" onclick="changeImage(this.src)">
          <img src="https://techhunk.pk/cdn/shop/files/1753535184_photo-collage_png__1__11zon.webp?v=1757357981&width=493" onclick="changeImage(this.src)">
        </div>
      </div>

      <div class="col-lg-6">
          <h2 class="fs-1 fw-bold"><?php echo $product_data->name?></h2>
           <p class="fs-6 text-uppercase"><?php echo $product_data->description?></p>
             
           

           <div class="d-flex align-items-center ">
             <sup>
              <div class=" btn btn-info d-flex align-items-center  text-white rounded-3  fw-bold" >
              <span class="discount "></span>
              OFF
             </div>
             </sup>
               <sup>
                <span class="price fs-2">Rs.
             <span class="discounted_price">
              <?php echo $product_data->discount_price?>
             </span>
           </span>

               </sup>
              <sub>
                 <p class="old-price fs-5 fw-bold">Rs.
              <span class="actual_price">
              <?php echo $product_data->price?>
              </span>
            </p>
              </sub>
           </div>

     
        

        <div class="d-flex countdown p-2 justify-content-between gap-2 align-items-center ">
            
        
          <h6 class="m-0 position-relative"> <span class="discount"></span>OFF</h6>
          <h6 class="m-0 position-relative">SALE ENDING SOON</h6>
          <div class="d-flex position-relative gap-2">
            <h6 class="m-0">00h</h6>
          <h6 class="m-0">52m</h6>
          <h6 class="m-0">07s</h6>
        
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Quantity</label>
          <div class="input-group" style="max-width:200px">
            <button class="btn btn-outline-secondary rounded-start-pill sub" type="button"> <i class="bi bi-dash"></i></button>
            <input type="text" id="qty" class="form-control text-center  Quantity" value="1" aria-label="qty">
            <button class="btn btn-outline-secondary rounded-end-pill add" type="button" > <i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="row">
          <button class="btn btn-outline-dark  col-md-10 w-100 py-3 mb-2 rounded-pill-2 flex-grow-1">Add to cart</button> 
          <a href="./checkout.php?data=<?php echo urlencode($data)?>" class="btn rounded-pill-2 col-md-10 w-100 py-3 flex-grow-1 text-white" style="background-color:#0f2240;">Buy it now</a>
        </div>
                  
          
            <?php 
               if(!isset($_SESSION['ticket'])){

            ?>

               <p class="text-secondary-emphasis my-3">
            Login to  avail  10% more discount <a href="">Login</a></p>

            <p class="text-secondary ">
              IF You Login <?php echo $product_data->name?> Will Cost You <span class="further-discount">
              </span></p>


             <?php }?>
        
          <div class="row mt-4">
           <div class="col-md-3 col-sm-3 col-3">
            <div class=" col-3 rounded   rounded-circle d-flex justify-content-center align-items-center">
            <img src="https://techhunk.pk/cdn/shop/files/approved_6667ddfb-ae3f-4d3b-aae0-665ba31e29a2.png?v=1757773381&width=200" style="width:25px;height:25px;"   alt="">
            </div> 
    
        <h6 class="m-0 fw-bold">QC</h6>
        <p class="m-0">Passed</p>
           </div>
           <div class="col-md-3 col-sm-3 col-3">
            <div class=" col-3 rounded   rounded-circle d-flex justify-content-center align-items-center">
            <img src="https://cdn.shopify.com/s/files/1/0952/7728/5655/files/Asset_5.svg?v=1756592583" style="width:25px;height:25px;"   alt="">
            </div> 
    
        <h6 class="m-0 fw-bold">Free</h6>
        <p class="m-0">Shipping</p>
           </div>
           <div class="col-md-3 col-sm-3 col-3">
            <div class=" col-3 rounded   rounded-circle d-flex justify-content-center align-items-center">
            <img src="https://cdn.shopify.com/s/files/1/0952/7728/5655/files/Asset_2.svg?v=1756592584" style="width:25px;height:25px;"   alt="">
            </div> 
    
        <h6 class="m-0 fw-bold">1M+</h6>
        <p class="m-0">Customers</p>
           </div>
           <div class="col-md-3 col-sm-3 col-3 ">
            <div class=" col-3 rounded   rounded-circle d-flex justify-content-center align-items-center">
            <img src="https://cdn.shopify.com/s/files/1/0952/7728/5655/files/12226224.png?v=1757504928" style="width:25px;height:25px;"   alt="">
            </div> 
    
        <h6 class="m-0 fw-bold ">Secure</h6>
        <p class="m-0">Checkout</p>
           </div>
          </div>
        

       
      
    </div>
  </div>
</section>

  <hr>
        <div class="thst-bar px-5   ">

        <h5>Overview</h5>
        <h5>Review</h5>
        <h5>Specs</h5>
        <h5>FAQ</h5>
        

        </div>
        
<section class="py-5 bg-white">
  <div class="container">
    <div class="ratio ratio-16x9 product-card shadow-sm p-3">

   
      <iframe src="https://www.youtube-nocookie.com/embed/rnYkNHN-V9c?autoplay=1&playsinline=1&modestbranding=1&rel=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position: absolute; inset: 0px; width: 100%; height: 100%; border: 0px;">…</iframe>
    </div>
  </div>
</section>




<section class="py-5">
   <h1 class="fw-bold text-center py-4">Explore the <span class="text-info fw-bold">Specs</span></h1>
<hr>
     <div class="row mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/image.webp?v=1757345911&width=96" style="width:60px; height:60px;" alt="">
                <h2>Design & Appearance</h2>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">Premium Square Titanium-Finish Body with 3 different 49mm straps offering a classy yet durable look. Water Resistant IP68 (Refrain from using in water).</p>
        </div>
     </div>
     <hr>
      <div class="row mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/display-frame.webp?v=1757345910&width=96" style="width:60px; height:60px;" alt="">
                <h2> Super  Amoled Display</h2>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">Impressive 2.18″ Super AMOLED display with buttery-smooth 90 Hz refresh rate and sharp 485×520 resolution for vivid visuals and fluid interaction.</p>
        </div>
     </div>
     <hr>
      <div class="row mx-3  d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/feature.webp?v=1757345911&width=96" style="width:60px; height:60px;" alt="">
                <h1>Signature  Features</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">AI Watch Face Generator to auto-create custom faces, built-in photo Album Storage, Direct Earbuds Connectivity with the watch, customizable watch transitions, games, Always on Display Modes, Gesture call receiving, Palm Sensor, Red dot Notification alert, Voice Recording, Compass</p>
        </div>
     </div>
     <hr>
      <div class="row mx-3  d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/layout.webp?v=1757345911&width=96" style="width:60px; height:60px;" alt="">
                <h1>Smart & Features</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">Bluetooth calling, NFC, sedentary reminder, alarm, barometer support, brightness adjustment, customizable watch transitions, multi-sports mode, and sleep/health tracking (heart rate, SpO₂, blood pressure).</p>
        </div>
     </div>
     <hr>
      <div class="row  mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/link.webp?v=1757345910&width=96" style="width:60px; height:60px;" alt="">
                <h1> Wire Connectivity</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">Supported OS: iOS 11.0 or later, Android 6.0 or later, Wireless Connectivity: Bluetooth 3.0 & 5.2, Bluetooth calling supported</p>
        </div>
     </div>
     <hr>
     <div class="row mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/battery_webbb.webp?v=1757345603&width=96" style="width:60px; height:60px;" alt="">
                <h1>Battery & Capacity</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">Average Use: 2-3 days per charge, Idle Time: Up to 7 days, Battery Capacity: 450mAh, Recharge Time: Up to 2 hours</p>
        </div>
     </div>
     <hr>
     <div class="row mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/sensor.webp?v=1757345910&width=96" style="width:60px; height:60px;" alt="">
                <h1>Track Palm Sensor</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">
Pedometer (Step Tracking), Heart Rate Monitor, Sleep Analysis, Oxygen Saturation (SpO₂) Monitor, Workout & Activity History, Breathing Training Sessions, Menstrual Cycle Tracking, Multi-Sport Tracking, Palm Sensor, Barometer</p>
        </div>
     </div>
     <hr>
     <div class="row mx-3 d-flex justify-content-center align-items-center ">
        <div class="col-lg-4">
            <div class="d-flex justify-content-center align-items-center gap-2 fw-semibold">
                <img src="https://techhunk.pk/cdn/shop/files/box.webp?v=1757345911&width=96" style="width:60px; height:60px;" alt="">
                <h1>Wireless Charging </h1>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="fs-5">
1x TH Ultra Classic, 1x Wireless Charging Cable, 1x User Manual, 1x Ocean Band, 1x FREE Trail Band, 1x FREE Millanese Band, 1x FREE Glass Protector, 1x FREE Silicon Watch Case</p>
        </div>
     </div>
     <hr>
</section>

<section >
       <h3 class="text-center fw-bold fs-2" style="color:#0f2240;">Customer Reviews</h3>

       <div class="d-flex justify-content-center align-items-center gap-5 py-3">
        <div>
             <div class="rating me-3">
          <i class="bi bi-star-fill "></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
         
            </div>
            <p>Be the first to write a review</p>
        </div>
          <hr>
        <div c>
          <button class="btn text-white" style="background-color:#0f2240;">write a review</button>
        </div>
       </div>
       
</section>


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


<footer class="container-fluid">
  <div class="row text-center text-md-start">
    
    <div class="col-md-3 mb-4">
      <h5>SHOP</h5>
      <a href="#">Earbuds</a>
      <a href="#">Smart Watches</a>
      <a href="#">Projectors</a>
      <a href="#">Accessories</a>
    </div>

    
    <div class="col-md-3 mb-4">
      <h5>HELP</h5>
      <a href="#">Home Page</a>
      <a href="#">Support</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Shipping Policy</a>
      <a href="#">Warranty Claim</a>
      <a href="#">Warranty Policy</a>
      <a href="#">Track your Order</a>
      <a href="#">Contact us</a>
    </div>

  
   

  
    <div class="col-md-6 mb-4">
      <img src="https://techhunk.pk/cdn/shop/files/logo_1.png?v=1756293749&width=280"  alt="Logo" class="mb-3">
      <div class="footer-social d-flex gap-3">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
      </div>
      <h6 class="fw-bold">We’re here to help.</h6>
      <p>Call Us: <a href="tel:+923051114485">+92 305 1114485</a></p>
      <p>Email Us: <a href="mailto:info@techhunk.pk">info@techhunk.pk</a></p>
      
      <form class="newsletter d-flex">
        <input type="email" class="form-control w-50 me-2" placeholder="Email Address">
        <button type="submit" class="btn btn-light">Submit</button>
      </form>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
  let quantity = document.querySelector('.Quantity')
let add = document.querySelector('.add')
let sub = document.querySelector('.sub')
let discount_text = document.querySelectorAll('.discount')
let discounted_price = document.querySelector('.discounted_price')
let actual_price = document.querySelector('.actual_price')
let more_discount = document.querySelector('.further-discount')



let discountpercentage = ((actual_price.innerHTML - discounted_price.innerHTML) / actual_price.innerHTML) * 100

   discount_text.forEach((item,index)=>{
        
    item.innerHTML = `${discountpercentage.toFixed()}%`
   })

let more_discount_price = discounted_price.innerHTML - ((10 / 100) * discounted_price.innerHTML)

more_discount.innerHTML = `RS.${more_discount_price}`







let num = 1

add.addEventListener('click',()=>{
    num++
    quantity.value = num
})

sub.addEventListener('click',()=>{
    num--
    if(num<1){
        num=1
    }
    quantity.value = num
})
</script>


</body>
</html>
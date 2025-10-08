<?php 
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include './boot.php'?>
     
      <style>
       .products ::-webkit-scrollbar {

        width:0;
        height: 0;

        }
      </style>
   
</head>
<body>
       
       <div class="underlay position-fixed min-vh-100 w-100 top-0">
         <div class="sidebar col-md-5 col-6 min-vh-100 bg-white position-relative">
            <i class="bi bi-x-lg fs-5 fw-bold position-absolute close-sidebar" style="left:40px;top:35px;"></i>
            <img src="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=180" class="mx-auto d-block py-4" alt="">
            <hr class="border-secondray">

            <ul class="list-unstyled fw-semibold">
                <li class="px-3 ">Smart Watches</li>
                <hr class="border-secondray">
                <li class="px-3 ">Earbuds</li>
                <hr class="border-secondray">
                <li class="px-3 ">Projectors</li>
                <hr class="border-secondray">
                <li class="px-3 ">Help</li>
                <hr class="border-secondray">
                <li class="px-3 ">Support</li>
                <hr class="border-secondray">
                <li class="px-3 ">Track Your Order</li>
                <hr class="border-secondray">
                 <li class="d-flex px-3  gap-4">
                   <a href="http://www.instagram.com" class="text-decoration-none" target="_blank">
                     <i class="bi bi-instagram rounded-circle border text-dark d-flex justify-content-center align-items-center"style="width: 40px;height:40px;"></i>
                   </a>
                    <a href="http://www.facebook.com" class="text-decoration-none" target="_blank">
                         <i class="bi bi-facebook rounded-circle border d-flex text-dark justify-content-center align-items-center"style="width: 40px;height:40px;"></i>
                    </a>
                     <a href="http://www.youtube.com" class="text-decoration-none" target="_blank">
                         <i class="bi bi-youtube rounded-circle border d-flex text-dark justify-content-center align-items-center"style="width: 40px;height:40px;"></i>
                    </a>
                     
                   
                 </li>

            </ul>
         </div>
       </div>

         <div class="container-fluid position-relative p-0">

          <?php include "./navbar.php"?>
                 <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://techhunk.pk/cdn/shop/files/gen_3ookppc_11zon.webp?v=1757525647&width=3000" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/flexxweb_1.webp?v=1758036221&width=3000" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/sonic_pcok_11zon.webp?v=1757521334&width=3000" class="d-block w-100" alt="">
    </div>
     <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/gen_3_pcok_11zon.webp?v=1757521393&width=3000" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
         </div>
        
    
</div>
           
      <?php include "./arrivals.php"?>
          
  <div class="container position-relative ">
         <h2 class="text-uppercase text-center d-flex justify-content-center align-items-center fw-bold gap-2 my-4">Best <span class="text-info">Sellers</span></h2>
            
           <i class="bi bi-chevron-left fs-6 rounded-circle top-50 products-chevron left z-3 d-flex justify-content-center align-items-center " style="left:-2px;"></i>
           <i class="bi bi-chevron-right fs-6 rounded-circle  products-chevron right z-3 d-flex justify-content-center align-items-center "style="right:0px; top:50%;" ></i>
           
         <div class="d-flex products gap-4  overflow-x-scroll">

               <?php
                   include "./config.php";
                   $select = "SELECT * FROM products";
                   $result = mysqli_query($connection,$select);
                   foreach($result as $row){
               ?>
        <div class="card flex-shrink-0  p-3 shadow border border-dark rounded-4" style="width:280px;">
            <div class="d-flex h-100 flex-column justify-content-between">
               <p class="tpcp-card__badge text-uppercase">
                <?php echo $row['title'] ?>
               </p>
          <img src="./products_images/<?php echo $row['image'] ?>" width="100%" class="position-relative" alt="">
          <h5 class=" m-0">
            <?php echo $row['name'] ?>
          </h5>
          <p class="m-0 text-secondary pro-desc text-uppercase" style="font-size:0.7rem"> 
            <?php echo $row['description'] ?>
          </p>
           <div class="d-flex m-0 justify-content-between align-items-center mb-2">
            
              <div class="rating me-3">
          <i class="bi bi-star-fill "></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
           <span class="fw-bold">4.8</span>
            </div>
          
            <div class=" rounded-circle  " style="width:10px; height:10px; background:<?php echo $row['color'] ?>"></div>
           </div>

          <div class="d-flex m-0 justify-content-between align-items-center">
               <h5><?php echo $row['price'] ?></h5>
             <a href="./single-products.php?data=<?php echo urlencode(json_encode($row))?>" class="btn semibold text-info">
                 Buy Now
                   </a>
         </div>
            </div>

      </div>
          <?php
                   }
          ?>

          
   </div>
 </div>

     
</body>
</html>
<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://techhunk.pk/cdn/shop/files/logo_1.png?v=1756293749&width=140" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
     <title>Techhike</title>
      <style>
    .input-div {
      position: relative;
      padding: 0.6rem;
    }
    .my-placeholder {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 0.75rem;
      color: gray;
      transition: 0.3s ease;
      pointer-events: none;
    }
    .email-input {
      font-size: 0.8rem;
      border: none;
      outline: none;
      width: 100%;
      background: transparent;
    }

    .custom-alert {
            border-left: 4px solid #fd290dff;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #f9fff7ff; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 400px;
        }

        .custom-alert .alert-icon {
            margin-right: 10px;
            color: #e74717ff; 
        }

        .custom-alert .close-btn {
            font-size: 1.5rem;
            line-height: 1;
            color: #111010ff;
            text-shadow: none;
            opacity: 0.5;
            cursor: pointer;
        }

        .custom-alert .close-btn:hover {
            opacity: 0.8;
        }
  </style>
</head>
<body>
       <?php 
          
          $data = $_GET['data'];
          $product_data = json_decode($data);
       include "./dark-navbar.php";
       ?>

          <?php
            
            if(isset($_SESSION['order_done'])){

            
           ?>

                  
          <div class="custom-alert my-toast position-fixed shadow-lg "style="top:3%; right: -12%;transform:translatex(-50%); z-index: 33333;transition:all 0.5s">
        <div class="d-flex align-items-center">
            <span class="alert-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                </svg>
            </span>
            <div>
                <strong>Success</strong><br>
                Your Ordered has been successfully!
            </div>
        </div>
        <span class="close-btn " onclick="this.parentElement.style.display='none'">&times;</span>
    </div>
      

    <?php 

    unset($_SESSION['order_done']);
    }
    ?>


          


        
         <div class="row "style=" margin-top: 5rem;">
            
                <div class="col-lg-6 bg-white  border-end min-vh-100">
                     <form action="./orders.php" method="POST" class="col-xl-7 ms-auto col-md-7 col-11">
                      <input type="hidden" name="product_info"value=" <?php echo urlencode($data)?>">
    
          <div class="d-flex align-items-center justify-content-between">
             <h4 class="fw-bold">Contact</h4>
             <a href="" style="font-size:0.9rem;">Sign in</a>
          </div>
      <div class="position-relative input-div form-control mb-3">
        <p class="my-placeholder">Email or Mobile Phone Number</p>
        <input type="text" class="email-input" name="contact_email_or_phone">
      </div>

        <h4>Delivery</h4>
        <div class="input-div form-control  mb-3 position-relative">
            <p class="text-secondary position-absolute mb-5 my-placeholder" style="font-size:0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:0;">
                Country / Region
            </p>
            <select class="email-input bg-transparent mt-4 border-0 w-100" style="font-size:0.7rem;transition:all 0.3s; outline-width:0;" name="delivery_country">
                <option value="Pakistan">Pakistan</option>
            </select>
        </div>
      
      <div class="row">
        <div class="col-sm-6 mb-3">
          <div class="position-relative input-div form-control">
            <p class="my-placeholder">First Name (Optional)</p>
            <input type="text" class="email-input" name="delivery_first_name">
          </div>
        </div>
        <div class="col-sm-6 mb-3">
          <div class="position-relative input-div form-control">
            <p class="my-placeholder">Last Name</p>
            <input type="text" class="email-input" name="delivery_last_name">
          </div>
        </div>
      </div>

      <div class="position-relative input-div form-control mb-3">
        <p class="my-placeholder">Address</p>
        <input type="text" class="email-input" name="delivery_address">
      </div>

      <div class="row">
        <div class="col-sm-6 mb-3">
          <div class="position-relative input-div form-control">
            <p class="my-placeholder">City</p>
            <input type="text" class="email-input" name="delivery_city">
          </div>
        </div>
        <div class="col-sm-6 mb-3">
          <div class="position-relative input-div form-control">
            <p class="my-placeholder">Postal Code (Optional)</p>
            <input type="text" class="email-input" name="delivery_postal_code">
          </div>
        </div>
      </div>

      <div class="position-relative input-div form-control mb-3">
        <p class="my-placeholder">Phone</p>
        <input type="text" class="email-input" name="delivery_phone">
      </div>
         <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="saveInfo" name="save_info">
                <label class="form-check-label" for="saveInfo">Save this information for next time</label>
            </div>

            <div class="mb-4">
                <h5>Shipping method</h5>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="shipping_method" id="freeShipping" checked>
                    <label class="form-check-label" for="freeShipping">Free Shipping <span class="badge bg-success text-white">FREE</span></label>
                </div>
            </div>

            <div class="mb-4">
                <h5>Payment</h5>
                <p class="payment-note">All transactions are secure and encrypted.</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="payment_method" id="cod" checked>
                    <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
                </div>
            </div>

            <div class="mb-4">
                <h5>Billing address</h5>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="billing_address" id="sameAddress" checked>
                    <label class="form-check-label" for="sameAddress">Same as shipping address</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="billing_address" id="differentAddress">
                    <label class="form-check-label" for="differentAddress">Use a different billing address</label>
                </div>
            </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Complete Order</button>

                <div class="footer-links mt-2 d-flex gap-3">
            <a href="#">Shipping</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms of service</a>
            <a href="#">Contact</a>
        </div>
    </form>
                </div>
                <div class="col-lg-6 bg-body-secondary">
                    <div class="col-xl-7 py-5 px-2 col-md-7 col-11">
                        <div class="d-flex gap-5 align-items-center justify-content-between">
                            <div class="d-flex gap-4 align-items-center ">
                                <img src="./products_images/<?php echo $product_data->image?>" width="70px" alt="">
                                <div class="">
                                    <h6 style="font-size:0.8rem"><?php echo $product_data->name?></h6>
                                    <p style="font-size:0.8rem"><?php echo $product_data->description?></p>
                                </div>
                                <p style="font-size:0.8rem">Rs <?php echo $product_data->discount_price?></p>
                            </div>
                        </div>
                         <div class="d-flex align-items-center mt-4 justify-content-between">
                                <p>Subtotal</p>
                                <p>Rs <?php echo $product_data->discount_price?></p>
                            </div>
                            <div class="d-flex  align-items-center mt-1 justify-content-between">
                                <p>Shipping <i class="bi bi-question-circle"></i></p>
                                <p>Free</p>
                            </div>
                             <div class="d-flex  align-items-center mt-1 justify-content-between">
                               <h5>Total</h5>
                               <h5><span style="font-size:0.8rem;">PKR</span>Rs <?php echo $product_data->discount_price?></h5>
                            </div>
                    </div>
                </div>
            </div>
   
  </div>

  <script>
    let email_input = document.querySelectorAll('.email-input');
    let my_placeholder = document.querySelectorAll('.my-placeholder');
    let toast = document.querySelector('.my-toast');

      
      

      
    email_input.forEach((items, index) => {
      items.addEventListener('input', () => {
        if (items.value.length > 0) {
          my_placeholder[index].style.transform = 'translateY(-120%)';
          my_placeholder[index].style.fontSize = '0.65rem';
          my_placeholder[index].style.color = '#000';
        } else {
          my_placeholder[index].style.transform = 'translateY(-50%)';
          my_placeholder[index].style.fontSize = '0.75rem';
          my_placeholder[index].style.color = 'gray';
        }
      });
    });

   if(toast){
    setTimeout(() => {
          toast.style.transition = 'all 0.7s'
        toast.style.transform = 'translate(-50%,-140%) scale(0)'
    }, 3000);
   }
  
  </script>
       
</body>
</html>
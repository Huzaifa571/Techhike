 <nav style="background-color:#0f2240;left:50%;transform:translatex(-50%);width:97%;top: 10px;" class="d-flex  Custom-navbar text-white p-sm-2 p-2 fs-6  position-absolute rounded-4 z-3 justify-content-lg-center justify-content-between align-items-center gap-5">
               <i class="bi bi-list list-icon fs-2 d-block d-lg-none"></i>
             <img src="https://techhunk.pk/cdn/shop/files/logo_1.png?v=1756293749&width=140" width="100px" alt="">

             <ul class="list-unstyled d-none d-lg-flex gap-4 m-0">

                   <li>Home</li>
                   <li>Earbuds</li>
                   <li>Smart Watches</li>
                   <li>Projectors</li>
                   <li>Accessories</li>
                   <li>Support</li>
             </ul>

             <div class="d-flex gap-4">
                <i class="bi bi-search  fs-4"></i>
                <i class="bi bi-bag  fs-4"></i>
                 <?php 
                  
                  if(isset($_SESSION['ticket'])){
                        
                        echo"
                        
                        <a href='./logout.php'class='text-decoration-none' >
                        <i class='bi bi-power text-white fs-4'>
                        </i>
                        <span class='fs-6 text-white '> Welcome {$_SESSION['ticket']}</span>
                        </a>
                        
                        ";
                  }else{
                        echo"
                        
                         <a href='./login_page.php'>
                         <i class='bi bi-person text-white  fs-4'>
                         </i></a>
                        
                        
                        ";
                  }
                  
                  
                  
                  ?>
             </div>


         </nav>
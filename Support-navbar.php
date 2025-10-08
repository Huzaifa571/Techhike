 <nav  class="d-flex bg-transparent Custom-navbar text-black p-sm-3 p-2 fs-6   position-absolute rounded-4 z-3 justify-content-lg-center justify-content-between align-items-center gap-5">
               <i class="bi bi-list list-icon fs-2 d-block d-lg-none"></i>
             <img src="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=140" width="100px" alt="">

             <ul class="list-unstyled d-none d-lg-flex gap-4 m-0">

                  <a href="./index.php " class="text-decoration-none text-black"> <li>Home</li></a>
                   <a href="./Earbuds.php " class="text-decoration-none text-black"><li>Earbuds</li></a>
                    <a href="./Smart_Watches.php " class="text-decoration-none text-black"><li>Smart Watches</li></a>
                    <a href="./Projectors.php " class="text-decoration-none text-black"><li>Projectors</li></a>
                   <a href="./Accessories.php " class="text-decoration-none text-black"><li>Accessories</li></a>
                    <a href="./Support.php " class="text-decoration-none text-black"><li>Support</li></a>
             </ul>
             </ul>

             <div class="d-flex gap-4">
                <i class="bi bi-search  fs-4"></i>
                <a href="./bag.php" class="text-decoration-none text-black"><i class="bi bi-bag  fs-4"></i></a> 
                  <?php 
                  
                    if(isset($_SESSION['ticket'])){
                        
                        echo"
                        
                        <a href='./logout.php'class='text-decoration-none' >
                        <i class='bi bi-power text-white fs-4'>
                        </i>
                        <span class='fs-6 text-black '> Welcome {$_SESSION['ticket']}</span>
                        </a>
                        
                        ";
                  }else{
                        echo"
                        
                         <a href='./login_page.php'>
                         <i class='bi bi-person text-black  fs-4'>
                         </i></a>
                        
                        
                        ";
                  }
                  
                  
                  ?>
                
             </div>


         </nav>
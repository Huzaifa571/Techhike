<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
    <style>
        ::-webkit-scrollbar{
            width: 0;
        }
    </style>
</head>
<body style='overflow:hidden'>
    <div class="row">
        <?php include './admin-sidebar.php'?>
        <div class="col-xl-10 col-lg-9 col-md-8">
            <form action="./add-products-data.php" method="POST" enctype="multipart/form-data" class="container p-5" style="height:100vh;overflow-y:scroll">
                <h2 class="fw-bold">Products Details</h2>

                 <div class="row">
                    
                <div class="col-md-6">
                         <div class="form-group">
                    <label class="form-label fw-bold">Products Name</label>
                    <input type="text" name="name" class="form-control" placeholder="e.g.Smart Watch">
                </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                    <label class="form-label fw-bold">Products Color</label>
                    <input type="color" name="color" placeholder="e.g.Smart Watch"
                    class=" form-control form-control-color w-100">
                </div>
                    </div>
                    
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                    <label class="form-label fw-bold">Products Title</label>
                    <input type="text" name="title" class="form-control" placeholder="e.g.Smart Watch">
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label fw-bold fw-bold">Description</label>
                    <textarea name="description" class="form-control" rows="8  " placeholder="Smart Watches With..."></textarea>
                </div>
                <h2 class="fw-bold">Pricing Details</h2>
                 <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                    <label class="form-label fw-bold">Products Price</label>
                    <input type="text" name="price" class="form-control" placeholder="e.g.550">
                </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                    <label class="form-label fw-bold">Products Discounted Price</label>
                    <input type="text" name="discount" placeholder="e.g.490"
                    class=" form-control ">
                </div>
                    </div>
                </div>

                <label for="Products-images" class="w-100 bg-body-secondary my-3 d-flex justify-content-center align-items-center rounded-3  " style="height:200px;">
                    <input type="file" class="d-none" name="image" id="Products-images">
                    <i class="bi fs-2 bi-images"></i>
                </label>
                <button class="btn btn-dark w-100">
                    Add Products
                </button>
            </form>

        </div>  
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin-image{
    width: 100px;
    object-fit: contain;
        }
        .footer{
            position:absolute;
            bottom:0;

        }
        </style>
</head>
<body>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info"> 
        <div class="container-fluid">
            <img src="../images/logo.jpeg" alt="" class="logo">
            <nav class="navbar navbar-expand-lg"> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
       </nav>
        </div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-5">
                <a href="#"><img src="../images/download.jpeg" alt="" class="admin-image">
            </a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center p-2 my-3">
            <button class="my-3"><a href="insert_product.php" class="nav-link 
            text-light bg-info my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">View products</a></button>
            <button><a href="index.php?insert_category" 
            class="nav-link text-light 
            bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light
             bg-info my-1">View Categories</a></button>
            <button><a href="index.php?insert_brand"
            class="nav-link text-light 
            bg-info my-1">Insert Brands</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">View Brands</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">All Order</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">All Payment</a></button>
            <button><a href="" class="nav-link text-light
            bg-info my-1">List User</a></button><div>
            <button><a href="" class="nav-link text-light
             bg-info my-1">Logout</a></button></div>
            
            </div>
        </div>
    </div>
    <div class="container my-2">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brand.php');
        }
        ?>
        </div>

    <div class="bg-info p=0 text-center footer"> 
    <p> All rights reserved ©-Designed by Bindu-2024</p>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
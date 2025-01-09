<?php
/*include('../includes/conncet.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_Keywords=$_POST['product_Keywords'];
    $product_categories=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
   
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];


    if($product_title=='' or $product_description=='' or $product_keyword==''
    or $product_categories=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or
    $product_image3=''){
        echo "<script> alert('please fill all the available fields')</script>";
        exit();

    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        insert_product="insert into `Products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,
        product_image2,	product_image3,product_price,date,status) values('$product_title','$product_description','$product_Keywords','$product_categories','$product_brands',
       '$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
       $result_query=mysqli_query($con,$insert_products);
       if($result_query){
        echo "<script> alert('Successfully inserted the products')</script>";

       }
    }
}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" 
                id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off"
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" 
                id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off"
                required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_Keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_Keywords" 
                id="product_Keywords" class="form-control" placeholder="Enter product Keywords" autocomplete="off"
                required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a Category</option>

                    <?php
                    //$select_query="select * from 'categories";
                    //$result_query=mysqli_query($con_$swlect_query);
                    //while($row=mysquli_fetch_assoc($result_query)){
                      //  $category_title=$row['category_title'];
                       // $category_id=$row['category_id'];
                       // echo "<option value='$category_id'>$category_title</option>";
                   // }
                    ?>

                  <option value="">Category1</option>
                    <option value="">Category2</option>
                    <option value="">Category3</option>
                    <option value="">Category4</option>
                    <option value="">Category5</option>
                </select>
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_Brands" id="" class="form-select">
                    <option value="">Select a Brands</option>
                    <?php
                    //$select_query="select * from 'brands";
                    //$result_query=mysqli_query($con_$swlect_query);
                    //while($row=mysquli_fetch_assoc($result_query)){
                       // $brand_title=$row['brand_title'];
                       //$brand_id=$row['brand_id'];
                       // echo "<option value='$brand_id'>$brand_title</option>";
                 //  }
                    ?>

                    <option value="">Brand1</option>
                    <option value="">Brand2</option>
                    <option value="">Brand3</option>
                    <option value="">Brand4</option>
                    <option value="">Brand5</option>
                </select>
                </div>
                
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_Keywords" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control"  required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_Keywords" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" 
                id="product_image2" class="form-control"  required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_Keywords" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" 
                id="product_image3" class="form-control"  required="required">
                </div>


                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" 
                id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off"
                required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_producr" class="btn btn-info mb-3 px-3" value="Insert Product">
               </div>

        </form>
    </div>
    
</body>
</html>
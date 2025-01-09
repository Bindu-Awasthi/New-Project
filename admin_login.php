<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overfloe:hidden;
        }
        </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-3">
                <img src="../images/login.jpeg" alt="Admin Login"
                class="img-fluid">
            </div>
            
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username"
                        placeholder="Enter Your username" required="required" class="form-control">
                    </div>
                    
                     
                   
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password"
                        placeholder="Enter Your password" required="required" class="form-control">
                    </div>
                    
                    <div>
                        <input type="Submit" class= "bg-info py-2 px-3 border-0" name="admin_login" value="Login">
                        <p class="small fw-bold mt-2 pt-1">Don't you have an acount? <a href="admin_registration.php" class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
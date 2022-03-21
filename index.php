<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require_once('models/database.php');
?>
<form action="controllers/login_controller.php" method="get">
    <div class="row container mt-3 w-70 mx-auto">
        <div class="row bg-light">  
                    <h1 class="text text-primary">facebook</h1>
                    <h5 class='text'>Sharing and contacting with people around the world !</h5>
        </div>
        <div class="row col-4 bg-primary mt-3 rounded">
            <div class="row ">
                <div class="col-md-6">
                        <label for="input_first_name" class="form-label text-light">Frist Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                </div>
                <div class="col-md-6">
                        <label for="input_last_name" class="form-label text-light ">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="last Name" >
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                        <label for="input_password" class="form-label text-light ">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Your Password">
                </div>
            </div>
            <div class="row ">
                <div class="col-">
                    <a href="views/post_view.php" >
                        <button type="submit" class="btn btn-danger">Log In</button>
                    </a>
                </div>
            </div>
        </div>        
        <div class="row col-8 ">
            <div class="col-12">
                <img src="../images/login.png" class="img-fluid " alt="">
            </div>    
                
        </div>
    </div>        
</form>
 <?php
    require_once('templates/footer.php');
 ?>

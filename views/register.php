

<?php
//require_once ('../models/post.php');

?>
<form action="../controllers/register_controller.php" method="post">

    <div class=" row container mt-3 w-70 mx-auto">

        <div class="row bg-light">  
                    <h1 class="text text-primary">facebook</h1>
                    <h5 class='text'>Sharing and contacting with people around the world !</h5>
        </div>
        
        



        <div class="row col-4 bg-info mt-3 rounded">
            
            <div class="row ">
                <div class="col-md-6">
                        <label for="input_first_name" class="form-label text-light">Frist Name</label>
                        <input type="tex" class="form-control" name="first_name"  placeholder="First Name">
                </div>
                <div class="col-md-6">
                        <label for="input_last_name" class="form-label text-light ">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="last Name" >
                </div>
            </div>
            <div class="row ">
                <label for="" class="form-label text-light ">Gender</label>
                <div class="col-12 form-check">
                        <input class="gender" type="radio" name="gender"  value="M" >
                        <label class="form-check-label " for="radio_check">
                            Male
                        </label>
                </div>
                <div class="col-12 form-check">
                        <input class="geder" type="radio" name="gender" value="F" >
                        <label class="check-label " for="radio_check">
                            Female
                        </label>
                </div>
                
            </div>
            <div class="row ">
                <div class="col-12">
                        <label for="input_email" class="form-label text-light ">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Your email address">
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                        <label for="input_password" class="form-label text-light ">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Your Password">
                </div>
            </div>
                
            
 
            <div class="row">
                <div class="row text text-primary text-center mt-5">
                    <h5>Choose Your Information</h5>
                </div>
            
        
           
    
                <div class="row mt-5">
                    <div class="col-12">
                        <select  name= "job"  class="form-select form-select-lg mb-3" aria-label="select_job">
                            <option selected>select your job</option>
                            <option value="student">student</option>
                            <option value="teacher">teacher</option>
                            <option value="doctor">doctor</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <select  name= "education" class="form-select form-select-lg mb-3" aria-label="select_education">
                            <option selected>select your school</option>
                            <option value="pnc">PNC</option>
                            <option value="rupp">RUPP</option>
                            <option value="ITC">ITC</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <select  name= "location"  class="form-select form-select-lg mb-3" label="select_location">
                            <option selected>Select your location</option>
                            <option value="Phnom Penh">Phnom Penh</option>
                            <option value="Pursat">Pursat</option>
                            <option value="Battabang">Battambang</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <select  name= "relationship"  class="form-select form-select-lg mb-3" label="select_relationship">
                            <option selected>Select your relationship</option>
                            <option value="In open relationship">In open relationship</option>
                            <option value="Single Full">Single Full</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <select  name= "birth_place"  class="form-select form-select-lg mb-3" label="select_birth_place">
                            <option selected>Select your birth place</option>
                            <option value="Takoe">Takoe</option>
                            <option value="SiemReap">SiemReap</option>
                            <option value="PreyVeng">PreyVeng</option>
                        </select>
                    </div>
                    
                </div>

                <div class="row  ">
                    <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-warning"> Create</button>
                          
                    </div>
                    
                     
                </div>
            </div>
        
                
        </div>
        
        
        <div class="row col-8 ">
            <div class="col-12">
                <img src="../images/home.png" class="img-fluid " alt="">
            </div>    
                
        </div>


    </div>

    <?php
        //endforeach;
    ?>
        
</form>

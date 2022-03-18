<div class="container  ">
    <!-- Your code here -->
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                <div class="profile">
                        <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                        <button class="button"><a href="../index.php?pages=create_view" class = "text-secondary text-decoration-none">What's on your mind ?</a></button>
                </div>
                <hr>
                <div class="post-photo">
                    <div>
                        <i class="fas fa-photo-video fa-2x"  style="color:rgb(8, 236, 0)"></i>
                        <span>Photos/Video</span>
                    </div>
                </div>
            </div>
            <?php 
                    require_once("./models/post.php");
                    $users = getuser();
                    $posts = getPost();
                    foreach ($posts as $post ):                       
                    
                ?>
            <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                <div class="card-head">
                    <div class="profile p-2">
                            <img src="../uploads/<?= $post['image']; ?>" alt="profile" class="img-fluid rounded-circle"  id="New-profile"  width="8%">
                            <strong class="p-2 profile_name"><?= $users['first_name']; ?></strong>
                            <strong class=" profile_name"><?= $users['last_name']; ?></strong>
                            <hr>
                            <?php date_default_timezone_set('Asia/Phnom_Penh'); ?>
                            <span><?= $post['post_date']?></span>
                    </div>
                    <div class="dropdown">
                        <i class="fa fa-ellipsis-h" data-bs-toggle="dropdown">
                        </i>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit post</a></li>
                        <li><a href="../controllers/delete_controller.php?id=<?php echo $post['post_id'];?>" class="dropdown-item" >Delete post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="description">
                        <p><?= $post['Description']; ?></p>
                    </div>
                    <img src="../uploads/<?= $post['image']; ?>" alt="image" class="img-fluid"  >
                </div>
                <div class="like-comment d-flex justify-content-between">
                    <p class="like">125  likes</p>
                    <p class="comment">125 comments</p>
                </div>
                <div class="card-footer">
                    <div>
                        <a href="#"><i class="far fa-thumbs-up fa-2x focus"></i></a>
                        <span style="font-size: 20px;">Like</span>
                    </div>
                    <div>
                        <a href="../index.php?pages=comment_view"><i class="far fa-comment-alt fa-2x"></i></a>
                        <span style="font-size: 20px;">Comment</span>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>
            <div class="col-3">
            </div>
        </div>
    </div>

<?php
   require_once('./models/post.php');

?>
<form action="../controllers/create_controller.php" enctype="multipart/form-data" method="post">
    <div class="container container-create">
        <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                        <div class="card-head-create">
                            <div class="profile p-2">
                                    <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                                    <strong class="p-2 profile_name">Rady Y</strong>
                            </div>
                        <div class="card-body">
                        <p>What's somthing you want to comment on this post ?</p>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Add your comment here..." aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                                                        </div>
                        </div>
                        <div class="card-footer footer-post">
                            <button type="submit" name="post" class="btn btn-primary">Add comment</button>
                        </div>
                    </div>
                <div class="col-3">
                </div>
            </div>
        </div>
</form>
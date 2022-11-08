<?php
$tab_title = "Profile - Change your info";
?>
<?php require_once 'includes/header.php'; ?>

<!-- profile page content start -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Change Name</h5>

                    <?php if(isset($_SESSION['name_change_status'])): ?>
                        <br>
                    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Success!</span>
                            <span class="alert-text"><?= $_SESSION['name_change_status'] ?></span>
                        </div>
                    </div>
                    <?php endif; unset($_SESSION['name_change_status']); ?>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="POST">
                        <div class="example-container">
                            <div class="example-content">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?=$_SESSION['s_name']?>" name="name">
                            </div>
                            <div class="example-content">
                                <button type="submit" name="name_change" class="btn btn-success">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Profile Photo</h5>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                        <div class="example-container">
                            <div class="example-content text-center">
                                <img style="width: 200px; height: 250px;" src="./uploads/profile_photos/<?= $profile_photo_name?>" alt="">
                            </div>
                            <div class="example-content">
                                <!-- <img style="width: 100px; height: 100px;" src="./uploads/profile_photos/<?= $profile_photo_name?>" alt=""> -->
                                <label class="form-label">Your Profile Photo</label>
                                <input type="file" class="form-control" name="profile_photo">
                            </div>
                            <div class="example-content">
                                <button type="submit" name="photo_upload" class="btn btn-success">Update Profile Photo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Change Password</h5>
                </div>
                <div class="card-body">
                    <form action="profile_post.php" method="POST">
                        <div class="example-container">
                            <div class="example-content">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control" name="current_password">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="new_password">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                            <div class="example-content">
                                <button type="submit" name="change_password" class="btn btn-success">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- profile page content end -->
<?php require_once 'includes/footer.php'; ?>

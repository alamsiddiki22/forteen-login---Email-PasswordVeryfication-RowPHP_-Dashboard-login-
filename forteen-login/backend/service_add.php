<?php
$tab_title = "Profile - Change your info";
?>
<?php require_once 'includes/header.php'; ?>

<!-- profile page content start -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Service</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Service</h5>
                </div>
                <div class="card-body">
                    <form action="service_add_post.php" method="POST">
                        <div class="example-container">
                            <div class="example-content">
                                <label class="form-label">Service Name</label>
                                <input type="text" class="form-control" name="service_name">
                                <label class="form-label">Service Dessription</label>
                                <textarea name="service_description" class="form-control" rows="4"></textarea>
                                <label class="form-label">Service Icon</label>
                                <input type="text" class="form-control" name="service_icon">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>
                                </select>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-success">Add Service</button>
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

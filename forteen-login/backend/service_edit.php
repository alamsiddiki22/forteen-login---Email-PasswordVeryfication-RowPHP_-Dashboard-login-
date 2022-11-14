<?php
$tab_title = "Profile - Change your info";
?>
<?php require_once 'includes/header.php'; ?>

<!-- profile page content start -->
<div class="container">
    <div class="row">
        <?php
        $id = $_GET['id'];
        $select_query = "SELECT * FROM services WHERE id=$id";
        $service_from_db = mysqli_query($db_connect, $select_query);
        $service = mysqli_fetch_assoc($service_from_db);
        ?>
        <div class="col">
            <div class="page-description ">
                <h1>Edit Service <?= $service['service_name']?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Service</h5>
                </div>
                <div class="card-body">
                    <form action="service_edit_post.php" method="POST">
                        <div class="example-container">
                            <div class="example-content">
                                <input hidden type="text" value="<?= $id ?>" name="service_id">
                                <label class="form-label">Service Name</label>
                                <input type="text" class="form-control" name="service_name" value="<?= $service['service_name']?>">
                                <label class="form-label">Service Description</label>
                                <textarea name="service_description" class="form-control" rows="4"><?= $service['service_description']?></textarea>
                                <label class="form-label">Service Icon</label>
                                <i id="icon_viewer" class="<?= $service['service_icon']?>"></i>
                                <input readonly id="service_icon_input" type="text" class="form-control" name="service_icon" value="<?= $service['service_icon']?>">
                                <div class="card text-white mt-3">
                                    <div class="card-header">
                                        Choose Icom From Below List
                                    </div>
                                    <div class="card-body text-dark" style="overflow-y: scroll; height: 200px;">
                                        <?php
                                        require_once 'fonts.php';
                                        ?>
                                        <?php foreach($fontAwesomeIcons as $font) : ?>
                                        <span class="badge badge-primary m-1 icon_span" id="<?= $font ?>">
                                            <i class="fa-2x <?= $font ?>"></i>
                                        </span>
                                         <?php endforeach; ?>
                                    </div>
                                </div>
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option <?= ($service['status'] == 'active') ? 'selected':'' ?> value="active">Active</option>
                                    <option <?= ($service['status'] == 'deactive') ? 'selected':'' ?> value="deactive">Deactive</option>
                                </select>
                            </div>
                            <div class="example-content">
                                <button type="submit" class="btn btn-warning">Update Service</button>
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

<script>
    $(document).ready(function() {
        $('.icon_span').click(function() {
            // alert($(this).attr('id'));
            $('#service_icon_input').val($(this).attr('id'));
            $('#icon_viewer').removeClass();
            $('#icon_viewer').addClass($(this).attr('id'));
        });
    });
</script>

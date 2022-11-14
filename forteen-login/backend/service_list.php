<?php
$tab_title = "Profile - Change your info";
?>
<?php require_once 'includes/header.php'; ?>

<!-- profile page content start -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>List Service</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">List Service</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>SL NO</th>
                                <th>Service Name</th>
                                <th>Service Description</th>
                                <th>Service Icon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $services_query = "SELECT * FROM services";
                            $services_from_db = mysqli_query($db_connect, $services_query);
                            $serial = 1;
                            ?>
                            <?php foreach($services_from_db as $service) : ?>
                            <tr>
                                <td><?= $serial++ ?></td>
                                <td><?= $service['service_name'] ?></td>
                                <td><?= $service['service_description'] ?></td>
                                <td>
                                    
                                    <i class="<?= $service['service_icon'] ?>"></i>
                                </td>
                                <td>
                                    <?php if($service['status'] == 'active') : ?>
                                        <badge class="badge badge-success">Active</badge>
                                    <?php else : ?>
                                        <badge class="badge badge-danger">Deactive</badge>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger">Delete</a>
                                    <a href="service_edit.php?id=<?= $service['id'] ?>" class="btn btn-info">Edit</a>
                                    <!-- <button class="btn btn-warning">Change Status</button> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- profile page content end -->
<?php require_once 'includes/footer.php'; ?>

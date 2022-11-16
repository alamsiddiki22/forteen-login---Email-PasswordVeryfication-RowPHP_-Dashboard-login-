<?php
$tab_title = "Profile - Change your info";
?>
<?php require_once 'includes/header.php'; ?>

<!-- profile page content start -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="page-description">
                <h1>List Service</h1>
            </div>
        </div>
        <div class="col-6 text-end">
            <div class="page-description">
                <button type="button" class="btn btn-primary m-b-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    Undo
                </button>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Deleted Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th>Service Name</th>
                                        <th>Service Description</th>
                                        <th>Service Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $delete_services_query = "SELECT * FROM services WHERE delete_status = 'yes'";
                                    $delete_services_from_db = mysqli_query($db_connect, $delete_services_query);
                                    $serial = 1;
                                    ?>
                                    <?php foreach($delete_services_from_db as $delete_service):?>
                                    <tr class="">
                                        <td><?=$delete_service['service_name']?></td>
                                        <td><?=$delete_service['service_description']?></td>
                                        <td>
                                            <i class="<?=$delete_service['service_icon']?>"></i>
                                        </td>
                                        <td>
                                            <a href="service_restore.php?id=<?= $delete_service['id'] ?>" class="btn btn-success">Restore</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div> -->
                </div>
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
                            $services_query = "SELECT * FROM services WHERE delete_status = 'no'";
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
                                    <button value="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger delete_btn">Delete</button>
                                    <a href="service_edit.php?id=<?= $service['id'] ?>" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if($services_from_db->num_rows == 0): ?>
                            <tr class="text-center text-danger">
                                <td colspan="50">no data to show</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- profile page content end -->
<?php require_once 'includes/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('.delete_btn').click(function(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).val();
            }
            });
        });
       
    });
</script>

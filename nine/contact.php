<?php 
require_once"includes/header.php";
?>

<!-- body start -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Contact
                </div>
                <div class="card-body">
                    <form method="POST" action="message.php">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email_address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">message</label>
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- body end -->
<?php 
require_once"includes/footer.php"
?>

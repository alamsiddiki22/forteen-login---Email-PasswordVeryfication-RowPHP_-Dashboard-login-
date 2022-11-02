<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card mb-3">
                    <div class="card-header text-white bg-primary">
                        Header
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Number One</label>
                                <input type="number" class="form-control" placeholder="Number One" name="a">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number Two</label>
                                <input type="number" class="form-control" placeholder="Number Two" name="b">
                            </div>

                            <!-- <input type="number" placeholder="Number One" name="a">
                            <input type="number" placeholder="Number Two" name="b"> -->

                            <button class="btn btn-sn btn-success" value="true" name="add_btn" type="submit">Add (+)</button>
                            <button class="btn btn-sn btn-primary" value="true" name="sub_btn" type="submit">Sub (-)</button>
                            <button class="btn btn-sn btn-secondary" value="true" name="multi_btn" type="submit">multi (*)</button>
                            <button class="btn btn-sn btn-danger" value="true" name="divi_btn" type="submit">Divi (/)</button>
                        </form>
                        <?php if(isset($_POST['a']) && isset($_POST['b'])) : ?>
                        <div class="alert alert-success mt-3">
                            Result is: 
                            <?php
                                if($_POST['a']){
                                    if($_POST['b']){
                                        if(isset($_POST['add_btn'])){
                                            echo $_POST['a'] + $_POST['b'];
                                        }
                                        if(isset($_POST['sub_btn'])){
                                            echo $_POST['a'] - $_POST['b'];
                                        }
                                        if(isset($_POST['multi_btn'])){
                                            echo $_POST['a'] * $_POST['b'];
                                        }
                                        if(isset($_POST['divi_btn'])){
                                            echo $_POST['a'] / $_POST['b'];
                                        }
                                    }else{
                                        echo "b value nai";
                                    }
                                }else{
                                    echo "a value nai";
                                }
                                
                            ?>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
</body>
</html>


<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
    <style>
.footer{

  left: 0;
  bottom: 0;
  width: 100%;
  background-color:rgb(253, 253, 253);
  color:black;
  text-align: center;
}
</style>

    <title>Welcome</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php">TRAIN TRACKING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
      <form class="d-flex">
        <a class="btn btn-outline-danger" type="submit" href="logout.php">Log Out</a>
      </form>
    </div>
  </div>
</nav>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_KHURDA</h5>
          <p class="card-text">To track train towards KHURDA</p>
          <a href="to_khurda.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_KHURDA</h5>
          <p class="card-text">To track train from KHURDA</p>
          <a href="from_khurda.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_TATA</h5>
          <p class="card-text">To track train towards TATA</p>
          <a href="to_tata.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_TATA</h5>
          <p class="card-text">To track train from TATA</p>
          <a href="from_tata.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_ADRA</h5>
          <p class="card-text">To track train towards ADRA</p>
          <a href="to_adra.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_ADRA</h5>
          <p class="card-text">To track train from ADRA</p>
          <a href="from_adra.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_HOWRAH</h5>
          <p class="card-text">To track train towards HOWRAH</p>
          <a href="to_howrah.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_HOWRAH</h5>
          <p class="card-text">To track train from HOWRAH</p>
          <a href="from_howrah.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_SEALDAH</h5>
          <p class="card-text">To track train towards SEALDAH</p>
          <a href="to_sealdah.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_SEALDAH</h5>
          <p class="card-text">To track train from SEALDAH</p>
          <a href="from_sealdah.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">TO_HALDIA</h5>
          <p class="card-text">To track train towards HALDIA</p>
          <a href="to_haldia.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FROM_HALDIA</h5>
          <p class="card-text">To track train from HALDIA</p>
          <a href="from_haldia.php" class="btn btn-primary">TRACK IT</a>
        </div>
      </div>
    </div>
  </div>
</div>
    


<div class="footer">
  <p>© 2022 Copyright SARK</p>
</div>

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>
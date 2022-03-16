<?php  
$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "todolist";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `totata` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   if (isset( $_POST['snoEdit'])){
    $sno = $_POST["snoEdit"];
    $train = $_POST["trainEdit"];
    $to = $_POST["toEdit"];
    $dep = $_POST["depEdit"];
    $yard = $_POST["yardEdit"];
    $engineno = $_POST["enginenoEdit"];
    $inerchangetime = $_POST["inerchangetimeEdit"];

  //$sql = "UPDATE `todolist` SET `title` = '$title' , `description` = '$description' WHERE `todolist`.`sno` = $sno";
  //$sql = "UPDATE `todolist` SET `train` = 'Rajdhani', `to` = '18:30:00', `dep` = '6:30:00', `yard` = 'Sealdah', `engineno` = '331458', `inerchangetime` = '00:20:00' WHERE `todolist`.`sno` = 49;"
  $sql = "UPDATE `totata` SET `train` = '$train' , `to` = '$to' , `dep` = '$dep' , `yard` = '$yard' , `engineno` = '$engineno' , `inerchangetime` = '$inerchangetime' WHERE `totata`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
    if($result){
    $update = true;
}
    else{
    echo "We could not update the train record successfully";
}
}
   else{
    $train = $_POST["train"];
    $to = $_POST["to"];
    $dep = $_POST["dep"];
    $yard = $_POST["yard"];
    $engineno = $_POST["engineno"];
    $inerchangetime = $_POST["inerchangetime"];

  // Sql query to be executed
  $sql = "INSERT INTO `totata` ( `train`, `to`, `dep`, `yard`, `engineno`, `inerchangetime`) VALUES ('$train', '$to', '$dep', '$yard', '$engineno',  '$inerchangetime');";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The train record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <title>totata</title>

</head>

<body>


  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Update Your Trains</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="/logged_in/to_tata.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="train">TRAIN</label>
              <input type="text" class="form-control" id="trainEdit" name="trainEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="to">T/O</label>
              <input type="time" class="form-control" id="toEdit" name="toEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="dep">DEP</label>
              <input type="time" class="form-control" id="depEdit" name="depEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="yard">YARD</label>
              <input type="text" class="form-control" id="yardEdit" name="yardEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="engineno">ENGINE NO.</label>
              <input type="number" class="form-control" id="enginenoEdit" name="enginenoEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="inerchangetime">INERCHANGE TIME</label>
              <input type="text" class="form-control" id="inerchangetimeEdit" name="inerchangetimeEdit" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php">TRAIN TRACKING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
      <form class="d-flex">
        <a class="btn btn-outline-danger" type="submit" href="logout.php">Log Out</a>
      </form>
    </div>
  </div>
</nav>
  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <h2>Add Trains Here....To Tata Division</h2>
    <form action="/logged_in/to_tata.php" method="POST">
      <div class="form-group">
        <label for="train">TRAIN NAME</label>
        <input type="text" class="form-control" id="train" name="train" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="to">T/O</label>
        <input type="time" class="form-control" id="to" name="to" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="dep">DEP</label>
        <input type="time" class="form-control" id="dep" name="dep" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="yard">YARD</label>
        <input type="text" class="form-control" id="yard" name="yard" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="engineno">ENGINE NO.</label>
        <input type="number" class="form-control" id="engineno" name="engineno" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="inerchangetime">INERCHANGE TIME</label>
        <input type="text" class="form-control" id="inerchangetime" name="inerchangetime" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Add Train</button>
    </form>
  </div>

      

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">TRAIN</th>
          <th scope="col">T/O</th>
          <th scope="col">DEP</th>
          <th scope="col">YARD</th>
          <th scope="col">ENGINE NO.</th>
          <th scope="col">INERCHANGE TIME</th>
          <th scope="col">ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `totata`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['train'] . "</td>
            <td>". $row['to'] . "</td>
            <td>". $row['dep'] . "</td>
            <td>". $row['yard'] . "</td>
            <td>". $row['engineno'] . "</td>
            <td>". $row['inerchangetime'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-danger' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        train = tr.getElementsByTagName("td")[0].innerText;
        to = tr.getElementsByTagName("td")[1].innerText;
        dep = tr.getElementsByTagName("td")[2].innerText;
        yard = tr.getElementsByTagName("td")[3].innerText;
        engineno = tr.getElementsByTagName("td")[4].innerText;
        inerchangetime = tr.getElementsByTagName("td")[5].innerText;
        console.log(train, to, dep, yard, engineno, inerchangetime);
        trainEdit.value = train;
        toEdit.value = to;
        depEdit.value = dep;
        yardEdit.value = yard;
        enginenoEdit.value = engineno;
        inerchangetimeEdit.value = inerchangetime;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this!")) {
          console.log("yes");
          window.location = `/logged_in/to_tata.php?delete=${sno}`;
        
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>
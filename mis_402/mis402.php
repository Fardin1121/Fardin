

<?php
// connecting the database
$databasename = 'mis402';
$tablename = $databasename ;
$link = mysqli_connect('localhost','root','', $databasename);


// checking connection
if(!$link){
echo "Not Connected!";
}


// submit
if (isset($_REQUEST['submitbtn'])) {
// code...
$first_name = $_REQUEST['first_name'];
$middle_name = $_REQUEST['middle_name'];
$last_name = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];
$occupation = $_REQUEST['occupation'];
$nid_number = $_REQUEST['nid_number'];
$mobile_number = $_REQUEST['mobile_number'];
$email = $_REQUEST['email'];
$present_address = $_REQUEST['present_address'];
$permanent_address = $_REQUEST['permanent_address'];



// not empty
if (!empty($nid_number) && !empty($mobile_number) && !empty($email)) {
    // code...
    $query = "INSERT INTO $tablename(first_name,middle_name,last_name,gender,occupation,nid_number,mobile_number,email,present_address,permanent_address)
        VALUE ('$first_name','$middle_name','$last_name','$gender','$occupation','$nid_number','$mobile_number','$email','$present_address','$permanent_address')";

        
        $createquery = mysqli_query($link,$query);

        // connection check
        if ($createquery) {
        // code...
        echo "data inserted successfully!";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dhaka Metro Rail</title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid" >

      <a class="navbar-brand" href="#"><img src="./metro.jpg" alt="logo" style="height: 40px; padding: 5px;">Dhaka Metro Rail </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Registration</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About Us</a>
            </li>


          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="search_button">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <div class="bg-secondary bg-gradient">


    <div class="container-fluid mx-auto shadow m-5 p-1">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">

          <li class="breadcrumb-item btn btn btn-danger">Home</li>
          <li class="breadcrumb-item active  btn btn btn-warning" aria-current="page">Registration</li>
        </ol>

      </nav>
    </div>


    <div class="container">
  <div class="row">
      <h1 class="text-center  p-1 ">Dhaka Metro Rail</h1>

  </div>
</div>
</div>
  </header>






<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="./card.jpg"
              class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
              alt="Sample photo">
            <div class=" bg-success card-body p-4 p-md-5 ">
              <h3 class="fw-bold fs-1 text-decoration-underline text-danger text-center mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Form</h3>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class=" shadow m-3 p-3 bg-info">
                        <form class=" form-control justify-content-around" action="" method="post">
                          <input class="form-control" type="text" name="first_name" placeholder="First Name">
                          <input class="form-control" type="text" name="middle_name" placeholder="Middle Name">
                          <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                          <input class="form-control" type="text" name="gender" placeholder="Gender">
                          <input class="form-control" type="text" name="occupation" placeholder="Occupation">
                          <input class="form-control" type="text" name="nid_number" placeholder="Nid Number">
                          <input class="form-control" type="text" name="mobile_number" placeholder="Mobile Number">
                          <input class="form-control" type="text" name="email" placeholder="Email">
                          <input class="form-control" type="text" name="present_address" placeholder="Present Address">
                          <input class="form-control" type="text" name="permanent_address" placeholder="Permanent Address">
                          <input class="form-control btn btn-primary" type="submit" name="submitbtn" placeholder="Submit">
                        </form>
                      </div>


<?php 
/*
  <!-- Code for modify -->
<div class="d-flex shadow m-5 p-3 bg-info">
<form class="form-control d-flex justify-content-around" action="" method="post">
<?php
      if (isset($_REQUEST['modify'])) {
        // code...
        $id = $_REQUEST['modify'];
        $query = "SELECT * FROM $tablename WHERE id={$id}";
        $getdata = mysqli_query($link,$query);

        while ($rx=mysqli_fetch_assoc($getdata)) {
          // code...
          $id = $rx['id'];
          $first_name = $rx['first_name'];
          $middle_name = $rx['middle_name'];
          $last_name = $rx['last_name'];
          $gender = $rx['gender'];
          $occupation = $rx['occupation'];
          $nid_number = $rx['nid_number'];
          $mobile_number = $rx['mobile_number'];
          $email = $rx['email'];
          $present_address = $rx['present_address'];
          $present_address = $rx['present_address'];
          $permanent_address = $rx['permanent_address'];

          ?>

<!-- code for form -->
  <input class="form-control" type="text" name="id" placeholder="<?php echo "$id"; ?>" disabled>

  <input class="form-control" type="text" name="first_name" value="<?php echo "$first_name"; ?>">
  <input class="form-control" type="text" name="middle_name" value="<?php echo "$middle_name"; ?>">
  <input class="form-control" type="text" name="last_name" value="<?php echo "$last_name"; ?>">
  <input class="form-control" type="text" name="gender" value="<?php echo "$gender"; ?>">
  <input class="form-control" type="text" name="occupation" value="<?php echo "$occupation"; ?>">
  <input class="form-control" type="text" name="nid_number" value="<?php echo "$nid_number"; ?>">
  <input class="form-control" type="text" name="mobile_number" value="<?php echo "$mobile_number"; ?>">
  <input class="form-control" type="text" name="email" value="<?php echo "$email"; ?>">
  <input class="form-control" type="text" name="present_address" value="<?php echo "$present_address"; ?>">
  <input class="form-control" type="text" name="permanent_address" value="<?php echo "$permanent_address"; ?>">

  <input class="form-control btn btn-success" type="submit" name="updatebtn" value="update"> 

  <?php }} ?>
  */
  ?>

<?php


if (isset($_REQUEST['updatebtn'])) {
    
  // code...
  $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
  $middle_name = mysqli_real_escape_string($link, $_REQUEST['middle_name']);
  $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
  $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
  $occupation = mysqli_real_escape_string($link, $_REQUEST['occupation']);
  $nid_number = mysqli_real_escape_string($link, $_REQUEST['nid_number']);
  $mobile_number = mysqli_real_escape_string($link, $_REQUEST['mobile_number']);
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $present_address = mysqli_real_escape_string($link, $_REQUEST['present_address']);
  $permanent_address = mysqli_real_escape_string($link, $_REQUEST['permanent_address']);




  $query = "UPDATE $tablename SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name',gender='$gender', occupation='$occupation', nid_number='$nid_number',mobile_number='$mobile_number', email='$email',present_address='$present_address', permanent_address='$permanent_address' WHERE id={$id}";
  
  
  $updatequery = mysqli_query($link,$query);
  if ($updatequery) {
    // code...
    echo "Data for record no. $id updated.";
  }
}

?>


<div >
<div class="d-flex shadow m-3 p-3 w3-container">
      <table class="table table-striped table-hover table-bordered">
        <tr>
        <th>ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Occupation</th>
          <th>Nid Number</th>
          <th>Mobile Number</th>
          <th>Email</th>
          <th>Present Address</th>
          <th>Permanent Address</th>

        </tr>
<?php
/*
        <?php
        if (isset($_REQUEST['delete'])) {

           
          // code...
          $id = $_REQUEST['delete'];
          $query = "DELETE FROM $tablename WHERE id={$id}";
          $deletequery = mysqli_query($link,$query);
          if ($deletequery) {
            // code...
            echo "Record no. " .$id." deleted.";
          }
        }


        ?>
*/
?>
        <?php

        $query = "SELECT * FROM $tablename";
        $readquery = mysqli_query($link,$query);
        if ($readquery->num_rows > 0) {
          // code...
          while ($rd = mysqli_fetch_assoc($readquery)) {
            // code...
            $id = $rd['id'];
            $first_name = $rd['first_name'];
            $middle_name = $rd['middle_name'];
            $last_name = $rd['last_name'];
            $gender = $rd['gender'];
            $occupation = $rd['occupation'];
            $nid_number = $rd['nid_number'];
            $mobile_number = $rd['mobile_number'];
            $email = $rd['email'];
            $present_address = $rd['present_address'];
            $permanent_address = $rd['permanent_address'];
            ?>

            <tr>
              <td><?php echo "$id"; ?></td>
              <td><?php echo "$first_name"; ?></td>
              <td><?php echo "$middle_name"; ?></td>
              <td><?php echo "$last_name"; ?></td>
              <td><?php echo "$gender"; ?></td>
              <td><?php echo "$occupation"; ?></td>
              <td><?php echo "$nid_number"; ?></td>
              <td><?php echo "$mobile_number"; ?></td>
              <td><?php echo "$email"; ?></td>
              <td><?php echo "$present_address"; ?></td>
              <td><?php echo "$permanent_address"; ?></td>



          <?php }} ?>
</table>
</div>
</div>



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

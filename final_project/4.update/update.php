

<?php
// connection of the database
$databasename = 'cse102summer2022';
$tablename = $databasename ;
$link = mysqli_connect('localhost','root','', $databasename);

if(!$link){
echo "Not Connected!";
}



if (isset($_REQUEST['submitbtn'])) {
// code...
$student_id = $_REQUEST['student_id'];
$student_name = $_REQUEST['student_name'];
$cgpa = $_REQUEST['cgpa'];
$department = $_REQUEST['department'];
$midone = $_REQUEST['midone'];
$midtwo = $_REQUEST['midtwo'];
$final = $_REQUEST['final'];
$class_test = $_REQUEST['class_test'];
$class_participation = $_REQUEST['class_participation'];
$project = $_REQUEST['project'];

// sum of total
$total = $midone + $midtwo + $final + $class_test + $class_participation + $project;
// auto letter grade and grade point

$letter_grade = '';
$grade_point = '';
if($total >=97)
{
	$letter_grade = "Grade:A+";
  $grade_point = "CGPA 4.00";
}
else if($total >=90)
{
	$letter_grade = "Grade:A";
  $grade_point = "CGPA 4.00";
}
else if($total >=87)
{
	$letter_grade = "Grade:A-";
  $grade_point = "CGPA 3.7";
}
else if($total >=83)
{
	$letter_grade = "Grade:B+";
  $grade_point = "CGPA 3.3";
}
else if($total >=80)
{
	$letter_grade = "Grade:B";
  $grade_point = "CGPA 3.0";
}
else if($total >=77)
{
	$letter_grade = "Grade:B-";
  $grade_point = "CGPA 2.7";
}
else if($total>=73)
{
	$letter_grade = "Grade:C+" ;
  $grade_point = "CGPA 2.3";
}
else if($total>=70)
{
	$letter_grade = "Grade:C";
  $grade_point = "CGPA 2.00";
}
else if($total>=67)
{
	$letter_grade = "Grade:C-";
  $grade_point = "CGPA 1.7";
}
else if($total>=63)
{
	$letter_grade = "Grade:D+" ;
  $grade_point = "CGPA 1.3"; 
}

else if($total>=60)
{
	$letter_grade = "Grade:D" ;
  $grade_point = "CGPA 1.00";
}
else
{
	$letter_grade = "Garde: F" ;
  $grade_point = "CGPA 0.00";
}





// not empty
if (!empty($student_name) && !empty($cgpa) && !empty($department) && !empty($midone) && !empty($midtwo) && !empty($final) && !empty($class_test) && !empty($class_participation) && !empty($project)) {
    // code...
    $query = "INSERT INTO $tablename(student_id,student_name,cgpa,department,midone,midtwo,final,class_test,class_participation,project,total,letter_grade,grade_point)
        VALUE ('$student_id','$student_name','$cgpa','$department','$midone','$midtwo','$final','$class_test','$class_participation','$project','$total','$letter_grade','$grade_point')";

        
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
    <title>Update</title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid" >

        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/en/a/a5/East_West_University_Logo.jpg" alt="logo" style="height: 40px; padding: 5px;"> CSE102 </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Task_1.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Courses</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../results/results.php">Results</a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="search_button">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
<br>
<br>
<br>



  <div class="container-fluid mx-auto shadow">
    <div class="container-fluid mx-auto shadow m-5 p-1">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">

          <li class="breadcrumb-item btn btn btn-danger"><a href="../Task_1.html">Home</a></li>
          <li class="breadcrumb-item active  btn btn btn-warning" aria-current="page">Admin</li>
        </ol>

      </nav>
    </div>



<div class="d-flex shadow m-3 p-3 bg-info">
<form class="form-control d-flex justify-content-around" action="" method="post">
  <input class="form-control" type="text" name="student_id" placeholder="Student ID" pattern="[0-9][0-9][0-9][0-9]-[1-9]-[0-9][0-9]-[0-9][0-9][0-9]" title="Expeceted Pattern: 2019-2-10-214">
  <input class="form-control" type="text" name="student_name" placeholder="Student Name">
  <input class="form-control" type="text" name="cgpa" placeholder="CGPA">
  <input class="form-control" type="text" name="department" placeholder="Department">
  <input class="form-control" type="text" name="midone" placeholder="Mid One">
  <input class="form-control" type="text" name="midtwo" placeholder="Mid Two">
  <input class="form-control" type="text" name="final" placeholder="Final">
  <input class="form-control" type="text" name="class_test" placeholder="Class Test">
  <input class="form-control" type="text" name="class_participation" placeholder="Class Participation">
  <input class="form-control" type="text" name="project" placeholder="Project">
  <input class="form-control" type="text" name="total" placeholder="Total">
  <input class="form-control" type="text" name="letter_grade" placeholder="Letter Grade">
  <input class="form-control" type="text" name="grade_point" placeholder="Grade Point">
  <input class="form-control btn btn-primary" type="submit" name="submitbtn" placeholder="Submit">
</form>
</div>

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
          $student_id = $rx['student_id'];
          $student_name = $rx['student_name'];
          $cgpa = $rx['cgpa'];
          $department = $rx['department'];
          $midone = $rx['midone'];
          $midtwo = $rx['midtwo'];
          $final = $rx['final'];
          $class_test = $rx['class_test'];
          $class_participation = $rx['class_participation'];
          $project = $rx['project'];
          $total = $rx['total'];
          $letter_grade = $rx['letter_grade'];
          $grade_point = $rx['grade_point'];
          ?>

<!-- code for form -->
  <input class="form-control" type="text" name="id" placeholder="<?php echo "$id"; ?>" disabled>

  <input class="form-control" type="text" name="student_id" value="<?php echo "$student_id"; ?>">
  <input class="form-control" type="text" name="student_name" value="<?php echo "$student_name"; ?>">
  <input class="form-control" type="text" name="cgpa" value="<?php echo "$cgpa"; ?>">
  <input class="form-control" type="text" name="department" value="<?php echo "$department"; ?>">
  <input class="form-control" type="text" name="midone" value="<?php echo "$midone"; ?>">
  <input class="form-control" type="text" name="midtwo" value="<?php echo "$midtwo"; ?>">
  <input class="form-control" type="text" name="final" value="<?php echo "$final"; ?>">
  <input class="form-control" type="text" name="class_test" value="<?php echo "$class_test"; ?>">
  <input class="form-control" type="text" name="class_participation" value="<?php echo "$class_participation"; ?>">
  <input class="form-control" type="text" name="project" value="<?php echo "$project"; ?>">
  <input class="form-control" type="text" name="total" value="<?php echo "$total"; ?>">
  <input class="form-control" type="text" name="letter_grade" value="<?php echo "$letter_grade"; ?>">
  <input class="form-control" type="text" name="grade_point" value="<?php echo "$grade_point"; ?>">

  <input class="form-control btn btn-success" type="submit" name="updatebtn" value="update"> 

  <?php }} ?>

<?php


if (isset($_REQUEST['updatebtn'])) {
    
  // code...
  $student_id = mysqli_real_escape_string($link, $_REQUEST['student_id']);
  $student_name = mysqli_real_escape_string($link, $_REQUEST['student_name']);
  $cgpa = mysqli_real_escape_string($link, $_REQUEST['cgpa']);
  $department = mysqli_real_escape_string($link, $_REQUEST['department']);
  $midone = mysqli_real_escape_string($link, $_REQUEST['midone']);
  $midtwo = mysqli_real_escape_string($link, $_REQUEST['midtwo']);
  $final = mysqli_real_escape_string($link, $_REQUEST['final']);
  $class_test = mysqli_real_escape_string($link, $_REQUEST['class_test']);
  $class_participation = mysqli_real_escape_string($link, $_REQUEST['class_participation']);
  $project = mysqli_real_escape_string($link, $_REQUEST['project']);
  $total = mysqli_real_escape_string($link, $_REQUEST['total']);
  $letter_grade = mysqli_real_escape_string($link, $_REQUEST['letter_grade']);
  $grade_point = mysqli_real_escape_string($link, $_REQUEST['grade_point']);



  $query = "UPDATE $tablename SET student_id='$student_id', student_name='$student_name', cgpa='$cgpa', department='$department', midone='$midone', midtwo='$midtwo', final='$final', class_test='$class_test', class_participation='$class_participation', project='$project', total='$total', letter_grade='$letter_grade', grade_point='$grade_point' WHERE id={$id}";
  
  
  $updatequery = mysqli_query($link,$query);
  if ($updatequery) {
    // code...
    echo "Data for record no. $id updated.";
  }
}


?>

</form>
</div>

<div class="d-flex shadow m-3 p-3">
      <table class="table table-striped table-hover table-bordered">
        <tr>
        <th>ID</th>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>CGPA</th>
          <th>Department</th>
          <th>Mid One</th>
          <th>Mid Two</th>
          <th>Final</th>
          <th>Class Test</th>
          <th>Class Participation</th>
          <th>Project</th>
          <th>Total</th>
          <th>Letter Grade</th>
          <th>Grade Point</th>
          <th class="w3-container">
          <p style="text-align: center"><i class="fa fa-spinner w3-spin" style="font-size:40px"></i></p>
          </th>
          <th class="w3-container">
            <p style="text-align: center"><i class="fa fa-spinner w3-spin" style="font-size:40px"></i></p> 
          </th>
        </tr>

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

        <?php

        $query = "SELECT * FROM $tablename";
        $readquery = mysqli_query($link,$query);
        if ($readquery->num_rows > 0) {
          // code...
          while ($rd = mysqli_fetch_assoc($readquery)) {
            // code...
            $id = $rd['id'];
            $student_id = $rd['student_id'];
            $student_name = $rd['student_name'];
            $cgpa = $rd['cgpa'];
            $department = $rd['department'];
            $midone = $rd['midone'];
            $midtwo = $rd['midtwo'];
            $final = $rd['final'];
            $class_test = $rd['class_test'];
            $class_participation = $rd['class_participation'];
            $project = $rd['project'];
            $total = $rd['total'];
            $letter_grade = $rd['letter_grade'];
            $grade_point = $rd['grade_point'];
            ?>

            <tr>
              <td><?php echo "$id"; ?></td>
              <td><?php echo "$student_id"; ?></td>
              <td><?php echo "$student_name"; ?></td>
              <td><?php echo "$cgpa"; ?></td>
              <td><?php echo "$department"; ?></td>
              <td><?php echo "$midone"; ?></td>
              <td><?php echo "$midtwo"; ?></td>
              <td><?php echo "$final"; ?></td>
              <td><?php echo "$class_test"; ?></td>
              <td><?php echo "$class_participation"; ?></td>
              <td><?php echo "$project"; ?></td>
              <td><?php echo "$total"; ?></td>
              <td><?php echo "$letter_grade"; ?></td>
              <td><?php echo "$grade_point"; ?></td>

              <td>
                <a href="update.php?modify=<?php echo "$id"; ?>" class="btn btn-info">MODIFY</a>
              </td>
              <td>
                <a href="update.php?delete=<?php echo "$id"; ?>" class="btn btn-danger">DELETE</a>
              </td>
            </tr>

          <?php }} ?>
</table>
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
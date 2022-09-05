<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cse102summer2022';
$tablename = 'cse102summer2022';

$link = mysqli_connect($hostname,$username,$password,$dbname);

if (isset($_REQUEST['show'])) {
  $id = $_REQUEST['show'];
  $query = "SELECT * FROM $tablename WHERE id = {$id}
  ";
} else {
  $query = "SELECT * FROM $tablename LIMIT 1
  ";
}

$rx=mysqli_fetch_assoc(mysqli_query($link,$query));

if (!empty($rx)) {
  $id = $rx['id'];
  echo "Information for ID $id";
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

  $previous_page = $id -1;
  $next_page = $id +1;

} else {

  $student_id = 'no data';
  $student_name = 'no data';
  $cgpa = 'no data';
  $department = 'no data';
  $midone = 'no data';
  $midtwo = 'no data';
  $final = 'no data';
  $class_test = 'no data';
  $class_participation = 'no data';
  $project = 'no data';
  $total = 'no data';
  $letter_grade = 'no data';
  $grade_point = 'no data';

  $previous_page = $id -1;
  $next_page = $id +1;



}


?>







<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Carousel Template · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="carousel.css">
  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .carousel .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
  }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">

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
              <a class="nav-link active" aria-current="page" href="../4.update/update.php">Admin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="results.php">Results</a>
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


  <div class="container-fluid mx-auto shadow m-2 p-2">
    <div class="container-fluid mx-auto shadow m-1 p-2">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item btn btn btn-warning"><a href="index.htm">Home</a></li>
          <li class="breadcrumb-item active  btn btn btn-warning" aria-current="page">Results</li>
        </ol>

      </nav>
    </div>

    <main>
      <div class="container-fluid mx-auto shadow m-1 p-2">
        <div class="d-flex justify-content-between">
          <div class="p-2 bd-highlight">
            <a class="btn btn-primary" href="results.php?show=<?php echo "$previous_page"; ?>">Previous</a>
          </div>
          <div class="p-2 bd-highlight">

            <!-- Example single danger button -->
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                SHOW
              </button>
              <ul class="dropdown-menu">
                <tr>
                 <td><a class="dropdown-item" href="results.php?show=<?php echo "$next_page"; ?>">ID</a></td> 
                 <td><?php echo "$id"; ?></td>
                </tr>
              <li><a class="dropdown-item" href="results.php?show=<?php echo "$next_page"; ?>">ID</a>
                <?php echo "$id"; ?>
              </li>
                  <tr>
                    <th scope="row">ID- </th>
                    <td><?php echo "$id"; ?></td>
                  </tr>                
                  <tr>
                    <th scope="row">ID- </th>
                    <td><?php echo "$id"; ?></td>
                  </tr>
                  <tr>
                  <th scope="row">ID- </th>
                    <td><?php echo "$id"; ?></td>
                  </tr>
                  <tr>
                  <th scope="row">ID- </th>
                    <td><?php echo "$id"; ?></td>
                  </tr>
                  <tr>
                  <th scope="row">ID- </th>
                    <td><?php echo "$id"; ?></td>
                  </tr>
              </ul>
            </div>

          </div>
          <div class="p-2 bd-highlight">
            <a class="btn btn-primary" href="results.php?show=<?php echo "$next_page"; ?>">Next</a>
          </div>

        </div>



        <div class="row d-flex justify-content-around">
          <div class="col-4">

            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover table-lg">
                <thead>
                  <tr>
                    <th>ID</th>
                    <td><?php echo "$id"; ?></td>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <th scope="row">Student ID</th>
                    <td><?php echo "$student_id"; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Student Name</th>
                    <td><?php echo "$student_name"; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Cgpa</th>
                    <td><?php echo "$cgpa"; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Department</th>
                    <td><?php echo "$department"; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th  colspan="6" style="text-align: center;"colspan>ID- <?php echo "$id"; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mid One</th>
                    <td><?php echo "$midone"; ?></td>
                    <th scope="row">class_participation</th>
                    <td><?php echo "$class_participation"; ?></td>
                    <th scope="row">total</th>
                    <td><?php echo "$total"; ?></td>

                  </tr>
                  <tr>
                    <th scope="row">Mid Two</th>
                    <td><?php echo "$midtwo"; ?></td>
                    <th scope="row">class_test</th>
                    <td><?php echo "$class_test"; ?></td>
                    <th scope="row">letter_grade</th>
                    <td><?php echo "$letter_grade"; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">final</th>
                    <td><?php echo "$final"; ?></td>
                    <th scope="row">project</th>
                    <td><?php echo "$project"; ?></td>
                    <th scope="row">grade_point</th>
                    <td><?php echo "$grade_point"; ?></td>
                  </tr>
                  <tr>

                  </tr>


                </tbody>

              </table>


            </div>
          </div>
        </div>
      </div>
    </main>


<?php

$query = "SELECT * from $tablename";
$readquery=mysqli_query($link,$query);

// $query = "SELECT * from $tablename";
// $readquery=mysqli_query($link,$query);
$last_page = $readquery->num_rows ;

?>

    <foot>
      <div class="container-fluid mx-auto shadow m-2 p-2">
        <div class="row d-flex justify-content-center">
          <div class="col-4">

            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item <?php if ($id <= 1) {echo "disabled";} ?>">
                  <a class="page-link" href="results.php?show=<?php echo "$previous_page"; ?>">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link"><?php echo "$id "; ?></span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item <?php if ($id >= $last_page) {echo "disabled";} ?>">
                  <a class="page-link" href="results.php?show=<?php echo "$next_page"; ?>">Next</a>
                </li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </foot>

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
<?php
include_once 'database\db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arden University</title>

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/css/mdb.min.css"><style></style></head>

<!-- Grid row --><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/js/jquery.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/js/popper.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/js/bootstrap.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.0/js/mdb.min.js"></script><script></script>
<style>
    .collapse{
      color:#fff;
    }
    .md-accordion .card .fa-angle-down {
    float: right;
    color: #000;
    }
    .container{
      background-color: #E5DDE6 !important;
    }
    h3{
      color:#003a5d;
      }
      h5{
        color:#000;
      }

</style>

</head>
  <body>
    <div class="container-fluid">
    	  <img style="width:100%" src="images\imagearder.png" alt="">
    </div>


    <div class="container my-4">

      <h3 class="font-weight-bold">Enquiries</h3>

      <!--Accordion wrapper-->
  <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
          aria-controls="collapseOne1">
          <h5 class="mb-0">
            <strong>Enquiry one</strong> <i class="fas fa-angle-down rotate-icon"></i>
            <div class="table-responsive">
              <table id ="student_data" class="table table-striped table-bordered">

                <?php
                $sql = "SELECT * FROM enquiries;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                  while ($row = mysqli_fetch_assoc($result)){
                    echo'
                    <tr>
                      <td'.$row["first_name"].'</td>
                      <td>'.$row["last_name"].'</td>
                      <td>'.$row["email"].'</td>
                      <td>'.$row["comment"].'</td>
                      <td>'.$row["datetime"].'</td>
                    </tr>
                    ';
                  }
                }
                ?>
              </table>
            </div>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
        data-parent="#accordionEx">
        <div class="card-body">
          <strong>Enquiry two</strong>
        </div>
      </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingTwo2">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
          aria-expanded="false" aria-controls="collapseTwo2">
          <h5 class="mb-0">
            <strong>Enquiry 3</strong>  <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
        data-parent="#accordionEx">
        <div class="card-body">
        <p>sdadddddddddd</p>
        </div>
      </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingThree3">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
          aria-expanded="false" aria-controls="collapseThree3">
          <h5 class="mb-0">
            <strong>Enquiry 3</strong> <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
        data-parent="#accordionEx">
        <div class="card-body">
          <p>adjiasndnasd</p>
        </div>
      </div>

    </div>
    <!-- Accordion card -->

  </div>
  <!-- Accordion wrapper -->

</div>





  </body>
</html>

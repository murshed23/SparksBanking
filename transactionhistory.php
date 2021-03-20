<?php
  session_start();

  include 'config.php';

  $id=$_SESSION['user'];

  $sql ="select * from transaction where id=$id";

  $query =mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
  <title>Sparks Bank</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
  </head>
  <body>
  <!-- Navbar -->
  <div class="container-fluid bg-purple shadow-sm">
        <div class="container pb-2 pt-2">
            <div class="">
              <a href="index.php">
            <img src="img/logo.png" alt="logo" style="width:40px;"><span class="text-white h4 pl-2">Spark Bank</span>
              </a>
            </div>
        </div>
  </div>

  <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="userdetails.php" class="btn btn-primary">
                    Back to User List
                </a>
            </div>
        </div>
    </div>

<!-- Table -->
<div class="container mt-4 h4 text-center">Transanction List</div>
  <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-purple text-white">
                        <div class="card-header-title">Previous and Current Transacions of the user</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="studentList">
                        <tbody class="text-center">
                          <tr>
                <th>Transanction No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
<?php

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr>
            <td><?php echo $rows['sno']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['balance']; ?> </td>
            <td><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
                  </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Footer -->
     <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Murshed Ahmed 2021</p>
        </div>
      </div>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

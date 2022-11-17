<?php

require('handel/connection.php');

$sql = "SELECT * FROM admins";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {

  $admins = mysqli_fetch_all($query, MYSQLI_ASSOC);
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techstore | Dashboard</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TechStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admins.php">Admins</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Your name
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid py-5">
    <div class="row">

      <div class="col-md-10 offset-md-1">

        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>All Admins</h3>
        </div>

        <a href="add-admin.php" class="btn btn-secondary float-right mb-3">New Admin</a>
        
        <table class="table table-hover my-5">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th>Status</th>
              <th>Type</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($admins)){
            foreach ($admins as $admin) { ?>
              <tr>
                <th scope="row"><?php echo $admin['id'];?></th>
                <td><?php echo $admin['name'] ?></td>
                <td><?php echo $admin['email']; ?></td>
                <td><?php echo $admin['status']; ?></td>
                <td><?php echo $admin['type']; ?></td>
                <td>
                  <a class="btn btn-sm btn-info" href="#">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a class="btn btn-sm btn-danger" href="#">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php  }
}else { ?>
            <tr>
              <td colspan="6" style="text-align:center"> No Admin Data </td>
            </tr>  
<?php }
            ?>

          </tbody>
        </table>
      </div>

    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
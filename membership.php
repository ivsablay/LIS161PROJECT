<?php include 'database.php'; 
  
  //secure homepage
  if (!isset($_SESSION['username'])) {
    $_SESSION['warning'] = "You need to log-in to access this page";
    //redirect user
    header("location: login php");// if you have multiple pages that is accessible to only users, you have to put this on all pages
  }


  //check  if  edit button is clicked
  if (isset($_GET['edit'])){
    $id = $_GET['edit']; // assign edit value  to  $id

    //prepare query
    $query = "SELECT * FROM members WHERE id=$id";
    //perform query
    $edit_record = mysqli_query($con,$query);
    //convert record into an array
    $edit_array =  mysqli_fetch_array($edit_record);

    //assign values
    $first_name  = $edit_array['first_name'];
    $last_name  = $edit_array['last_name'];
    $gender  = $edit_array['gender'];
    $email  = $edit_array['email'];
    $date_of_birth = $edit_array ['date_of_birth'];
    $country  = $edit_array['country'];

    //Set edit state to true
    $edit_state = true;
  } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Junior</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="css/creative.min.css" rel="stylesheet">
   <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>


<body>
<div class="container"> 


  <!-- alert message -->
  <?php if (isset($_SESSION['message'])) { ?>
    <div class ="alert alert-success">
    <?php
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
      ?>
    </div>
  <?php } ?>

<!-- alert message -->
  <?php if (isset($_SESSION['success'])) { ?>
    <div class ="alert alert-success">
    <?php
      echo $_SESSION['success'];
      unset ($_SESSION['success']);
      ?>
    </div>
  <?php } ?>

<!--dashboard-->
<div class ="well">
  <?php if (isset($_SESSION['username'])) { ?>
    <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index.php" class="btn btn-warning"> Back </a></p>
  <?php } ?>
</div>




  <!-- Form -->
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Add Membership Information<p></h2>
      <form  method = "POST" action = "database.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value= "<?php echo $id; ?>">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="John" value= "<?php echo $first_name; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Doe" value= "<?php echo $last_name; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" required>
            <option <?php if(!isset($gender)) echo "selected"; ?> >Choose...</option>
            <option value="M" <?php if($gender=='M') echo "selected"; ?> >Male</option>
            <option value="F" <?php if($gender=='F') echo "selected"; ?> >Female</option>
            <option value="U" <?php if($gender=='U') echo "selected"; ?> >Undisclosed</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="kuroo@gmail.com" value= "<?php echo $email; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value= "<?php echo $date_of_birth; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" value= "<?php echo $country; ?>" required>
          </div>
        </div>
        <?php if($edit_state) { ?>
            <button type="submit" class="btn btn-primary" name="update">Update</button><a class="btn btn-warning" href="membership.php">Cancel</a>
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <?php } ?>


      </form>
  </div>
  <!-- End of Form -->

  <!-- Display of Data in a Table Format -->
  <div class="well">
    <p><h2>View Members' Information</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">Email</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Country</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

       <?php  $i=  0;
       while ($row = mysqli_fetch_array($member)) {
        ?>
       
        <tr>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $row['first_name'].' '.$row['last_name'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['date_of_birth'];?></td>
          <td><?php echo $row['country'];?></td>
          <td><a class="btn btn-warning" href="membership.php?edit=<?php echo $row['id']; ?>">Edit</a>
              <a class="btn btn-danger" href="database.php?del=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>



      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
    
</div>
</body>
</html>
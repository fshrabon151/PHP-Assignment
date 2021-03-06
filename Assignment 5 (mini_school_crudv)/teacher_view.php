<?php
include_once "autoload.php";

/**
 * Student Data Delete
 */
if (isset($_GET['trash_id'])) {
     $trash_id = $_GET['trash_id'];
     update("UPDATE teachers SET trash='true' WHERE id='$trash_id'");
     header("location:teacher_view.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Student CRUDV</title>

     <!-- Favicon  -->
     <link rel="icon" href="assets/img/favicon-16x16.png">


     <!-- FontAwesome CSS  -->
     <link rel="stylesheet" href="assets/fonts/fontAwesome/css/all.min.css">



     <!-- Bootstrap CSS  -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">


     <!-- Main CSS   -->
     <link rel="stylesheet" href="assets/css/style.css">

     <!-- Responsive CSS     -->
     <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

     <div id="wrapper" class="menuDisplayed">
           <!-- sidebar  -->
        <div id="sidebar-wrapper">

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Students CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="student_view.php"><i class="fas fa-user-graduate"></i> All Student</a></li>
    <li><a href="student_add.php"><i class="fas fa-user-plus"></i> Add Student</a></li>
    <li><a href="student_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
</ul>

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Teachers CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="teacher_view.php"><i class="fas fa-user-graduate"></i> All Teachers</a></li>
    <li><a href="teacher_add.php"><i class="fas fa-user-plus"></i> Add Teachers</a></li>
    <li><a href="teacher_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
</ul>

<div class="logo">
    <i class="fas fa-user-graduate"></i>
    <span>Staffs CRUDV Application</span>
</div>
<ul class="sidebar-nav">
    <li><a href="staff_view.php"><i class="fas fa-user-graduate"></i> All Staffs</a></li>
    <li><a href="staff_add.php"><i class="fas fa-user-plus"></i> Add Staff</a></li>
    <li><a href="staff_trash.php"><i class="far fa-trash-alt"></i> Trash</a></li>
    <li><a href="index.php">Logout</a></li>

</ul>
</div>
          <!-- Page content  -->
          <div id="page-content-wrapper">
               <div class="container-fluid">

                    <div class="row">
                         <div class="col-lg-12">
                              <p class="page-title bg-info"><a href="#" class="btn btn-success" id="menu-toggle"><i class="fas fa-bars"></i></a> <span class="span-title"> <i class="fas fa-user-plus"></i></i> All Teachers</span></p>

                              <form class="form-inline float-right" action="" method="POST">
                                   <div class="form-group mx-sm-3 mb-2">
                                        <label for="search_1" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="search" id="search_1" placeholder="Search..">
                                   </div>
                                   <button type="submit" name="search-btn" class="btn btn-info mb-2">Search</button>
                              </form>
                              <table class="table table-striped">
                                   <thead>
                                        <tr>
                                             <th scope="col">SL</th>
                                             <th scope="col">Name</th>
                                             <th scope="col">Email</th>
                                             <th scope="col">Phone Number</th>
                                             <th scope="col">Photo</th>
                                             <th scope="col">Operation</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php

                                        $data = allOutTrash('teachers');

                                        //Search function start
                                        if (isset($_POST['search-btn'])) {
                                             $search = $_POST['search'];
                                             $data = search('teachers', 'name', $search);
                                        }
                                        //Search function end

                                        $i = 1;
                                        while ($teacher = $data->fetch_object()) :
                                        ?>
                                             <tr class="pt-2">
                                                  <th scope="row"><?php echo $i;
                                                                      $i++; ?></th>
                                                  <td><?php echo $teacher->name ?></td>
                                                  <td><?php echo $teacher->email ?></td>
                                                  <td><?php echo $teacher->cell ?></td>
                                                  <td><img src="photos/<?php echo $teacher->photo ?>" width="80" height="80" alt=""></td>
                                                  <td>
                                                       <a class="btn btn-sm btn-info" href="teacher_show.php?show_id=<?php echo $teacher->id ?>">View</a>
                                                       <a class="btn btn-sm btn-warning" href="teacher_edit.php?edit_id=<?php echo $teacher->id ?>">Edit</a>
                                                       <a class="btn btn-sm btn-danger delete_btn" href="?trash_id=<?php echo $teacher->id ?>&photo=<?php echo $teacher->photo ?>">Trash</a>
                                                  </td>
                                             </tr>

                                        <?php endwhile; ?>
                                   </tbody>
                              </table>
                         </div>

                    </div>
               </div>

          </div>
     </div>



     <!-- JS FILES  -->
     <script src="assets/js/jquery-3.4.1.min.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/custom.js"></script>

     <script>
          $("#menu-toggle").click(function(e) {

               e.preventDefault();
               $("#wrapper").toggleClass("menuDisplayed");

          });

          $('.delete_btn').click(function() {
               let confirmation = confirm('Are you sure ?');

               if (confirmation == true) {
                    return true;
               } else {
                    return false;
               }

          });
     </script>
</body>

</html>
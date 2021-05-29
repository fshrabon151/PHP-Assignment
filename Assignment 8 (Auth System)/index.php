<?php
include_once 'templates/header.php';
include "autoload.php";

/**
 * Checking cookie has any value or not
 */
if (isset($_COOKIE['user_logged_in_id'])) {

    $id = $_COOKIE['user_logged_in_id'];

    $_SESSION['login_user_id'] = $id;
    $_SESSION['login_status'] = true;
    header('location:profile.php');
}

if (isset($_GET['r_user'])) {

    $id = $_GET['r_user'];

    $_SESSION['login_user_id'] = $id;
    $_SESSION['login_status'] = true;
    header('location:profile.php');
}

/**
 * Check user login status
 */

if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == true) {
    header('location:profile.php');
}




if (isset($_POST['loginform'])) {

    $access = $_POST['access'];
    $password = $_POST['password'];

    $login_data = connect()->query("SELECT * FROM users WHERE email='$access' || username='$access' || cell = '$access'");

    $login_user_data = $login_data->fetch_object();

    if (empty($access) || empty($password)) {
        $msg = validate('All fields required!');
    } else {
        if ($login_data->num_rows == 1) {
            if (password_verify($password, $login_user_data->password)  || md5($password) == $login_user_data->password) {

                $_SESSION['login_user_id'] = $login_user_data->id;
                $_SESSION['login_status'] = true;

                setcookie('user_logged_in_id', $login_user_data->id, time() + (60 * 60 * 24 * 7));

                header('location:profile.php');
            } else {
                $msg = validate("Incorrect password!");
            }
        } else {
            $msg = validate('No user found');
        }
    }
} //end of isset if





?>


<div class="wrap shadow">

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Log In Here</h2>
            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>
            <hr>
            <form id="login_user" autocomplete="off" action="" method="POST" enctype="multipart/form-data">


                <div class="form-group">
                    <label for="">Email / Username / Cell</label>
                    <input type="text" name="access" class="form-control">
                </div>




                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>



                <div class="form-group">
                    <input type="submit" name="loginform" class="btn btn-primary" value="Login">
                </div>

            </form>
        </div>
        <div class="card-footer">
            <a href="register.php">Create an account</a>
        </div>
    </div>

    <div class="row p-1">

        <?php
        if (isset($_COOKIE['recent_logged_in_users'])) {
            
            $recent_user_data =  json_decode($_COOKIE['recent_logged_in_users']);

            $user_id = implode(',', $recent_user_data);

            $data = connect()->query("SELECT * FROM users WHERE id IN ($user_id)");

            while ($user_data = $data->fetch_object()) :

        ?>
                <div class="col-md-4 my-3">
                    <a href="?r_user=<?php echo $user_data->id ?>">

                        <div class="card">

                            <div class="card-body" style="padding: 3px;">
                                <img style="width:100%; height:120px;" src="photos/users/<?php echo $user_data->photo ?>" alt="">
                            </div>
                            <div class="card-footer">
                                <h6 class="text-center"><?php echo $user_data->name ?></h6>
                            </div>
                        </div>
                    </a>
                </div>

        <?php endwhile;
        }
        ?>



    </div>
</div>

<?php include_once 'templates/footer.php' ?>
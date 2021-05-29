<?php
include_once 'templates/header.php';
include_once 'autoload.php';

/**
 * Get login user data
 */

$user_id = $_SESSION['login_user_id'];

$login_user_data = connect()->query("SELECT * FROM users WHERE id='$user_id'");
$login_user = $login_user_data->fetch_object();

/**
 * Logout process
 */

if (isset($_GET['logout']) and $_GET['logout'] == 'user_logout') {

    if (isset($_COOKIE['recent_logged_in_users'])) {
        $old_data = json_decode($_COOKIE['recent_logged_in_users']);
        array_push($old_data, $login_user->id);
        $logout_json = json_encode($old_data);
    } else {
        $logout_data[] = $login_user->id;
        $logout_json = json_encode($logout_data);
    }

    setcookie('recent_logged_in_users',  $logout_json, time() + (60 * 60 * 24 * 7));

    session_destroy();
    setcookie('user_logged_in_id', $login_user->id, time() - (60 * 60 * 24 * 7));


    header('location:index.php');
}

/**
 * Check user login status
 */

if (!isset($_SESSION['login_status'])) {
    header('location:index.php');
}



?>

<div class="wrap">
    <div class="card">
        <img style="border-radius: 100%;" src="photos/users/<?php echo $login_user->photo ?>" width="200" height="200" class="mx-auto my-4 shadow border" alt="">
        <div class="card-body">
            <h2 class="text-center"><?php echo $login_user->name ?></h2>
            <h5 class="text-center">(<span><?php echo $login_user->username ?></span>)</h5>

            <table class="table">

                <tr>
                    <td>Email</td>
                    <td><?php echo $login_user->email ?></td>
                </tr>

                <tr>
                    <td>Cell</td>
                    <td><?php echo $login_user->cell ?></td>
                </tr>

            </table>
        </div>

        <div class="card-footer">
            <a href="?logout=user_logout">Logout</a>
        </div>

    </div>
</div>


<?php include_once 'templates/footer.php'; ?>
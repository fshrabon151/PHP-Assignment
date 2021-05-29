<?php include_once 'templates/header.php' ?>


<div class="wrap shadow">

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Register Now</h2>
            <div class="msg"></div>
            <hr>
            <form id="reg_user" autocomplete="off" action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input id="reg_email" type="email" name="email" class="form-control">
                    <span style="color:red;" id="reg_email_notice"></span>
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input id="reg_username" type="text" name="username" class="form-control">
                    <span style="color:red;" id="reg_username_notice"></span>

                </div>

                <div class="form-group">
                    <label for="">Cell</label>
                    <input id="reg_cell" type="text" name="cell" class="form-control">
                    <span style="color:red;" id="reg_cell_notice"></span>

                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input id="reg_password" type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <div class="form-group">
                    <input id="submit_data" class="btn btn-primary submit_data_email submit_data_username submit_data_cell" type="submit" value="Register">
                </div>

            </form>
        </div>
        <div class="card-footer">
            <a href="index.php">Login Now</a>
        </div>
    </div>
</div>



<?php include_once 'templates/footer.php' ?>
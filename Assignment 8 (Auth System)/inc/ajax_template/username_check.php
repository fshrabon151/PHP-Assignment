<?php

include "../../autoload.php";

$username = $_POST['username'];

userCheck('users', 'username', $username, $username);

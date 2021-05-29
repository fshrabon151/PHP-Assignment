<?php

include "../../autoload.php";

$cell = $_POST['cell'];

userCheck('users', 'cell', $cell, $cell);

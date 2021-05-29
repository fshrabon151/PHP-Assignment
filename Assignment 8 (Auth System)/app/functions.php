<?php

/**
 * Data create by create 
 */
function create($sql)
{
  connect()->query($sql);
}


/**
 * Data create by create 
 */
function all($table, $order = 'DESC')
{
  return connect()->query("SELECT * FROM $table ORDER BY id $order");
}



/**
 * Data create by create 
 */
function find($table, $id)
{
  $data = connect()->query("SELECT * FROM $table WHERE id='$id'");
  return $data->fetch_object();
}



/**
 * Data create by create 
 */
function delete($table, $id)
{
  connect()->query("DELETE FROM $table WHERE id='$id'");
}


/**
 * Data create by create 
 */
function update($sql)
{
  connect()->query($sql);
}


/**
 * Data check function
 */
function dataCheck($table, $column, $data)
{
  $data = connect()->query("SELECT $column FROM $table WHERE $column='$data' || $column LIKE '%$data%'  ");

  if ($data->num_rows > 0) {
    return true;
  } else {
    return false;
  }
}




/**
 * Validate function for error message 
 */
function validate($msg, $type = 'danger')
{
  return "<p class=\" alert alert-$type \"> $msg ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
}


/**
 * file upload function
 */
function move($file, $location = '/', array $type = ['jpg', 'png', 'gif', 'jpeg'])
{
  // file management 
  $file_name = $file['name'];
  $file_name_tmp = $file['tmp_name'];
  $file_arr = explode('.', $file_name);
  $file_ext = end($file_arr);
  $unique_name = md5(time() . rand()) . '.' . $file_ext;


  $msg = '';
  if (in_array($file_ext, $type) == false) {
    $msg = validate('Invalid file format');
  } else {
    // Upload file 
    move_uploaded_file($file_name_tmp, $location . $unique_name);
  }


  return [
    'unique_name'   => $unique_name,
    'err_msg'       => $msg
  ];
}


/**
 * Old function for datra recover
 */

function old($name)
{
  if (isset($_POST[$name])) {
    echo $_POST[$name];
  }
}


/**
 * Login User Data
 */

function loginUserInfo($id)
{

  return find('users', $id);
}


/**
 * SQL injection prevention function
 */

function injPrev($string)
{
  return "mysql_real_escape_string($string)";
}

/**
 * user already exist or not
 */

function userCheck($table, $tableColumn, $value, $msg)
{
  $data = dataCheck($table, $tableColumn,  $value);


  if ($data == true) {
    echo "$msg";
  }
}

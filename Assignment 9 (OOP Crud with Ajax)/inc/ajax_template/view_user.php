<?php 
include "../../autoload.php";

$user = new User;

$data = $user->viewAll();
					

$i = 1;

$search = "";
while ($d = $data->fetch_object()) {
    $search .= "<tr>
    <td> $i</td>
    <td> $d->name </td>
    <td>$d->email</td>
    <td>$d->cell</td>
    <td><img src=\"$d->photo\" alt=\"\"></td>
    <td>
        <a class=\"btn btn-sm btn-info\" href=\"user_view.php?id=$d->id\">View</a>
        <a class=\"btn btn-sm btn-warning\" href=\"user_edit.php?id=$d->id \">Edit</a>
        <a class=\"btn btn-sm btn-danger delete_user\" delete_user_id=\"$d->id \"
            delete_user_photo=\"$d->photo\"
            href=\"?delete_id=$d->id &photo=$d->photo \">Delete</a>
    </td>
</tr>";

$i++;

}
if($search == ""){
    echo "<hr/> <h5 class=\"text-danger text-center my-2\">Table is empty</h5> <hr/>";
}else{

    echo "<thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Cell</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>". $search . "</tbody>";
}

<?php
    include('functions.php');

    //check the request params as they come in
    if (isset($_GET["add_user"])) {
        //echo "post new user";
        $result = addUser($pdo);
    }

    echo json_encode($result);

    // could add other if statements here for a UMS system like adding or patching a user
    // refer to pan's example file
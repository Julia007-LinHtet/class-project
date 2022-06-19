<?php

    include ("../vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\HTTP;
    use Helpers\Auth;

    $auth = Auth::check();

    $tabe = new UsersTable(new MySQL());

    $id = $_GET['id'];
    $role = $_GET['role'];
    $tabe->changeRole($id, $role);

    HTTP::redirect("/admin.php");
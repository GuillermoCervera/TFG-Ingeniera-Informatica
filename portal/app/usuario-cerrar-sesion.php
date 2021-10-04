<?php
ob_start();
session_start();
require_once 'login-config.php';
$user_obj = new Cl_User();
$data = $user_obj->logout();
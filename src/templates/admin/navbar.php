<?php

require_once __DIR__ . "/../utils/NavBar.php";

use Clearuns\Templates\NavBar;

$links = array(
	array("path" => "/admin/", "icon" => "home", "label" => "Home"),
	array("path" => "/admin/user/create.php", "icon" => "person_add", "label" => "Add User"),
	array("path" => "/logout.php", "icon" => "logout", "label" => "Logout"),
);

NavBar::render($links);

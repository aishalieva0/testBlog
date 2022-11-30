<?php 
include_once ('includes/header.php'); 
 
@$route = $_GET['route'];

switch($route){
  case "admins";
  include_once("admins/index.php");
  break;
  case "admins/edit";
  include_once("admins/edit.php");
  break;
  case "admins/create";
  include_once("admins/create.php");
  break;
  case "admins/store";
  include_once("admins/store.php");
  break;
  case "admins/delete";
  include_once("admins/delete.php");
  break;


  case "blog";
  include_once("blog/index.php");
  break;
  case "blog/edit";
  include_once("blog/edit.php");
  break;
  case "blog/create";
  include_once("blog/create.php");
  break;
  case "blog/store";
  include_once("blog/store.php");
  break;
  case "blog/delete";
  include_once("blog/delete.php");
  break;

  case "categories";
include_once("categories/index.php");
break;
case "categories/edit";
include_once("categories/edit.php");
break;
case "categories/create";
include_once("categories/create.php");
break;
case "categories/store";
include_once("categories/store.php");
break;
case "categories/delete";
include_once("categories/delete.php");
break;

case "pages";
include_once("pages/index.php");
break;
case "pages/edit";
include_once("pages/edit.php");
break;
case "pages/create";
include_once("pages/create.php");
break;
case "pages/store";
include_once("pages/store.php");
break;
case "pages/delete";
include_once("pages/delete.php");
break;

case "settings";
include_once("settings/index.php");
break;
case "settings/edit";
include_once("settings/edit.php");
break;
case "settings/create";
include_once("settings/create.php");
break;
case "settings/store";
include_once("settings/store.php");
break;
case "settings/delete";
include_once("settings/delete.php");
break;

default:
include_once ("dashboard.php");
break;
  
}



include_once ('includes/sidebar.php'); 
include_once ('includes/footer.php');

?>
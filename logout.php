<?PHP
require_once("./include/membersite_config.php");
session_start();
session_unset();
session_destroy();

header("location:login.php");
exit();
?>
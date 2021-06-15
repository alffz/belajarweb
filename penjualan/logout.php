<?php
require 'fungsi.php';
    session_unset();
    session_destroy();
   unset( $_COOKIE);
    header ("Location: login.php");

?>
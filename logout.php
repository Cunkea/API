<?php
include_once 'konfig.php';
session_start();
session_unset();
session_destroy();
header("Location: index.php");
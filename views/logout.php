<?php

session_start();
unset($_SESSION["email"]);
unset($_SESSION["nome"]);
unset($_SESSION["cargo"]);
session_destroy();
header("Location: index.php");
exit;
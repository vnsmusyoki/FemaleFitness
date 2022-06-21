<?php
session_start(); 
unset($_SESSION["instructor"]);
header("Location:../../index.php");
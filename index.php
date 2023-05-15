<?php
require('bootstrap.php');
use Carbon\Carbon;
use Models\User;

$user = User::all(); 

echo $user;

echo Carbon::now();




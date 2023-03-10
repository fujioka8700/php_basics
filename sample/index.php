<?php

require('src/User.php');

use Kunio\User;

$user = new User('kunio');

var_dump($user->get_user_name());

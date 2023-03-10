<?php

require('vendor/autoload.php');

$user = new Kunio\User('kunio');

var_dump($user->get_user_name());

<?php 

//constants
// done at run time
define('STATUS_PAID', 'paid');

// has it been defined
echo defined('STATUS_PAID');

echo '<br>';

echo defined('STATUS');

echo '<br>';

echo STATUS_PAID;


// const keyword - done at compile time

const STATUS_UNPAID = ' unpaid';


// using a var to define a constant
$pending = 'pending';
define('STATUS_'. $pending, $pending);
echo '<br>';

echo STATUS_pending;


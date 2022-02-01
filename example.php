<?php

// Advanced Custom Fileds for Wordpress Example
// Field must return Y-m-d format

$exp_date = get_field('sale_valid');
$todays_date = date("Y-m-d");

$today = strtotime($todays_date);
$expiration_date = strtotime($exp_date);
			
if ($expiration_date >= $today) {
     echo "We have time up to ".$exp_date;
} else {
		 echo "This is the end";
}

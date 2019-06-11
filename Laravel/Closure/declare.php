<?php
$city = "New York";
$country = "USA";
$go = function ($vehicle) use ($city,$country) {
    echo "<br> Go to ".$city." of ".$country." by ".$vehicle;
};
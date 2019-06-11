<?php
// Closure là Lambda nhưng sẽ sử dụng biến toàn cục khi khai báo

// 2 biến Global
$city = "New York";
$country = "USA";
$go = function ($vehicle) use ($city,$country) {
    echo "<br> Go to ".$city." of ".$country." by ".$vehicle;
};
$go('car');
/*
 * VD tương tự nhưng không dùng closure
 */
$vehicle = 'motor';
$go_1 = function ($vehicle,$city,$country) {
    echo "<br> Go to ".$city." of ".$country." by ".$vehicle;
};
$go_1($vehicle,$city,$country);
/*
 * Closure sử dụng biến Global khi khai báo
 * Còn hàm thông thường sẽ truyền vào khi goi hàm
 */



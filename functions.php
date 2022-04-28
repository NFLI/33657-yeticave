
<?php
function showPrice($number) {
$number = ceil($number);

if($number > 1000) {
$number = number_format($number,0,'.',' ');
}

return $number;
};

function templater($template,$arr) {
if(file_exists($template)) {
ob_start();
include($template);
$output = ob_get_clean();
}
else {
$output = '';
}
return $output;
}

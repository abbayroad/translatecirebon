<?php
require_once("./cirebon.php");
new Penerjemah();
$gettxt = $_GET['txt'];
$txt = explode(" ", $gettxt);
$a = "";
foreach ($txt as $t => $v) {
    $v = strtolower($v);
    $a .= Penerjemah::terjemahkan($v) . " ";
}
echo $a;

<?php
//null coalescing operator

$data = ["action" => "create"];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
?>
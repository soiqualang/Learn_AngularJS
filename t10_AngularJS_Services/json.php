<?php
$someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
$someArray = json_decode($someJSON, true);
echo json_encode($someArray);
?>
<?php
// SIMPLY READING THE JSON FILE AND GIVING OUT THE CONTENT
header("Content-Type: application/json");
$file = 'records.json';

if (file_exists($file)) {
$data = file_get_contents($file);
echo $data ?: '[]';
} else {
echo '[]';
}
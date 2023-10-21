<?php
$directory = 'C:\xampp\htdocs\ICT_22_PHP';

if (is_dir($directory)) {
    $files = scandir($directory);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory not found.";
}
?>

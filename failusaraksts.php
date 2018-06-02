<?php
$aptaujas = 'C:\npp.7.5.5.bin.x64\Aptaujas';
if (is_dir($aptaujas)) {
    if ($dh = opendir($aptaujas)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: .".$file."<br />";
        }
        closedir($dh);
    }
}
?>
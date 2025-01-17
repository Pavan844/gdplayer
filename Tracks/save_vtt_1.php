<?php
if($VideoTrack1){

 $file_url1 = $VideoTrack1;
 $file_pointer1 = "Tracks/VideoTrack1.vtt";

if (!file_exists($file_pointer1)) {
    fopen("$file_pointer1", "wb");
}

        $open1 = file_get_contents($file_url1);       
        file_put_contents($file_pointer1, $open1);
$VideoTrack1 = "$file_pointer1";


}
?>
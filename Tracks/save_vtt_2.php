<?php
if($VideoTrack2){

 $file_url2 = $VideoTrack2;
 $file_pointer2 = "Tracks/VideoTrack2.vtt";

if (!file_exists($file_pointer2)) {
    fopen("$file_pointer2", "wb");
}

        $open2 = file_get_contents($file_url2);       
        file_put_contents($file_pointer2, $open2);
$VideoTrack2 = "$file_pointer2";

}



?>
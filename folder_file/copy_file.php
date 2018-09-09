<?php
$source_file = 'http://3.bp.blogspot.com/-AGI4aY2SFaE/Tg8yoG3ijTI/AAAAAAAAA5k/nJB-mDhc8Ds/s400/rizal001.jpg';
$folder_location = $_SERVER['DOCUMENT_ROOT'] . '/test/folder_file/images/profiles/100/';
$create_file = $folder_location . 'yoyo.jpg';

if (!file_exists($folder_location))
{
    mkdir($folder_location, 0777, true);
}

/*$media_url = curl_init($source_file);
curl_setopt($media_url, CURLOPT_RETURNTRANSFER, true);
$media_img = curl_exec($media_url);
$server_response = curl_getinfo($media_url, CURLINFO_HTTP_CODE);
if($server_response != 200){
    echo "pathto/graphics/backup_image.png";
}else{
    echo "http://pathto/remote_file.png";
}*/
/*$url=@getimagesize($source_file);
if(!is_array($url))
{
    echo "invalid image";
}
else
{
    echo "it's an image and here is the image's info<br>";
}*/
if(!file_exists($source_file))
{
    echo "Source file missing.";
    die();
}
else
{
    if(!file_exists($create_file))
    {
        if ( copy($source_file, $create_file) )
        {
            echo "Copy success!";
        }
        else
        {
            echo "Copy failed.";
        }
    }
    else
    {
        echo "Already file exist";
    }
}


?>
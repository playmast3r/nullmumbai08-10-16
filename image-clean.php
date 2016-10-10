<?php
//GD is inbuilt library used in this script to recreate image files
//Other alternative is Imagick library which you need to install as its not inbuilt
function LoadJpeg($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefromjpeg($imgname);

    /* See if it failed */
    if(!$im)
    {
        /* Create a black image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

//open the malicious image with php embeded code
$img = LoadJpeg('image.jpg');
//write new image file from original image which doesnt have embeded php code
imagejpeg($img, 'image-safe.jpg');
//destroy original image to clear memory
imagedestroy($img);
?>

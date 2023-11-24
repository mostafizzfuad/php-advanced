<!-- <pre> -->
<?php
$pro = $_FILES['profile'];
// var_dump($pro);

$name = $pro['name'];
$type = $pro['type'];
$tmp_name = $pro['tmp_name'];

// $size = $pro['size'];
// echo floor($size / 1024)." KB";

if (!empty($name)) {
    $loc = "upload/";

    if (move_uploaded_file($tmp_name, $loc.$name)) {
        echo "file uploaded successfully <br>";
        $path = $loc.$name;
        echo "<img src = '$path'";
    } else {
        echo "upload failed";
    }
}

?>
<!-- </pre>


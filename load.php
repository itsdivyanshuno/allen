<?php 

$conn = mysqli_connect('localhost', 'root', '', 'allen') or die('Connection Fail !!');

$name = $_POST['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$extension = $name . '.pdf';
$sub = $_POST['subject'];
$type = $_POST['type'];
$table_name = $sub . $type;

if($type == 'f'){
    $location = "uploaded/foundation/" . $extension;
}

elseif($type == 't'){
    $location = "uploaded/tim/" . $extension;
}

elseif($type == 'r'){
    $location = "uploaded/race/" . $extension;
}

elseif($type == 'e'){
    $location = "uploaded/exercise/" . $extension;
}

$res = move_uploaded_file($file_tmp, $location);

$sql = "INSERT INTO {$table_name} (name, location) VALUES ('{$name}', '{$location}')";
$result = mysqli_query($conn, $sql);

if($result){
    echo 'true';
}else{
    echo 'false';
}

mysqli_close($conn);

?>
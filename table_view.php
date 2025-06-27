<?php 

$tb_name = $_POST['tb_name'];


    $conn = mysqli_connect("localhost", "root", "", "allen") or die("Connection Fails !");

    $sql = "SELECT * FROM {$tb_name}";
    $result = mysqli_query($conn, $sql);

    $output = "";

    if(mysqli_num_rows($result) > 0){

        $output = "<table class='table'>
        <thead>
        <tr>
            <th scope='col'>S.No</th>
            <th scope='col'>Chapter Name</th>
            <th scope='col'>Action</th>
        </tr></thead></tbody>";

        while($row = mysqli_fetch_assoc($result)){
            
            $output .= "<tr>
                <td scope='row'>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td><button class='btn btn-sm btn-danger'><a class='text-light pdf' href='{$row['location']}'>View PDF</buttom></a></td>
            </tr>";
        }

        $output .= "</tbody></table>";

        echo $output;

        mysqli_close($conn);

    }else{
        echo "No Record Found";
    }


?>
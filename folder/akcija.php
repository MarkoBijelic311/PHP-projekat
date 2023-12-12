<?php
include("novaa.php");
$emaill = $_POST['email'];
if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'Update') {
            $sql = "UPDATE kontakt SET email=$email WHERE id=$zadnji_id";
            $result = mysqli_query($dbh, $sql);
            
        } elseif ($action === 'Delete') {
            $sql = "DELETE FROM kontakt WHERE id=$zadnji_id";
            $result = mysqli_query($dbh, $sql);  
        }
    }

?>
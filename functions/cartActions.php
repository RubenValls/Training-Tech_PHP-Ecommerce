<?php
function deleteCart(){
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $user = $_SESSION['email'];
        $sql = "DELETE FROM cart_products WHERE email = '$user'";
        $result = $db->query($sql);
        $db->close();

        header("Refresh:0");
    }

    function payCart(){
        print '<h1>PAYED</h1>';
    }
?>
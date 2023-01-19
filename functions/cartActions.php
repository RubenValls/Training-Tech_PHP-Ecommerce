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
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        /*
        $user = $_SESSION['email'];
        $sql = "SELECT * FROM cart_products WHERE email = '$user'";
        $resultCart = $db->query($sql);
        */

        $sql = "SELECT NAME,QUANTITY FROM products";
        $resultStock = $db->query($sql);
        $arrayStock = array();

        if ($resultStock->num_rows > 0) {
            while($row = $resultStock->fetch_assoc()){
                array_push($arrayStock, $row);
            }
        }

        $db->close();

        foreach($arrayStock as $product){
            print '<h1>'.$product['NAME'].'</h1>';
            print '<h1>'.$product['QUANTITY'].'</h1>';
        }
    }
?>
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

        $sql = "SELECT NAME,QUANTITY,PRICE FROM products";
        $resultStock = $db->query($sql);
        $arrayStock = array();
        $totalPay = 0;
        $date= date("d/m/Y");

        if ($resultStock->num_rows > 0) {
            while($row = $resultStock->fetch_assoc()){
                array_push($arrayStock, $row);
            }
        }

        $user = $_SESSION['email'];
        $sql = "SELECT * FROM cart_products WHERE email = '$user'";
        $resultCart = $db->query($sql);
        if ($resultCart->num_rows > 0) {
            while($row = $resultCart->fetch_assoc()) {
                $name = $row['nameProduct'];
                $quantity = $row['quantity'];
                $price = $row['PRICE'];
                foreach($arrayStock as $product){
                    if($name == $product['NAME'] && $quantity < $product['QUANTITY']){
                        $newQuantity = $product['QUANTITY'] - $quantity;
                        $sql = "UPDATE products SET QUANTITY = '$newQuantity' WHERE NAME = '$name'";
                        $totalPay += $quantity * $price;
                        $db->query($sql);
                        print '<h1 class="text-center">Product: '.$product['NAME'].' and quantity: '. $quantity .' payed. Thank you!</h1>';
                        $sql = "DELETE FROM cart_products WHERE nameProduct = '$name' AND quantity = '$quantity'";
                        $db->query($sql);
                    }
                }
            }
            $sql = "INSERT INTO purchase_history(TOTAL, DATE, USER) VALUES ('$totalPay','$date','$user')";
            $db->query($sql);
        }
        $db->close();
        print '<h4 class="text-center">You will be redirected in 5 seconds.</h4>';
        header( "refresh:5;url=../../pages/front/cart.php" );
    }
?>
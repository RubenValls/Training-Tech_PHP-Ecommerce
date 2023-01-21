<?php
    $user = $_POST["user"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $totalPrice = $price * $quantity;
    
    $db = mysqli_connect('localhost', 'root', '', 'formatech');
        
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "INSERT INTO cart_products (nameProduct, price, quantity, total_price, email)
            VALUES ('$name', $price, $quantity, $totalPrice, '$user');";
    $result = $db->query($sql);

    $db->close();

    echo '<script>
            alert("'.$name.' added to cart. Thanks!");
            window.location.href="../pages/user.php";
            </script>';
    ?>
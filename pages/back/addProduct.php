<?php
    // ADD PRODUCT
    if (isset($_POST['addProduct'])) {
        
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        $errors = array(); 

        $productName = mysqli_real_escape_string($db, $_POST['productName']);
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $productDescription = mysqli_real_escape_string($db, $_POST['productDescription']);
        $url = $_POST['urlImg'];

        if (empty($productName)) { array_push($errors, "Product Name is required"); }
        if (empty($price)) { array_push($errors, "Price is required"); }
        if (empty($quantity)) { array_push($errors, "Quantity is required"); }
        if (empty($productDescription)) { array_push($errors, "Description is required"); }
        if (empty($url)) { array_push($errors, "Image url is required"); }
    
        if (strpos($url,'jsdelivr') == false) {
            array_push($errors, "Not allowed Image URL");
        }
    
        if (count($errors) == 0) {
            $query = "INSERT INTO products (NAME, PRICE, QUANTITY, DESCRIPTION, IMG) 
                    VALUES('$productName', '$price', '$quantity', '$productDescription', '$url')";
            mysqli_query($db, $query);
            echo '<script>
                alert("Product added.");
                window.location.href="../front/admin.php";
                </script>';
        }else{
            echo '<script>
                alert("Errors with data included, check IMG link.");
                window.location.href="../front/admin.php";
                </script>';
        }
        unset($errors);
        $db->close();
    }
?>
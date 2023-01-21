<?php
    // DELETE PRODUCT
    if (isset($_POST['deleteProduct'])) {
        
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        $errors = array(); 

        $name = mysqli_real_escape_string($db, $_POST['product']);
    
        if (empty($name)) {
            array_push($errors, "Username is required");
        }
    
        if (count($errors) == 0) {
            $query = "DELETE FROM products WHERE NAME = '$name'";
            mysqli_query($db, $query);
            $rows = mysqli_affected_rows($db);
            if ($rows > 0) {
                $db->close();
                echo '<script>
                alert("Product deleted.");
                window.location.href="../front/admin.php";
                </script>';
            }else {
                $db->close();
                echo '<script>
                alert("There is not product according to the name");
                window.location.href="../front/admin.php";
                </script>';
            }
        }
        unset($errors);
        $db->close();
    }
?>
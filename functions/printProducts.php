<?php
    function showProducts() {

        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $sql = "SELECT * FROM products";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                print '<div class="card p-2 mx-auto text-center" style="width: 18rem;">';
                print '<form method="post" action="../../functions/addCart.php">';
                print '<img src="'.$row["IMG"].'" class="card-img-top" alt="'.$row["NAME"].'">';
                print '<div class="card-body">';
                print '<h5 class="card-title">'.$row["NAME"].'</h5>';
                print '<p class="card-text">'.$row["DESCRIPTION"].'</p>';
                print '<hr>';
                print '<h6>'.$row["PRICE"].'$</h6>';
                print '<hr>';
                print '<input type="number" class="form-control" min="1" name="quantity" required/>';
                print '<input type="hidden" class="form-control" name="name" value="'.$row["NAME"].'"/>';
                print '<input type="hidden" class="form-control" name="price" value="'.$row["PRICE"].'"/>';
                print '<input type="hidden" class="form-control" name="user" value="'.$_SESSION['email'].'"/>';
                print '<h6 class="mt-1">'.$row["QUANTITY"].' left!</h6>';
                print '<button type="sumbit" href="#" class="btn btn-outline-success mx-auto">Add to cart</button>';
                print '</div>';
                print '</form>';
                print '</div>';
            }
        }

        $db->close();
    }
?>
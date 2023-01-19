<?php
    function showCart() {

        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $user = $_SESSION['email'];
        $sql = "SELECT * FROM cart_products WHERE email = '$user'";
        $result = $db->query($sql);
        $toPay = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            print '<table class="table table-hover table-light table-bordered text-center">';
            print '<thead>
                        <tr class="table-secondary">
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Order</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>';
            print '<tbody>';
            while($row = $result->fetch_assoc()) {
                print '<tr>';
                print '<td>'. $row["nameProduct"] .'</td>';
                print '<td>'. $row["nameProduct"] .'</td>';
                print '<td>'. $row["quantity"] .'</td>';
                print '<td>'. $row["total_price"] .' $</td>';
                print '</tr>';
                $toPay += $row["total_price"];
            }
            print '</tbody>';
            print '</table>';
            print '<div class="container">
                        <h3>Total: '. $toPay .' $</h3>
                    </div>';
            print '<div class="container">
                        <form method="post">
                            <button type="submit" name="pay" class="btn btn-success">Pay Cart</button>
                            <button type="submit" name="delete" class="btn btn-danger">Delete Cart</button>
                        </form>
                    </div>';
        }else{
            print '<table class="table table-hover table-light table-bordered text-center">';
            print '<thead>
                        <tr class="table-secondary">
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Order</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>';
            print '<tbody>';
            print '</tbody>';
            print '</table>';
            print '<div class="container">
                        <h3>Total: '. $toPay .' $</h3>
                    </div>';
        }

        $db->close();
    }
?>
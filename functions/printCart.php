<?php
    function showCart() {

        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $user = $_SESSION['email'];
        $sql = "SELECT * FROM cart_products WHERE email = '$user'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                var_dump($row);
            }
        }

        if ($result->num_rows > 0) {
            // output data of each row
            print '<table class="table">';
            print '<thead>
                        <tr>
                            <th scope="col">ID Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Order</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>';
            print '<tbody>';
            while($row = $result->fetch_assoc()) {
                print '<tr>';
                print '<th scope="row">'. $row["ID"] .'</th>';
                print '<td>'. $row["NAME"] .'</td>';
                print '<td>'. $row["nameProduct"] .'</td>';
                print '<td>'. $row["quantity"] .'</td>';
                print '<td>'. $row["total_price"] .' $</td>';
                print '</tr>';
            }
        }

        $db->close();
    }
?>
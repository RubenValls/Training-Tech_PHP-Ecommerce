<?php
    function showHistory() {

        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $user = $_SESSION['email'];
        $sql = "SELECT * FROM purchase_history WHERE USER = '$user'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            print '<table class="table table-hover table-light table-bordered text-center">';
            print '<thead>
                        <tr class="table-secondary">
                            <th scope="col">ID</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">User</th>
                        </tr>
                    </thead>';
            print '<tbody>';
            while($row = $result->fetch_assoc()) {
                print '<tr>';
                print '<td>'. $row["ID"] .'</td>';
                print '<td>'. $row["TOTAL"] .' $</td>';
                print '<td>'. $row["DATE"] .'</td>';
                print '<td>'. $row["USER"] .'</td>';
                print '</tr>';
            }
            print '</tbody>';
            print '</table>';
        }else{
            print '<table class="table table-hover table-light table-bordered text-center">';
            print '<thead>
                        <tr class="table-secondary">
                            <th scope="col">ID</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">User</th>
                        </tr>
                    </thead>';
            print '<tbody>';
            print '</tbody>';
            print '</table>';
        }
        $db->close();
    }
?>
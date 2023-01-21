<?php
    // LOGIN ADMIN
    if (isset($_POST['login_admin'])) {
        session_start();
        
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        $errors = array(); 

        $name = mysqli_real_escape_string($db, $_POST['username']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);
    
        if (empty($name)) {
            array_push($errors, "Username is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = $pass;
            $query = "SELECT * FROM admins WHERE NAME='$name' AND PASS='$password'";
            $resultsAdmin = mysqli_query($db, $query);
            if (mysqli_num_rows($resultsAdmin) == 1) {
                $_SESSION['admin'] = $name;
                $_SESSION['success'] = "You are now logged in";
                $db->close();
                header('location: ../front/admin.php');
            }else {
                array_push($errors, "Wrong username/password combination");
                $db->close();
                echo '<script>
                alert("Wrong username/password combination.");
                window.location.href="../../index.php";
                </script>';
            }
        }
        unset($errors);
        $db->close();
    }

    // ADDING ADMIN
    if (isset($_POST['add_admin'])) {
        
        $db = mysqli_connect('localhost', 'root', '', 'formatech');
        $errors = array(); 

        $name = mysqli_real_escape_string($db, $_POST['username']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);
    
        if (empty($name)) {
            array_push($errors, "Username is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = $pass;
            $query = "SELECT * FROM admins WHERE NAME='$name' AND PASS='$password'";
            $resultsAdmin = mysqli_query($db, $query);
            if (mysqli_num_rows($resultsAdmin) == 1) {
                array_push($errors, "This admin already exists.");
                $db->close();
                echo '<script>
                alert("Wrong username/password combination.");
                window.location.href="../../index.php";
                </script>';
            }else {
                $password = $pass;
                $query = "INSERT INTO admins(NAME, PASS) VALUES('$name', '$password')";
                $resultsAdmin = mysqli_query($db, $query);
                $db->close();
                echo '<script>
                alert("Admin added");
                window.location.href="../front/admin.php";
                </script>';
            }
        }
        unset($errors);
        $db->close();
    }
?>
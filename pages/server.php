<<<<<<< HEAD
<?php
    session_start();

    // initializing variables
    $email = "";
    $name = "";
    $surname = "";
    $phone = "";
    $address = "";
    $pass = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'formatech');

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $surname = mysqli_real_escape_string($db, $_POST['surname']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($name)) { array_push($errors, "Name is required"); }
        if (empty($surname)) { array_push($errors, "Surname is required"); }
        if (empty($phone)) { array_push($errors, "Phone is required"); }
        if (empty($address)) { array_push($errors, "Address is required"); }
        if (empty($pass)) { array_push($errors, "Password is required"); }

        // first check the database to make sure 
        // a user does not already exist with the same email
        $user_check_query = "SELECT * FROM users WHERE EMAIL='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['EMAIL'] === $email) {
                array_push($errors, "email already exists");
                echo '<script>
                alert("Email already exists. Use another one.");
                window.location.href="signup.html";
                </script>';
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($pass);//encrypt the password before saving in the database
            $query = "INSERT INTO users (EMAIL, NAME, SURNAME, PHONE, ADDRESS, PASS) 
                    VALUES('$email', '$name', '$surname', '$phone', '$address', '$password')";
            mysqli_query($db, $query);
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: user.php');
        }
        unset($errors);
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);
    
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = md5($pass);
            $query = "SELECT * FROM users WHERE EMAIL='$email' AND PASS='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: user.php');
            }else {
                array_push($errors, "Wrong username/password combination");
                echo '<script>
                alert("Wrong username/password combination.");
                window.location.href="login.html";
                </script>';
            }
        }
        unset($errors);
    }

    $db->close();
?>
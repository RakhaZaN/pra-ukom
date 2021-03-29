<?php

include 'connection.php';

function login($data) {
    global $conn;
    $email = $data['email'];
    $password = $data['password'];
    $sql  = "SELECT * FROM user WHERE Email='$email'";
    $execute = mysqli_query($conn, $sql);
    if ($execute) {
        if (mysqli_num_rows($execute) > 0) {
            $data = mysqli_fetch_array($execute);
            if (password_verify($password, $data['Password'])) {
                session_start();
                $_SESSION['user'] = $data;
                $_SESSION['login'] = true;
                return true;
            }
        }
        // var_dump(mysqli_num_rows($execute));die();
        $_SESSION['error_message'] = "Email or Password was wrong";
    } else {
        $_SESSION['error_message'] = "something went wrong, please contact administrator";
    }
    $_SESSION['login'] = false;
    return false;
}

function register($data) {
    global $conn;
    $name      = $data['name'];
    $gender    = $data['gender'];
    $email     = $data['email'];
    $password  = password_hash($data['password'], PASSWORD_DEFAULT);
    $handphone = $data['handphone'];
    $address   = $data['address'];
    $id        = getNewId('user', 'UserID', 'US0001');
    $role      = 'member';
    
    // check exists email
    $sqlCheckEmail = "SELECT * FROM user WHERE Email='$email'";
    $executeCheckEmail = mysqli_query($conn, $sqlCheckEmail);
    if (mysqli_num_rows($executeCheckEmail) > 0) {
        $_SESSION['error_message'] = "Email $email already registered";
        echo $_SESSION['error_message'];
        return false;
    }

    $sql = "INSERT INTO user(UserId, Email, Password, Name, Gender, Phone, Address, Role)
                VALUES ('$id', '$email', '$password', '$name', '$gender', '$handphone', '$address', '$role')";
    $execute = mysqli_query($conn, $sql);
    // return amount of row has changed or affected
    return mysqli_affected_rows($conn); 
}

// get new ID, for make auto increment
function getNewId($table, $column, $firstId = '0001') {
    global $conn;
    // if data on db is empty use id from parameter given for begin of id
    $id  = $firstId; 
    $sql = "SELECT $column FROM $table ORDER BY $column DESC LIMIT 1";
    $execute = mysqli_query($conn, $sql);
    // if any data in db then make auto increment
    if (mysqli_num_rows($execute) > 0) { 
        $row = mysqli_fetch_assoc($execute);
        // replace all alphabet
        $strId = preg_replace("'\D'", '', $row['UserID']); 
        // increment number
        $number = ((int) $strId) + 1; 
        // length of number
        $lenghtNum = strlen($number); 
        // make variable to accommodate value of 0 (zero)
        $zero = ''; 
        for ($i = 0; $i < strlen($strId)-$lenghtNum;$i++) {
            // append 0 (zero) to variable 
            $zero .= '0'; 
        }
        // combine all of it
        $id = substr($row['UserID'], 0, strlen($row['UserID'])-strlen($strId)).$zero.$number; 
    }
    return $id;
}

function changePass($data) {
    global $conn;
    $old = $data['oldpass'];
    $new = $data['newpass'];

    if ($_SESSION['user']['Password'] == $old) {
        $sql = "UPDATE user SET Password='$new'";
        mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
            return true;
        }
        $_SESSION['error_message'] = 'Something went wrong, while change password';
    }
    $_SESSION['error_message'] = 'Old Password was wrong';
    return false;
}

function logout() {
    session_unset();
    session_destroy();

    header('location: ./');
}

function checkLogin($login = null) {
    // Check login status
    if (is_null($login) || $login == false) {
        header('./');
    }
    $redirectTo = $_SESSION['user']['Role'] == 'admin' ? 'home-admin.php' : 'home-member.php';
    header($redirectTo);
}
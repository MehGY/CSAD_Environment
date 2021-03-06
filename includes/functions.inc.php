<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }

    $storedPwd = $uidExists["usersPwd"];
    
    checkedPwd($pwd, $storedPwd);

    if (checkedPwd($pwd, $storedPwd) === false) {
        header("location: ../index.php?error=wronglogin");
    } else if (checkedPwd($pwd, $storedPwd)  === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location:../index.php");
        exit();
    }
}

function checkedPwd($pwd, $storedPwd){
    if ($pwd === $storedPwd){
        return true;
    } else{
        false;
    }
}

function createFeedback($conn, $fbname, $fbemail, $fbtitles, $Details) {
    $sql = "INSERT INTO feedback (feedbackName, feedbackEmail, feedbackTitle, Details) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../feedback.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $fbname, $fbemail, $fbtitles, $Details);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../feedback.php?error=none");
    exit();
}

function emptyInput($fbtitles, $Details){
    $result;
    if (empty($fbtitles) || empty($Details)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}
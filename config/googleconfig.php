<?php
require_once "GoogleAPI/vendor/autoload.php";
//Step 1: Enter you google account credentials
//https://hngi7.hng.tech/config/googleconfig.php
$g_client = new Google_Client();
$g_client->setClientId("556437928635-0u0cf4j9h05rgshv47br1dclagrt16so.apps.googleusercontent.com");
$g_client->setClientSecret("yA09sKL95earfcq0aFpPe_Uv");
$g_client->setRedirectUri("https://hngi7.hng.tech/config/googleconfig.php");
$g_client->setApplicationName("HNI7 Internship");
$g_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
$g_client->setScopes("email");
$g_client->setDeveloperKey("AIzaSyDC4AvGCTAiOtcIANF-PLTyjaAEE2uXSUA");


$auth_url = $g_client->createAuthUrl();
//echo "<a href='$auth_url'>Login Through Google </a>";
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if (isset($code)) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    } catch (Exception $e) {
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $pay_load = null;
}

if (isset($pay_load)) {
    print_r($pay_load);
    require_once 'database.php';
    $res  = $database->query("SELECT * FROM admins WHERE email = '{$pay_load["email"]}' LIMIT 1");
    if (1 == $database->affected_rows()) {
        echo "yes";
        $userData = mysqli_fetch_array($res);
        if ($userData['block'] == 1) {
            // admin is blocked, cannot login
            header("Location: login.php?blocked");
            die;
        } else {
            $_SESSION["fullname"] = $userData['firstname'] . " " . $userData['lastname'];
            $_SESSION["role"] = $userData['role'];
            $_SESSION["admin_id"] = $userData['admin_id'];
            header("location:../dashboard.php");
        }

        //
    } else {

        $_SESSION['lg_error'] = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 98% !important; text-align: center;">Email is not regitered as an admin!</p>';
        header("location:../login.php");
    }
}





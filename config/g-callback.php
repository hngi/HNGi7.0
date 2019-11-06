<!-- <?php
	//require_once "googleconfig.php";

// if (isset($_SESSION['access_token']))
// 	$g_client->setAccessToken($_SESSION['access_token']);
// else if (isset($_GET['code'])) {
// 	$token = $g_client->fetchAccessTokenWithAuthCode($_GET['code']);
// 	$_SESSION['access_token'] = $token;
// } else {
// 	header('Location: login.php');
// 	exit();
// }

// $oAuth = new Google_Service_Oauth2($g_client);
// $userData = $oAuth->userinfo_v2_me->get();

// $_SESSION['id'] = $userData['id'];
// $_SESSION['email'] = $userData['email'];
// $_SESSION['gender'] = $userData['gender'];
// $_SESSION['picture'] = $userData['picture'];
// $_SESSION['familyName'] = $userData['familyName'];
// $_SESSION['givenName'] = $userData['givenName'];

// header('Location: index.php');
// exit();
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
		if($userData['block'] == 1) {
          // admin is blocked, cannot login
		  header("Location: login.php?blocked");
		  die;
		}
		else{
			$_SESSION["fullname"] = $userData['firstname']. " ".$userData['lastname'];
          	$_SESSION["role"] = $userData['role'];
			$_SESSION["admin_id"] = $userData['admin_id'];
			header("location:../dashboard.php");
		}
		
		//
	}else{
		
		$message = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 98% !important; text-align: center;">Email is not regitered under admin!</p>';
		header("location:../login.php?getmess=".$message);
		
	} 

 }
?> -->
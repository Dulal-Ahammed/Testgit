<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
     <div class="jumbotron">
         <h2>How to send otp to phone number in php</h2>
            <div class="card">
                <div class="card-body">
                        <div class="col-md-6">
                               <form action="" method="post">
                                           <div class="form-group">
                                              <input type="number" class="form-control" id="number" name="number">

                                            </div>
                                            <button type="submit" name="sendotp" class="btn btn-success">send otp</button>

                                  </form>

                        </div>

                    </div>
                </div>

         </div>
    </div>

</body>
</html>
<?php
$authKey = "";
$senderId = "102234";

if(isset($_POST['sendotp']))
{
    $mobileNumber=$_POST['number'];
    $message = 'welcome to funda web it:Your verification code is ##OTP##.)';
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,

    );
    //API URL
    $url="http://api.msg91.com/api/sendotp.php";
    }
    

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?authkey=%24authkey&mobile=%24mobile_no&message=%24message&sender=%24senderid&otp_expiry=&otp_length=&country=&otp=%24otp&email=&template=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
   ?>
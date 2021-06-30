<?php
/**
 * For Development Purposes
 */
   require '/var/www/html/vendor/autoload.php'; 
   include("inc/hitcounter.class.php");
   include('inc/func.php');
ini_set('display_errors', 'on');
$_SERVER['SERVER_NAME']='axcloud.sytes.net';


date_default_timezone_set('UTC');



 
set_time_limit(0);
ob_implicit_flush(1);
define('MEDIA_DIR','/var/www/media');
$h=$w=300;
$app='home';
$opt='video';
$path='mp4/The Big Fat Quiz Of Everything.mp4';
$pics['home']='whales';
$pics['other']='mm';
foreach($_REQUEST as $k => $v)
{
	$$k=urldecode($v);
}

$gal=$pics[$app];

//place this before any script you want to calculate time
$time_start = microtime(true); 



$config = array(
    'basic' => array(
        'company' => 'Mr AX',
        'email'   => 'seanax26@gmail.com',
    ),

    'db' => array(
        'host'     => 'localhost',
        'port'     => 3306,
        'username' => 'pmauser',
        'password' => 'crack420',
        'name'     => 'axcloud',
        'table'    => 'users',
    ),

    'features' => array(
        'auto_init'      => true,
        'two_step_login' => false,
    ),

    /**
     * These are my localhost paths, change it to yours
     */
    'pages' => array(
        'no_login'   => array(
            '/',
            '/reset.php',
            '/register.php',
            '/profile.php',
        ),
        'everyone'   => array(
            '/',
            '/index.php',
            '/profile.php',
        ),
        'login_page' => '/login.php',
        'home_page'  => '/home.php',
    ),

    'two_step_login' => array(
        'instruction'   => 'A token was sent to your E-Mail Address. Please see the mail in your inbox and paste the token found in the textbox below :',
        'send_callback' => function($LS,$userID,$token){

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'seanax26';                     //SMTP username
    $mail->Password   = 'crack420';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('seanax26@gmail.com', 'MrAx');
    $mail->addAddress($email, 'New User');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('seanax26@gmail.com', 'MrAx');
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verify Yourself';
    $mail->Body    ='Someone tried to login to your account. If it was you, then use the following token to complete logging in : <blockquote>' . $token . "</blockquote>If it was not you, then ignore this email and please consider to change your account's password.';

   // $mail->AltBody = 'This is the body in plain text foron-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


},
    ),
);




 $LS = new \Fr\LS($config);


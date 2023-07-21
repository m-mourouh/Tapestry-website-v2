<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
//     $body = " <p>
//     <p style='font-size:1.2rem ;'><b>".$name."</b> vous a envoyé un message</p>
//     <p>".$_POST['body']."</p>
//     <p>Voici les informations de client : </p>
//     <p>Nom : ".$name."</p>
//     <p>Téléphone : ".$tel."</p>
//     <p>Email : ".$email."</p>
//  </p>" ; 

    $body = '<div style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <tbody>
            <tr>
              <td align="center" valign="top">
                <div>
                  <p style="margin-top: 0;"><img src="https://badik-deco-royal.000webhostapp.com/static/images/logo.svg" alt="Badik Déco Royam" style="border: none; display: inline-block; font-size: 14px; font-weight: bold; height: auto; outline: none; text-decoration: none; text-transform: capitalize; vertical-align: middle; max-width: 250px; margin-left: 0; margin-right: 0;"></p>
                </div>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;background-color: #ffffff; border: 1px solid #dedede; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); border-radius: 3px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="top">
                        <!-- Header -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #0e808a; color: #ffffff; border-bottom: 0; font-weight: bold; line-height: 100%; vertical-align: middle; font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif; border-radius: 3px 3px 0 0;">
                          <tbody>
                            <tr>
                              <td id="header_wrapper" style="padding: 36px 48px; display: block;">
                                <h1 style="font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif; font-size: 30px; font-weight: 300; line-height: 150%; margin: 0; text-align: center; text-shadow: 0 1px 0 #354c6c; color: #ffffff; background-color: inherit;">Badik Déco Royal Site</h1>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- End Header -->
                      </td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <!-- Body -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                          <tbody>
                            <tr>
                              <td valign="top" id="body_content" style="background-color: #ffffff;">
                                <!-- Content -->
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                  <tbody>
                                    <tr>
                                      <td valign="top" style="padding: 48px 48px 32px;">
                                        <div style="color: #636363; font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;">
                                          <p style="margin: 0 0 16px;"> '.$body.'</p>
                                          <p style="margin: 0 0 16px;">
                                            <strong>Object: </strong> '.$subject.'<br>
                                            <strong>Nom: </strong> '.$name.'<br>
                                            <strong>Téléphone: </strong>'.$tel.'<br>
                                            <strong>Email: </strong>'.$email.'<br>
                                          </p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <!-- End Content -->
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- End Body -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" valign="top">
                <!-- Footer -->
                <table border="0" cellpadding="10" cellspacing="0" width="100%" style="max-width: 600px;">
                  <tbody>
                    <tr>
                      <td valign="top" style="padding: 0; border-radius: 6px;">
                        <table border="0" cellpadding="10" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td colspan="2" valign="middle" id="credit" style="border-radius: 6px; border: 0; color: #8a8a8a; font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif; font-size: 12px; line-height: 150%; text-align: center; padding: 24px 0;">
                                <p style="margin: 0 0 16px;">Boulevard Mokhtar soussi
                                    <br> sidi maarouf 20670 Casablanca</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
         
              </td>
            </tr>
          </tbody>
        </table>
      </div>';
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "badikdecoroyal@gmail.com"  ;
    $mail->Password = '@badik..deco..royal..site2022@';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    
    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("badikdecoroyal@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>
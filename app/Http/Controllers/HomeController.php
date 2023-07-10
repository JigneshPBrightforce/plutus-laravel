<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Custom Software Development Company in India | Plutustec',
        ];
        return view('welcome')->with($data);
    }
    public function aboutus()
    {
        $data = [
            'title' => 'Custom Software Development Company in USA, India.',
        ];
        return view('about-us')->with($data);
    }
    public function contact_us()
    {
        $data = [
            'title' => 'Contact Us | Web & Mobile App Development Company | Plutus',
        ];
        return view('contact-us')->with($data);
    }

    

    public function inquiryform(){
        if($_POST["page"] === 'contactForm' && $_POST["name"] !== '' && $_POST["email"] !== '' && $_POST["phone"] !== '' && $_POST["subject"] !== '' && $_POST["msg"] !== '' && $_POST["g-recaptcha-response"] !== ''){

            //admin_user_register
            $mailContent = [
                'name' => ucwords($_POST["name"]), 
                'email' => $_POST['email'], 
                'subject' =>  $_POST['subject'], 
                'phone' => $_POST['phone'], 
                'msg'  => $_POST['msg'], 
                ];
            $userEmail = $_POST['email'];
            \Mail::send('emails.inquiryform', $mailContent ,
            function ($message) use ($userEmail) {
                $message->to($userEmail)->subject('Test mode : '.$_POST["name"].' is contacting us');
            });
            
            $response = ['success' => 1, 'message' => 'Email sent successfully.', 'error' => null];
            echo json_encode($response);            
        
        }else if($_POST["page"] === 'careerForm' && $_POST['firstName'] !== '' && $_POST['lastName'] !== '' && $_POST['phone'] !== '' && $_POST['email'] !== '' && $_POST['current_ctc'] !== '' && $_POST['expected_ctc'] !== '' && $_POST['experience_year'] !== '' && $_POST['experience_month'] !== '' && $_POST['notice_period'] !== '' && $_POST['current_city'] !== '' && $_FILES['resume'] !== ''){
        
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["resume"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
            // Check file size
            if ($_FILES["resume"]["size"] > 2000000) {
                $uploadOk = 0;
                $response = ['success' => false, 'message' => "Sorry, your file is too large.", 'error' => $_FILES["resume"]["size"] ];
                echo json_encode($response);
            }
            // Allow certain file formats
            if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {
                $uploadOk = 0;
                $response = ['success' => false, 'message' => "Sorry, only DOC, PDF files are allowed.", 'error' => $imageFileType];
                echo json_encode($response);
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {        
            // if everything is ok, try to upload file
            }else{ 
            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
                chmod($target_file,0755);
                //sender information
                $mail->setFrom('webmaster@plutustec.com', 'PLUTUS');
                //receiver email address and name
                $mail->addAddress($_POST["email"], $_POST["firstName"]); 
        
                // Add cc or bcc   
                // $mail->addCC('email@mail.com');  
                // $mail->addBCC('user@mail.com');  
        
                $mail->addAttachment(__DIR__ . '/'.$target_file);
        
                $mail->isHTML(true);
                
                $mail->Subject = 'Test mode : '.$_POST["firstName"].' is contacting us';
                $mail->Body    = '<html>
                <head>
                <title>Thank you for contact</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link
                    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700&display=swap"
                    rel="stylesheet"
                />
                <link rel="icon" type="image/x-icon" href="https://msb.plutustec.in/image/Plutus-logo(fevicon).ico">
                <style>
                    *{
                        box-sizing: border-box;
                    }
                </style>
                </head>
                <body
                style="
                    font-family: \'Noto Sans\', sans-serif;
                    margin: 0px;
                    padding: 15px 0;
                    border: 0;
                    background-color: rgba(255, 108, 55, 0.2);
                "
                >
                <table
                    cellpadding="0"
                    cellspacing="0"
                    style="max-width: 700px; width: 100%; margin: auto"
                >
                    <tr>
                    <td
                        style="
                        background-color: #ffffff;
                        padding: 10px 15px;
                        text-align: center;
                        "
                    >
                        <img
                        src="https://msb.plutustec.in/image/Plutus-logo(new-o).png"
                        style="max-width: 200px; margin: auto"
                        alt="logo"
                        />
                    </td>
                    </tr>
                    <tr>
                    <td
                        style="
                        background-color: #ff6c37;
                        padding: 15px 15px;
                        text-align: center;
                        vertical-align: middle;
                        background-image: url(\'https://msb.plutustec.in/image/career.png\');
                        height: 300px;
                        background-size: cover;
                        "
                    >
                        <h4
                        style="
                            color: #ffffff;
                            font-size: 42px;
                            line-height: 54px;
                            font-weight: 500;
                            max-width: 550px;
                            text-align: center;
                            margin: auto;
                        "
                        >
                        Career email details
                        </h4>
                    </td>
                    </tr>
                    <tr>
                    <td style="background-color: #ffffff; padding: 25px 15px">
                        <p
                        style="
                            color: #222222;
                            font-size: 20px;
                            line-height: 24px;
                            margin: 0px 0px 24px;
                        "
                        >
                        Here are the submitted details by candidate:
                        </p>
                        <div style="margin-bottom: 24px">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >First name</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["firstName"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Last name</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["lastName"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Phone</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["phone"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Email</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        <a href="mailto:'.$_POST['email'].'" style="color: #000000; text-decoration: none;">'. $_POST['email'].'</a>
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Current CTC</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >                
                        '.$_POST["current_ctc"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Expected CTC</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["expected_ctc"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Experience</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["experience_year"].' Year '.$_POST["experience_month"].' Months
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Notice period</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["notice_period"].' Month
                        </h4>
                        </div>
                        <div style="margin-bottom: 24px;max-width: 330px;width:100%;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Current city</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                        '.$_POST["current_city"].'
                        </h4>
                        </div>
                        <div style="margin-bottom: 0px;max-width: 330px;width:100%;display: block;display: inline-block;">
                        <label
                            style="
                            text-transform: uppercase;
                            font-size: 14px;
                            line-height: 18px;
                            color: #ff6c37;
                            letter-spacing: 0.7px;
                            margin-bottom: 8px;
                            display: block;
                            "
                            >Resume or cv</label
                        >
                        <h4
                            style="
                            color: #000000;
                            font-size: 20px;
                            line-height: 28px;
                            margin: 0px;
                            "
                        >
                            <img src="https://msb.plutustec.in/image/pdf.png" width="28" style="display: inline-block;vertical-align: middle;" alt="resume"/>
                            <a style="margin-left: 5px;color: #000000;text-decoration: none;display: inline-block;vertical-align: middle;"href="">'.$_FILES["resume"]["name"].'</a>
                        </h4>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td style="text-align: center;background-color: #f1f1f1;font-size: 14px;line-height: 20px;padding: 20px 15px;color: #000000;">© 2022<a href="https://plutustec.com/" style="text-decoration: none;color: #ff6c37;margin-left: 5px;">Plutus Technologies Pvt.Ltd.</a></td>
                    </tr>
                </table>
                </body>
            </html>';
        
                // Send mail   
                if (!$mail->send()) {
                    $response = ['success' => false, 'message' => 'please try again after some time.', 'error' => $mail->ErrorInfo];
                    echo json_encode($response);
                } else {
                    $response = ['success' => true, 'message' => 'Email sent successfully.', 'error' => null];
                    echo json_encode($response);
                }
        
            }else{$response = ['success' => false, 'message' => 'error on upload.', 'error' => $_FILES["resume"]["tmp_name"]];
            echo json_encode($response);}
        }
        
        }else{
            $response = ['success' => false, 'message' => 'please fill all input.', 'error' => null];
            echo json_encode($response);
        }
    }
}
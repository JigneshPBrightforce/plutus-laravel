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
    public function career()
    {
        $data = [
            'title' => 'Current Openings at Plutustec | Careers at Plutustec | Jobs at Plutus',
        ];
        return view('career.index')->with($data);
    }

    public function career_details_fullstack(){
        $data =[
            'title' => 'Fullstack Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.fullstack')->with($data);
    }
    public function career_details_flutter(){
        $data =[
            'title' => 'Flutter Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.flutter')->with($data);
    }
    public function career_details_php(){
        $data =[
            'title' => 'PHP Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.php')->with($data);
    }
    public function career_details_laravel(){
        $data =[
            'title' => 'Laravel Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.laravel')->with($data);
    }
    public function career_details_ios(){
        $data =[
            'title' => 'IOS Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.ios')->with($data);
    }
    public function career_details_bde(){
        $data =[
            'title' => 'BDE Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.bde')->with($data);
    }
    public function career_details_fresher(){
        $data =[
            'title' => 'Fresher Job Opening | Careers At Plutus Technologies'
        ];
        return view('career.fresher')->with($data);
    }



    // send mail when contact us
    public function inquiryform(Request $request){
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
            
            $uploadOk = 1;
            $target_file = basename($_FILES["resume"]["name"]);
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

            if($uploadOk === 1){
                $data = array(
                    'firstName'=>$_POST['firstName'],
                    'lastName'=>$_POST['lastName'],
                    'phone'=>$_POST['phone'],
                    'email'=>$_POST['email'],
                    'current_ctc'=>$_POST['current_ctc'],
                    'expected_ctc'=>$_POST['expected_ctc'],
                    'experience_year'=>$_POST['experience_year'],
                    'experience_month'=>$_POST['experience_month'],
                    'notice_period'=>$_POST['notice_period'],
                    'current_city'=>$_POST['current_city'],
                    'resume' => $_FILES["resume"]["name"],
                    'file_type' =>$imageFileType
                );
                $file = $request->file('resume');
                \Mail::send('emails.careerform', $data, function ($message) use($data, $file){    
                    $message->from($data['email']);
                    $message->to($data['email'])->subject('Test mode : '.$_POST["firstName"].' is applying for job.');
            
                    $message->attach($file->getRealPath(), array(
                        'as' => $file->getClientOriginalName(), // If you want you can chnage original name to custom name      
                        'mime' => $file->getMimeType())
                    );
            
                });

                $response = ['success' => 1, 'message' => 'Email sent successfully.', 'error' => null];
                echo json_encode($response);            
            }
        }else{
            $response = ['success' => false, 'message' => 'please fill all input.', 'error' => null];
            echo json_encode($response);
        }
    }
}
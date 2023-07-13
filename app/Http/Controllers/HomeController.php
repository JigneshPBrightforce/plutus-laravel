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

    // company menu
    public function aboutus()
    {
        $data = [
            'title' => 'Custom Software Development Company in USA, India.',
        ];
        return view('about-us')->with($data);
    }
    public function engagement_models()
    {
        $data = [
            'title' => 'Business Engagement Models | Plutus Technologies Pvt.Ltd.',
        ];
        return view('engagement-models')->with($data);
    }
    public function client_confidentiality()
    {
        $data = [
            'title' => 'Client Data Confidentiality | Plutus Technologies Pvt.Ltd.',
        ];
        return view('client-confidentiality')->with($data);
    }
    public function life_at_plutus()
    {
        $data = [
            'title' => 'Life at Plutus Technologies',
        ];
        return view('life-at-plutus')->with($data);
    }
    public function contact_us()
    {
        $data = [
            'title' => 'Contact Us | Web & Mobile App Development Company | Plutus',
        ];
        return view('contact-us')->with($data);
    }

    // career menu
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

    // services menu
    public function services(){
        $data =[
            'title' => 'Custom Website and Mobile Application Development Services | Plutus'
        ];
        return view('services.index')->with($data);
    }

    public function ios_development(){
        $data =[
            'title' => 'Best iOS App Development Company in India - Plutus Technologies'
        ];
        return view('services.ios-development')->with($data);
    }
    public function android_development(){
        $data =[
            'title' => 'Android App Development Company In India - Plutus Technologies'
        ];
        return view('services.android-development')->with($data);
    }
    public function ionic_development(){
        $data =[
            'title' => 'Ionic App Development Company In India - Plutus Technologies'
        ];
        return view('services.ionic-development')->with($data);
    }
    public function react_native_development(){
        $data =[
            'title' => 'React Native App Development Company India | React Native Application'
        ];
        return view('services.react-native-development')->with($data);
    }
    public function flutter_development(){
        $data =[
            'title' => 'Flutter App Development Company In India - Plutus Technologies'
        ];
        return view('services.flutter-development')->with($data);
    }
    public function php_development(){
        $data =[
            'title' => 'PHP Web Development Company In India, USA - Plutus Technologies'
        ];
        return view('services.php-development')->with($data);
    }
    public function nodejs_development(){
        $data =[
            'title' => 'Node.js Development Company In India, USA - Plutus Technologies'
        ];
        return view('services.nodejs-development')->with($data);
    }
    public function angularjs_development(){
        $data =[
            'title' => 'AngularJS Development Company In India - Plutus Technologies'
        ];
        return view('services.angularjs-development')->with($data);
    }
    public function reactjs_development(){
        $data =[
            'title' => 'ReactJS Development Company | React JS Development Services'
        ];
        return view('services.reactjs-development')->with($data);
    }
    public function fullstack_development(){
        $data =[
            'title' => 'Full Stack Development Company | Full Stack Development Services'
        ];
        return view('services.fullstack-development')->with($data);
    }
    public function python_development(){
        $data =[
            'title' => 'Python Web Development Company in India, USA - Plutus Technologies'
        ];
        return view('services.python-development')->with($data);
    }
    public function aspnet_development(){
        $data =[
            'title' => 'ASP.NET Development Company - Plutus Technologies'
        ];
        return view('services.aspnet-development')->with($data);
    }
    public function wordpress_development(){
        $data =[
            'title' => 'Wordpress Development Company In India & USA - Plutus Technologies'
        ];
        return view('services.wordpress-development')->with($data);
    }
    public function drupal_development(){
        $data =[
            'title' => 'Drupal Development Company | Drupal Web Development Services'
        ];
        return view('services.drupal-development')->with($data);
    }
    public function magento_development(){
        $data =[
            'title' => 'Magento ECommerce Development Company | Custom Magento ECommerce Development Services'
        ];
        return view('services.magento-development')->with($data);
    }
    public function softwaretesting_development(){
        $data =[
            'title' => 'Software Testing Company | QA and Software Testing Services Provider'
        ];
        return view('services.softwaretesting-development')->with($data);
    }
    public function uiux_development(){
        $data =[
            'title' => 'UI/UX Design Company | UI/UX Design Services Company'
        ];
        return view('services.uiux-development')->with($data);
    }
    public function digital_marketing_development(){
        $data =[
            'title' => 'Digital Marketing Company | Digital Marketing Agency | SEO Services'
        ];
        return view('services.digital-marketing-development')->with($data);
    }
    public function customer_support_maintenance(){
        $data =[
            'title' => 'Software Support and Maintenance provider | Plutus Technologies'
        ];
        return view('services.customer-support-maintenance')->with($data);
    }

    // portfolio menu
    public function portfolio(){
        $data = [
            'title' => 'Custom Software Development Company in India | Plutustec'
        ];
        return view('portfolio.index')->with($data);
    }
    public function rsd_portfolio(){
        $data = [
            'title' => 'Ready Set Dance | Plutustec'
        ];
        return view('portfolio.rsd-portfolio')->with($data);
    }
    public function rapidparty_portfolio(){
        $data = [
            'title' => 'Rapid party | Plutustec'
        ];
        return view('portfolio.rapidparty-portfolio')->with($data);
    }
    public function reshyne_portfolio(){
        $data = [
            'title' => 'Reshyne | Plutustec'
        ];
        return view('portfolio.reshyne-portfolio')->with($data);
    }
    public function blog(){
        $data = [
            'title' => 'Blog | Plutustec '
        ];
        return view('portfolio.blog')->with($data);
    }
    public function blog_details(){
        $data = [
            'title' => 'Blog details | Plutustec '
        ];
        return view('portfolio.blog-details')->with($data);
    }

    // hire-resources

    public function hire_php_developers(){
        $data = [
            'title' => 'Hire PHP Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-php-developers')->with($data);
    }
    public function hire_android_app_developer(){
        $data = [
            'title' => 'Hire Android App Developers | Offshore Android App Developers'
        ];
        return view('hire_resources.android-app-developer')->with($data);
    }
    public function hire_ios_app_developer(){
        $data = [
            'title' => 'Hire iOS App Developers | iPhone & iPad App Developers'
        ];
        return view('hire_resources.ios-app-developer')->with($data);
    }
    public function hire_wordpress_developer(){
        $data = [
            'title' => 'Hire Wordpress Developer | Hire Dedicated Wordpress Developer In India'
        ];
        return view('hire_resources.hire-wordpress-developer')->with($data);
    }
    public function hire_magento_app_developer(){
        $data = [
            'title' => 'Hire Magento Developers | Hire Magento 2 Developers'
        ];
        return view('hire_resources.magento-app-developer')->with($data);
    }
    public function hire_uiux_designer(){
        $data = [
            'title' => 'Hire UI/UX Designers | Top UX/UI Designers For Hire'
        ];
        return view('hire_resources.hire-uiux-designer')->with($data);
    }
    public function hire_ionic_app_developer(){
        $data = [
            'title' => 'Hire Ionic App Developers | Offshore Ionic App Developers'
        ];
        return view('hire_resources.ionic-app-developer')->with($data);
    }
    public function hire_reactnative_app_developer(){
        $data = [
            'title' => 'Hire Reactnative App Developers | Offshore Reactnative App Developers'
        ];
        return view('hire_resources.reactnative-app-develop')->with($data);
    }
    public function hire_flutter_app_developer(){
        $data = [
            'title' => 'Hire Flutter App Developers | Offshore Flutter App Developers'
        ];
        return view('hire_resources.flutter-app-developer')->with($data);
    }
    public function hire_nodejs_developer(){
        $data = [
            'title' => 'Hire Node.js Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-nodejs-developer')->with($data);
    }
    public function hire_reactjs_developer(){
        $data = [
            'title' => 'Hire ReactJS Developers | Offshore Android App Developers'
        ];
        return view('hire_resources.hire-reactjs-developer')->with($data);
    }
    public function hire_angularjs_developer(){
        $data = [
            'title' => 'Hire AngularJS Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-angularjs-developer')->with($data);
    }
    public function hire_fullstack_developer(){
        $data = [
            'title' => 'Hire Fullstack Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-fullstack-developer')->with($data);
    }
    public function hire_python_developer(){
        $data = [
            'title' => 'Hire Python Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-python-developer')->with($data);
    }
    public function hire_dotnet_developer(){
        $data = [
            'title' => 'Hire .NET Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-dotnet-developer')->with($data);
    }
    public function hire_drupal_developer(){
        $data = [
            'title' => 'Hire Drupal Developer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-drupal-developer')->with($data);
    }
    public function hire_softwaretester(){
        $data = [
            'title' => 'Hire Software Tester in India - Plutus Technologies'
        ];
        return view('hire_resources.hire_softwaretester')->with($data);
    }
    public function hire_digitalmarketer(){
        $data = [
            'title' => 'Hire Digital Marketer in India - Plutus Technologies'
        ];
        return view('hire_resources.hire_digitalmarketer')->with($data);
    }
    public function hire_support_team(){
        $data = [
            'title' => 'Hire Support Team in India - Plutus Technologies'
        ];
        return view('hire_resources.hire-support-team')->with($data);
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
        }else  if($_POST["page"] === 'hiredevelopers' && $_POST['firstName'] !== '' && $_POST['lastName'] !== '' && $_POST['phone'] !== '' && $_POST['email'] !== '' && $_POST['technology'] !== '' && $_POST['budget'] !== '' && $_POST['msg'] !== '' && $_FILES['doc'] !== ''){
            
            $uploadOk = 1;
            $target_file = basename($_FILES["doc"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check file size
            if ($_FILES["doc"]["size"] > 2000000) {
                $uploadOk = 0;
                $response = ['success' => false, 'message' => "Sorry, your file is too large.", 'error' => $_FILES["doc"]["size"] ];
                echo json_encode($response);
            }
            // Allow certain file formats .pdf, .doc, .docx            
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
                    'technology'=>$_POST['technology'],
                    'budget'=>$_POST['budget'],
                    'msg'=>$_POST['msg'],                    
                    'doc' => $_FILES["doc"]["name"],
                    'file_type' =>$imageFileType
                );
                $file = $request->file('doc');
                \Mail::send('emails.hiredeveloper', $data, function ($message) use($data, $file){    
                    $message->from($data['email']);
                    $message->to($data['email'])->subject('Test mode : '.$_POST["firstName"].' is hirinf developer.');
            
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
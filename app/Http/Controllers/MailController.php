<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class MailController extends Controller 
{
   public function book_app($doc_name, $app_time, $app_date) 
    {
        $data = array($doc_name => $doc_name, $app_time => $app_time, $app_date => $app_date);

        Mail::send(['text'=>'mail'], $data, function($message) use ($doc_name, $app_time, $app_date)
        {
            $message->to(auth()->user()->email, auth()->user()->name)->subject
                ('Appointment booked Successfully with Dr. '.$doc_name.' on '.$app_date.' from '.$app_time.'!');
            $message->from('rishivchhabria2@gmail.com','Rishiv Chhabria');
        });
        // echo "Basic Email Sent. Check your inbox.";

        // Mail::send('emails.offerte_reactie', ['offerte' => $offerte, 'user' => $user, 'message_text' => $message_text], function ($message) use ($user, $offerte)
        // {
        //     $message->from($user->email, 'Foodtruckbestellen.be');
        //     $message->to($offerte->email);
        //     $message->subject('Reactie offerte Foodtruckbestellen.be');
        // });

    }


    public function update_app($doc_name, $app_time, $app_date) 
    {
        $data = array($doc_name => $doc_name, $app_time => $app_time, $app_date => $app_date);

        Mail::send(['text'=>'update_app'], $data, function($message) use ($doc_name, $app_time, $app_date)
        {
            $message->to(auth()->user()->email, auth()->user()->name)->subject
                ('Appointment updated Successfully with Dr. '.$doc_name.' on '.$app_date.' from '.$app_time.'!');
            $message->from('rishivchhabria2@gmail.com','Rishiv Chhabria');
        });

    }
//    public function html_email() 
//    {
//       $data = array('name'=>"Rishiv Chhabria");
//       Mail::send('mail', $data, function($message) 
//       {
//          $message->to('rishivchhabria@gmail.com', 'Tutorials Point')->subject
//             ('Laravel HTML Testing Mail');
//          $message->from('rishivchhabria2@gmail.com','Rishiv Chhabria');
//       });
//       echo "HTML Email Sent. Check your inbox.";
//    }
//    public function attachment_email() 
//    {
//       $data = array('name'=>"Rishiv Chhabria");
//       Mail::send('mail', $data, function($message) {
//          $message->to('rishivchhabria@gmail.com', 'Tutorials Point')->subject
//             ('Laravel Testing Mail with Attachment');
//         //  $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
//         //  $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
//          $message->from('rishivchhabria2@gmail.com','Rishiv Chhabria');
//       });
//       echo "Email Sent with attachment. Check your inbox.";
//    }
}
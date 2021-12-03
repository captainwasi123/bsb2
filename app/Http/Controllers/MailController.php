<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Carbon\Carbon;

class MailController extends Controller
{
     public function send()
    {

        $now = Carbon::now()->subDays(25);
        $data = User::where('is_feature',2)->whereDate('updated_at', '=',$now->toDateString())->orderby('created_at', 'Desc')->get();

        foreach ($data as $val) {

            $to_name = $val->name;
            $to_email = $val->email;
            $data = array("name"=>$val->name);
            
            Mail::send('mail.sendMail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject("Subscription Expiry Notification");
            $message->from("Info@bsb.com","Test Mail");
            });

        }
        return redirect()->back()->with('success', 'Email has been sent successfully');

  

    }

  
}

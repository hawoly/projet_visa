<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendMail;
use Mail;
class ContactEmailController extends Controller
{
    public function send(Request $request){
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'phone'=>     'required',
            'message' =>  'required'
           ]);
              $data = array(
                  'name'      =>  $request->name,
                  'email'     =>  $request->email,
                  'phone'     =>  $request->phone,
                  'message'   =>   $request->message
              );
              $name=$data['name'];
              $email=$data['email'];     
           Mail::to('samaavisaa@gmail.com')->send(new ContactSendMail($data));
         /* Mail::send('contactemail',$data,function($message) use($name,$email){
            $message
          // $message->from($email,'laravel');
          ->from($email,'some_name') 
          ->to('samaavisaa@gmail.com') 
            ->subject('lessai subject');
            
       });*/
           return back()->with('success', 'Thanks for contacting us!');
      
    }
}

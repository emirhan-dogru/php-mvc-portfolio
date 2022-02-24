<?php

namespace App\Controllers\Frontend;

use App\Models\About;
use App\Models\Contact;
use Core\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $data = About::where('id', '1')->first();
        return $this->view('frontend.contact' , compact('data'));
    }

    public function sendMessage()
    {
        try {
        $data =  [
            'name_surname' => $_POST['name_surname'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];

        $addMessage = Contact::create($data);

        if (!$addMessage) {
            throw "Mesajınız gönderilirken bir sorun oluştu";
        }

            header('Location: ' . base_url('/iletisim?success=true'));
        }
        catch (\Exception $e) {
             $message = '?success=false';
             header('Location: ' . base_url('/iletisim' . $message));
        }
        
        exit;
    }
}

?>
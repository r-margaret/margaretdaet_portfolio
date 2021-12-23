<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Mail\VisitorMail;
use Illuminate\Support\Facades\Mail;


class VisitorContact extends Component
{

    public $name = "";
    public $email = "";
    public $message = "";

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Hi! Your name is required.',
        'message.required' => 'Hi! Your message is required.',
    ];

    // public function submitForm(){
    //     $this->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ]);

    //     dd($this->name, $this->email, $this->message);
    // }

    public function saveMessage(){
        $this->validate();
        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        Mail::to('margaret@mailtrap.com')->send(new VisitorMail($this->name, $this->email, $this->message));

        $this->name = "";
        $this->email = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.visitor-contact');
    }
}

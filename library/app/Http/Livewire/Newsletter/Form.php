<?php

namespace App\Http\Livewire\Newsletter;

use Livewire\Component;

class Form extends Component
{
	public string $name = '';
	public string $email = '';

	protected $rules = [
		'name'		 => ['required'],
		'email'		 => ['required', 'email', 'unique:subscribers'],

	];
	public function formSubmit()
	{
		$this ->validate();

		$token = bcrypt($this->email);

		$data = array(
			'name'		=> $this->name,
			'email'		=>$this->email,
		);
		(new EmailSubscriberAction)([
			'name'	=>$this->name,
			'email'	=>$this->email,
			'token'	=>$token,

		]);
		if(!Newsletter::isSubscribed($this->email)){
			Newsletter::subscribe($this->email, ['NAME' =>$this->name, 'TOKEN' => $token]);
		}

		Mail::to($this->email)
			->bcc('ahmadi.sorya@yahoo.com' ,'Sorya')
			->send(new SubscriberMailable($data));

		session()->flash('Success', 'You are Subscribed');

		$this->reset();

	}
    public function render()
    {
        return view('livewire.newsletter.form');
    }
}

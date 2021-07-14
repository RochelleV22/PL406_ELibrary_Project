<?php

namespace App\Action\NewsLetter;
use App\Models\Subscriber;

class EmailSubscriberAction
{
	public function __invoke(array $formData)
	{
		$this->getOrCreateSubscriberEmail($formData);

	}
	private function getOrCreateSubscriberEmail(array $formData):Subscriber
	{
		return Subscriber::firstOrCreate($formData);
	}

}
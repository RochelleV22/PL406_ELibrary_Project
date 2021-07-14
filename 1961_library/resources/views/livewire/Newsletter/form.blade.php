<x-jet-validation-errors class="mb-4" />
  
  <form wire:submit.prevent="formSubmit">
  
        <div class="signin-head">
  	        <div>
                <x-jet-input  wire:model="name" id="name" class="form-control" type="text" name="name" placeholder="Enter your Name!"
                :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-input wire:model="email" id="email" class="form-control" type="email" name="email" placeholder="Enter your Email!" :value="old('email')" required />
            </div>
            <x-jet-button class="form-control">
                    {{ __('Subscribe') }}
            </x-jet-button>

</div>

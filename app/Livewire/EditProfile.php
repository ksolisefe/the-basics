<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use App\Models\User;
use Flux\Flux;
use FluxPro\FluxPro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{    
    public ProfileForm $form;
    
    public $showSuccessIndicator = false;
    
    public function mount()
    {
        $this->form->setUser(Auth::user());
    }

    public function save()
    {
        $this->form->update();
        
        sleep(1);

        $this->showSuccessIndicator = true;
    }
    
    public function render()
    {
        return view('livewire.edit-profile');
    }
}

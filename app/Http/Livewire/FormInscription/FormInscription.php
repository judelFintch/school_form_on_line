<?php

namespace App\Http\Livewire\FormInscription;

use Livewire\Component;

class FormInscription extends Component
{
    
    //st =student
    public $st_name,$st_sexe,$st_birthdate,$st_birthdayplace,
           $st_spoken,$st_phone,$st_province,$st_district,$st_pays,$st_addres;

    public 
    public function render()
    {
        return view('livewire.form-inscription.form-inscription');
    }
}

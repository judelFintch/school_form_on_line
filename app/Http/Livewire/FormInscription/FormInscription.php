<?php

namespace App\Http\Livewire\FormInscription;

use Livewire\Component;
use App\Models\Students as Students;
use App\Models\Parents as Parents;
use App\Models\Health  as Health;
use App\Models\Sollicitation as Sollicitation;

class FormInscription extends Component
{
    public $st_name, $st_sexe, $st_birthdate, $st_birthdayplace, $st_spoken, $st_phone, $st_province, $st_district, $st_pays, $st_addres;
    public $first_parent_name, $second_parent_name, $first_contact, $second_contact;
    public $section, $options, $classe, $health;
    public $section_values = [], $classe_values = [], $options_values;

    public function section()
    {

        $sectionData = [
            1 => [
                'options' => ['Creche'],
                'classe' => ['1']
            ],
            2 => [
                'options' => ['Pre-mat'],
                'classe' => ['1']
            ],
            3 => [
                'options' => ['Maternelle'],
                'classe' => ['1', '2', '3']
            ],
            4=> [
                'options' => ['Primaire'],
                'classe' => ['1', '2', '3', '4', '5', '6']
            ],
            5 => [
                'options' => ['Enseignement de base'],
                'classe' => ['7', '8']
            ],
            6 => [
                'options' => ['Scientifique', 'Litteraire', 'Pedagogie General'],
                'classe' => ['3', '4', '5', '6']
            ],
            7 => [
                'options' => ['Construction et Architecture', 'Coupe et Couture', 'Electricite', 'Commercial et Gestion', 'Hotellerie et Restaurant', 'Electronique'],
                'classe' => ['3', '4', '5', '6']
            ]
        ];


    //    $this->sections = $sectionData[$this->section];


        if (isset($sectionData[$this->section])) {
            $section = $sectionData[$this->section];
           $this->section_values = $section['options'];
            $this->classe_values = $section['classe'];
        } else {
            $this->section_values = [];
            $this->classe_values = [];
        }

        $this->options_values = null;
    }

    public function resetfiled(){

        $this->st_name ='';
        $this->st_birthdate ='';
        $this->st_birthdayplace ='';
        $this->st_district ='';
        $this->st_pays ='';
        $this->st_province='';
        $this->st_sexe ='';
        $this->st_addres ='';
    }

    protected $rules = [
        'st_name' => 'required',
        'st_birthdate' => 'required',
        'st_birthdayplace' => 'required',
        'st_spoken' => 'required',
        'st_province' => 'required',
        'st_district' => 'required',
        'st_pays' => 'required',
        'st_addres' => 'required',
        'first_parent_name' => 'required',
        'second_parent_name' => 'required',
        'first_contact' => 'required',
        'options_values' => 'required',
        'st_sexe' => 'required',
    ];

    public function render()
    {
        $section = $this->section;
        return view('livewire.form-inscription.form-inscription', compact('section'));
    }

    public function store()
    {
       $this->validate();
        try {
            $students = Students::create([
                'name' => $this->st_name,
                'sexe' => $this->st_sexe,
                'birthdate' => $this->st_birthdate,
                'birthdayplace' => $this->st_birthdayplace,
                'spoken' => $this->st_spoken,
                'phone' => $this->st_phone,
                'district' => $this->st_district,
                'pays' => $this->st_pays,
                'address' => $this->st_addres,
                'province' => $this->st_province,
            ]);

            $parents = Parents::create([
                'first_parent_name' => $this->first_parent_name,
                'second_parent_name' => $this->second_parent_name,
                'first_contact' => $this->first_contact,
                'second_contact' => $this->second_contact,
                'id_student' => $students->id
            ]);

            $classe = Sollicitation::create([
                'section' => $this->section,
                'options' => $this->options_values,
                'classe' => $this->classe,
                'id_student' => $students->id
            ]);

           $health = Health::create([
            'health' => $this->health,
            'id_student' => $students->id
           ]);

           $this->resetfiled();

           session()->flash('message','Reservation reussi');


        } catch (\Exception $e) {
            session()->flash('message','Reservation echouee');
        }
    }

    public function select_section($id){
        dd($id);
    }
}

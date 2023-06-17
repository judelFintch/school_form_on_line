<?php

namespace App\Http\Livewire\FormInscription;

use Livewire\Component;
use App\Models\Students as Students;
use App\Models\Parents as Parents;
use App\Models\Health as Health;
use App\Models\Sollicitation as Sollicitation;


class FormInscription extends Component
{

//st =student
        public $st_name,$st_sexe,$st_birthdate,$st_birthdayplace, $st_spoken,$st_phone,$st_province,$st_district,$st_pays,$st_addres, $options_values;
        public $first_parent_name,$second_parent_name,$first_contact,$second_contact;
        public $section,$options,$classe,$health,$section_values= array(), $classe_values=array();

public function mount(){
//a refactorer Dont repeat
      //  $this->section_values =array('');
        //$this->classe_values= array('');
      
}

public function sections(){
//a mettre dans une base de donnee
        $creche_options =array('Creche');
        $premat_options =array('Pre-mat');
        $mat_options =array('Maternelle');
        $prim_options =array('Primaire');
        $sec_eb_options =array('Enseignement de base');
        $sec_gen_options =array('Scientifique','Litteraire','Pedagogie General');
        $sec_tech_options =array('Construction et Architecture','Coupe et Couture','Electricite','Commercial et Gestion','Hotellerie et Restaurant','Electronique');
        ///a dynamyse avec une base de donnee
        $classe_creche = array('Creche');
        $classe_premat = array('Creche');
        $classe_mat = array('1','2','3');
        $classe_eb = array('7','8');
        $classe_elem= array('3','4','5','6');
        $classe_prim= array('1','2','3','4','5','6');

        if($this->section == 1){

       
            $this->reset('section_values');
            $this->section_values = $creche_options;
            $this->classe_values =$classe_creche;
        }

        if($this->section == 2){
            $this->reset('section_values');
            $this->section_values = $premat_options;
            $this->classe_values =$classe_premat;
        }

        if($this->section == 3){
            $this->section_values = $mat_options;
            $this->classe_values =$classe_mat;
        }

        if($this->section == 4){
            $this->section_values = $prim_options;
            $this->classe_values =$classe_prim;
        }

        if($this->section == 5){
            $this->section_values = $sec_eb_options;
            $this->classe_values =$classe_eb;
        }

        if($this->section == 6){
            $this->section_values = $sec_gen_options;
            $this->classe_values =$classe_elem;
        }

        if($this->section == 7){
            $this->section_values = $sec_tech_options; 
            $this->classe_values =$classe_elem; 
        }
}
        protected $rules =
        [
        'st_name' => 'required',
        'st_birthdate' => 'required',
        'st_birthdayplace' =>'required',
        'st_spoken' =>'required',
        'st_province'  =>'required',
        'st_district'  =>'required',
        'st_pays'  =>'required',
        'st_addres'  =>'required',
        'first_parent_name'  =>'required',
        'second_parent_name'  =>'required',
        'first_contact'  =>'required',
        'st_sexe'  =>'required',
        ] ;
public function render(){
        $section = $this->section;
        return view('livewire.form-inscription.form-inscription', compact('section'));
}


public function store(){
        $this->validate();
        try{

        $students = Students::create(
                [
                    'name' =>$this->st_name,
                    'sexe' =>$this->st_sexe,
                    'birthdate' =>$this->st_birthdate,
                    'birthdayplace' =>$this->st_birthdayplace,
                    'spoken' =>$this->st_spoken,
                    'phone' =>$this->st_phone,
                    'district' =>$this->st_district,
                    'pays' =>$this->st_pays,
                    'address' =>$this->st_addres,
                    'province' =>$this->st_province,
                ]);

            $parents = Parents::create(
                [
                    'first_parent_name' =>$this->first_parent_name,
                    'second_parent_name' =>$this->second_parent_name,
                    'first_contact' =>$this->first_contact,
                    'second_contact' =>$this->second_contact,
                    'id_student' =>$students->id
                ]
            );

            $classe =Sollicitation::create(
                    [
                        'section' =>$this->section,
                        'options' =>$this->options_values,
                        'classe' => $this->	classe,
                        'id_student' =>$students->id

                    ]
                );

        }
        catch(\Exception $e){
                dd($e);

        }
}

}

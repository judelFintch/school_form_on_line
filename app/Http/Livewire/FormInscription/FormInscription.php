<?php

namespace App\Http\Livewire\FormInscription;

use Livewire\Component;

class FormInscription extends Component
{

//st =student
    public $st_name,$st_sexe,$st_birthdate,$st_birthdayplace, $st_spoken,$st_phone,$st_province,$st_district,$st_pays,$st_addres;

    public $first_parent_name,$second_parent_name,$first_contact,$second_contact;
    public $section,$options,$classe,$health,$section_values= array(), $classe_values=array();

public function mount(){
//a refactorer Dont repeat
    $mat_options =array('Creche','Premat','Maternelle');
    $this->section_values =array('CRECHE','Premat','Maternelle');
    $this->classe_values = array('Creche');
}

public function sections(){
//a mettre dans une base de donnee
    $mat_options =array('Creche','Premat','Maternelle');
    $prim_options =array('Primaire');
    $sec_eb_options =array('Enseignement de base');
    $sec_gen_options =array('Scientifique','Litteraire','Pedagogie General');
    $sec_tech_options =array('Construction et Architecture','Coupe et Couture','Electricite','Commercial et Gestion','Hotellerie et Restaurant','Electronique');
  ///a dynamyse avec une base de donnee
    $classe_creche = array('Creche');
    $classe_mat = array('1','2','3');
    $classe_eb = array('7','8');
    $classe_elem= array('3','4','5','6','7','8');
    $classe_prim= array('1','2','3','4','5','6');


    if($this->section == 1){
    $this->section_values = $mat_options;
    $this->classe_values =$classe_mat;
    }

    if($this->section == 2){
    $this->section_values = $prim_options;
    }

    if($this->section == 3){
    $this->section_values = $sec_eb_options;
    }

    if($this->section == 4){
    $this->section_values = $sec_gen_options;
    }

    if($this->section == 5){
    $this->section_values = $sec_tech_options;  
}
}
public function render()
{

$section = $this->section;
return view('livewire.form-inscription.form-inscription', compact('section'));
}


public function classes(){

}





public function store(){

}


}

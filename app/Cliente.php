<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','email','endereco'];


    public function telefones()
    {
    	return $this->hasMany('App\Telefone');
    }


    // Método para adicionar telefones.
    public function addTelefone(Telefone $tel)
    {
    	return $this->telefones()->save($tel);
    }


    // Método para deletar telefones.
    public function deletarTelefones()
    {
    	foreach ($this->telefones as $tel) {
    		$tel->delete();
    	}

    	return true;
    }

}

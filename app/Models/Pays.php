<?php
namespace app\Models;
use kernel\Model;
use kernel\Connexion;

class Pays extends Model{

    protected static string $table='pays';

    public function save()
    {
        $query = "update pays set name=:name where id=:id";
        Connexion::execute($query, ['name' => $this->name, "id" => $this->id]);
    }
}
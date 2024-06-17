<?php

namespace App\Models;
use CodeIgniter\Model;

class Player extends Model {

    protected $table = "player";
    protected $primaryKey = "id_player";
    protected $returnType = "object";

}
?>
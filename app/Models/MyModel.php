<?php 
namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'aboutme';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'desc', 'place'];
}
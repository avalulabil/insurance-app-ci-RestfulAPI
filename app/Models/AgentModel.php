<?php
namespace App\Models;
use CodeIgniter\Model;

class AgentModel extends Model {
    protected $table = 'agents';
    protected $allowedFields = ['username', 'password'];
}
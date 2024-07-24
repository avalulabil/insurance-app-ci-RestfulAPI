<?php
namespace App\Models;
use CodeIgniter\Model;

class PolicyModel extends Model {
    protected $table = 'policies';
    protected $allowedFields = [
        'customer_name', 'coverage_period_start', 'coverage_period_end', 
        'vehicle', 'coverage_price', 'coverage_type', 
        'risk_flood', 'risk_earthquake', 'total_premium'
    ];
}
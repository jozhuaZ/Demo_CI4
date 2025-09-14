<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'employee';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
                                    'FirstName', 
                                    'LastName', 
                                    'Email', 
                                    'Salary'
                                ];

    public function createUser(array $data): bool
    {
        try {
            return $this->insert($data) !== false;
        } catch (\Throwable $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }
}

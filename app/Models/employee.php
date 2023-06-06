<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'epl_id';
    protected $fillable = ['epl_name',
                            'epl_jobtitle',
                            'epl_phonenumber',
                            'epl_gender',
                            'epl_salary',
                            'epl_age',
                            'epl_workstatus',
                            'created_at',
                            'updated_at',
                            'epl_uname',
                            'epl_password'];

    public function expense(){
        return $this->belongsToMany(expense::class, 'expense_employee', 'exp_id', 'epl_id');
    }

    public function transaction(){
        return $this->belongsToMany(transaction::class, 'employee_transaction', 'epl_id', 'tsc_id');
    }

    public function delivery(){
        return $this->hasMany(delivery::class, 'employee_epl_id');
    }
}

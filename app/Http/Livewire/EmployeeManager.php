<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Exception;

class EmployeeManager extends Component
{
    public $full_name    = '';
    public $email        = '';
    public $address      = '';
    public $phone        = '';
    public $department   = '';
    public $designation  = '';
    public $joining_date = '';
    public $photo        = '';

    public function render()
    {
        return view('livewire.employee-manager');
    }

    public function Save(){
        try{
            $this->validate([
                'full_name'    => 'required|max:255',
                'email'        => 'required',
                'address'      => 'required',
                'phone'        => 'required',
                'department'   => 'required',
                'designation'  => 'required',
                'joining_date' => 'required',
            ]);
            $employee               = new Employee;
            $employee->full_name    = $this->full_name;
            $employee->email        = $this->email;
            $employee->address      = $this->address;
            $employee->phone        = $this->phone;
            $employee->department   = $this->department;
            $employee->designation  = $this->designation;
            $employee->joining_date = $this->joining_date;
            $employee->save();

            // $employee->reset();
            $this->reset();

            return "created";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}

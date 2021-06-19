<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class EmployeeList extends Component
{
    public $employees;
    public function render()
    {
        return view('livewire.employee-list');
    }
    public function mount(){
        $this->allEmployees();
    }
    public function getEmployeeProperty()
    {
        
    }
    public function allEmployees(){
        return $this->employees = Employee::all();
    }
    public function Delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        $this->employees = $this->allEmployees();
        return "deleted";
    }
}

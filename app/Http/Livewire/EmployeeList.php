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
        return $this->employees = Employee::all();
    }
    public function getEmployeeProperty()
    {
        
    }
}

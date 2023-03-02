<?php

namespace App\Http\Livewire\Admin;

use App\Models\department;
use App\Models\subdepartment;
use App\Models\User;
use Livewire\Component;

class AdminEmploye extends Component
{
    public $emp_name;
    public $emp_email;
    public $emp_password;
    public $emp_department;
    public $emp_position;
    public $emp_salary;
    public $test = "try";
    public $deps;
    public $employe;
    public $sub_deps = [];
    public function mount()
    {
        $this->employe = User::all();
        $this->deps = department::all();
    }
    public function changeEvent($value = null)
    {
        if ($value != null) {
            $this->sub_deps = subdepartment::where('dep_id', $value)->get();
        }
    }
    public function addEmploye()
    {
        $this->validate([
            'emp_name' => 'required',
            'emp_email' => 'required|email|unique:users,email',
            'emp_password' => 'required',
            'emp_department' => 'required',
            'emp_position' => 'required',
            'emp_salary' => 'required|integer',
        ]);
        $this->emp_password = md5($this->emp_password);
        $user = new User;
        $user->name = $this->emp_name;
        $user->email = $this->emp_email;
        $user->password = $this->emp_password;
        $user->department_id = $this->emp_department;
        $user->sub_department_id = $this->emp_position;
        $user->salary = $this->emp_salary;
        if ($user->save()) {
            $this->dispatchBrowserEvent('swal:message', [
                'icon' => 'success',
                'text' => 'Success! Employe registered successfully.',
            ]);
            $this->emp_name = '';
            $this->emp_email = '';
            $this->emp_password = '';
            $this->emp_department = '';
            $this->emp_position = '';
            $this->emp_salary = '';
        }
    }
    public function test()
    {
        $this->test = "now done";
    }
    public function render()
    {
        return view('livewire.admin.admin-employe')->layout('layouts.admin-base');
    }
}

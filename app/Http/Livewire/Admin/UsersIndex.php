<?php

namespace App\Http\Livewire\Admin;

use App\Models\Person;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class UsersIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        // $users = User::where('name', 'LIKE', '%'.$this->search.'%')
        // ->orWhere('app', 'LIKE', '%'.$this->search.'%')
        // ->paginate();
        $users = User::with('people')
        ->where('email', 'LIKE', '%'.$this->search.'%')
        ->paginate(20);
        return view('livewire.admin.users-index', compact('users'));
    }
}

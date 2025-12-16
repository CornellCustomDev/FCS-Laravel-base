<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;

#[Title("CD Laravel Base - User Table Example")]


class UserTable extends Component
{
    use WithPagination;

    public $sortBy = 'name';
    public $sortDirection = 'asc';

    public function render()
    {
        // add additional data to the view if needed
        return view('livewire.users.user-table');
    }

    public function sort($column) {

       if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[Computed]
    public function users()
    {
        return User::orderBy($this->sortBy, $this->sortDirection)->paginate(5);
            // simple pagination:
            // return User::orderBy($this->sortBy, $this->sortDirection)->simplePaginate(5);
    }

}

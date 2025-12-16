<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;

#[Title("CD Laravel Base - User Examples")]

class UserExamples extends Component
{
    public $users;
    public $userId = null;
    public $selectedUser = null;

    public function mount()
    {
        $this->users = User::select('id', 'name')->get();
    }

    public function updatedUserId($userId)
    {
        if (is_null($userId) || !($user = User::find($userId))) {
            $this->selectedUser = null;
        } else {
            $this->selectedUser = $user;
        }
    }

    public function render()
    {
        return <<<'HTML'
            <div>
                <x-layouts.main-article>
                    <h1>User Examples</h1>
                    <p>
                        Examples to use CDS components with User data.
                    </p>

                    <flux:separator />
                    <x-layouts.section class="region padded-small">
                        <x-cds.select
                            name="users"
                            label="Select Users"
                            :options="$this->users->pluck('name', 'id')->toArray()"
                            wire:model.live="userId"
                        />
                        <flux:separator class="mb-4" />
                        Selected user: {{ $this->selectedUser?->name ?? 'None' }}
                    </x-layouts.section>
                </x-layouts.main-article>
            </div>
        HTML;
    }
}

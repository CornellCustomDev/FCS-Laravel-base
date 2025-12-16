<div>
    <x-layouts.main-article>
        <h1>FluxTable</h1>
        <p>
            This is a sample table using the Cornell Design System styles.
        </p>

        <flux:separator />

        <x-layouts.section class="region padded-small">
            <h2>Users Table</h2>

            <flux:table class="cds-table" :paginate="$this->users" >

                <flux:table.columns>
                    <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:table.column>
                    <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection"  wire:click="sort('email')">Email</flux:table.column>
                    <flux:table.column sortable :sorted="$sortBy === 'created_at'" :direction="$sortDirection" wire:click="sort('created_at')">Created At</flux:table.column>
                    <flux:table.column>Actions</flux:table.column>
                </flux:table.columns>
                <flux:table.rows>
                    @foreach($this->users as $user)
                        <flux:table.row :key="$user->id">
                            <flux:table.cell class="flex items-center gap-3">{{ $user->name }}</flux:table.cell>
                            <flux:table.cell class="whitespace-nowrap">{{ $user->email }}</flux:table.cell>
                            <flux:table.cell variant="strong">{{ $user->created_at }}</flux:table.cell>
                            <flux:table.cell>
                                 <flux:dropdown position="bottom" align="end" offset="-15">
                                <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                                <flux:menu>
                                    <flux:menu.item icon="pencil">Edit</flux:menu.item>
                                    <flux:menu.item icon="trash" variant="danger">Delete</flux:menu.item>
                                </flux:menu>
                            </flux:dropdown>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table.rows>
            </flux:table>
            {{-- <flux:pagination :paginator="$this->users" /> --}}

        </x-layouts.section>
    </x-layouts.main-article>
</div>

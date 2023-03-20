<div class="mt-8 min-h-screen">
    <div class="flex justify-between">
        <div class="text-2xl">Relatives</div>
        <button type="submit" wire:click="$emitTo('relative-child', 'showCreateForm');" class="text-blue-500">
            <x-tall-crud-icon-add />
        </button> 
    </div>

    <div class="mt-6">
        <div class="flex justify-between">
            <div class="flex">

            </div>
            <div class="flex">

                <x-tall-crud-page-dropdown />
            </div>
        </div>
        <table class="w-full whitespace-no-wrap mt-4 shadow-2xl text-xs" wire:loading.class.delay="opacity-50">
            <thead>
                <tr class="text-left font-bold bg-blue-400">
                <td class="px-3 py-2" >Name</td>
                <td class="px-3 py-2" >Document ID</td>
                <td class="px-3 py-2" >RelationShip</td>
                <td class="px-3 py-2" >Birthdate</td>
                <td class="px-3 py-2" >Actions</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
            @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? "bg-blue-100" : ""}}">
                    <td class="px-3 py-2" >{{ $result->name }}</td>
                    <td class="px-3 py-2" >{{ $result->documentid }}</td>
                    <td class="px-3 py-2" >{{ $result->relationship }}</td>
                    <td class="px-3 py-2" >{{ $result->birthdate }}</td>
                    <td class="px-3 py-2" >
                        <button type="submit" wire:click="$emitTo('relative-child', 'showEditForm', {{ $result->id}});" class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit" wire:click="$emitTo('relative-child', 'showDeleteForm', {{ $result->id}});" class="text-red-500">
                            <x-tall-crud-icon-delete />
                        </button>
                    </td>
               </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $results->links() }}
    </div>
    @livewire('relative-child')
    @livewire('livewire-toast')
</div>
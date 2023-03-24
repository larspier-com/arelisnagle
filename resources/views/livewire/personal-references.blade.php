<div class="mt-8 min-h-screen"x-data="{
    selectedColumns: @entangle('selectedColumns').defer,
    columns: @entangle('columns').defer,
    hasColumn(column) {
        var columns = this.selectedColumns;
        var column = columns.find(e => {
            return e.toLowerCase() === column.toLowerCase()
        })
        return column != undefined;
    }
}">
    <div class="flex justify-between">
        <div class="text-2xl">Personal_References</div>
        <button type="submit" wire:click="$emitTo('personal-references-child', 'showCreateForm');" class="text-blue-500">
            <x-tall-crud-icon-add />
        </button> 
    </div>

    <div class="mt-6">
        <div class="flex justify-between">
            <div class="flex">

                <x-tall-crud-filter :filters=$filters />
            </div>
            <div class="flex">

                <x-tall-crud-columns-dropdown />
                <x-tall-crud-page-dropdown />
            </div>
        </div>
        <table class="w-full whitespace-no-wrap mt-4 shadow-2xl text-xs" wire:loading.class.delay="opacity-50">
            <thead>
                <tr class="text-left font-bold bg-blue-400">
                <td class="px-3 py-2" x-show="hasColumn('Personal Reference')">
                    <div class="flex items-center">
                        <button wire:click="sortBy('id')">Personal Reference</button>
                        <x-tall-crud-sort-icon sortField="id" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                    </div>
                </td>
                <td class="px-3 py-2" x-show="hasColumn('Name')">Name</td>
                <td class="px-3 py-2" x-show="hasColumn('DNI')">DNI</td>
                <td class="px-3 py-2" x-show="hasColumn('Email')">Email</td>
                <td class="px-3 py-2" x-show="hasColumn('Phone number')">Phone number</td>
                <td class="px-3 py-2" x-show="hasColumn('Address')">Address</td>
                <td class="px-3 py-2" x-show="hasColumn('Country')">Country</td>
                <td class="px-3 py-2" x-show="hasColumn('City')">City</td>
                <td class="px-3 py-2" x-show="hasColumn('Reference Type')">Reference Type</td>
                <td class="px-3 py-2" >Actions</td>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue-400">
            @foreach($results as $result)
                <tr class="hover:bg-blue-300 {{ ($loop->even ) ? "bg-blue-100" : ""}}">
                    <td class="px-3 py-2" x-show="hasColumn('Personal Reference')">{{ $result->id }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Name')">{{ $result->name }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('DNI')">{{ $result->documentid }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Email')">{{ $result->email }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Phone number')">{{ $result->mobile }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Address')">{{ $result->address }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Country')">{{ $result->country }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('City')">{{ $result->city }}</td>
                    <td class="px-3 py-2" x-show="hasColumn('Reference Type')">{{ $result->type-of-reference }}</td>
                    <td class="px-3 py-2" >
                        <button type="submit" wire:click="$emitTo('personal-references-child', 'showEditForm', {{ $result->id}});" class="text-green-500">
                            <x-tall-crud-icon-edit />
                        </button>
                        <button type="submit" wire:click="$emitTo('personal-references-child', 'showDeleteForm', {{ $result->id}});" class="text-red-500">
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
    @livewire('personal-references-child')
    @livewire('livewire-toast')
</div>
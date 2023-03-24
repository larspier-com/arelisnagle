<div>

    <x-tall-crud-confirmation-dialog wire:model="confirmingItemDeletion">
        <x-slot name="title">
            Delete Record
        </x-slot>

        <x-slot name="content">
            Are you sure you want to Delete Record?
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemDeletion', false)">Cancel</x-tall-crud-button>
            <x-tall-crud-button mode="delete" wire:loading.attr="disabled" wire:click="deleteItem()">Delete</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-confirmation-dialog>

    <x-tall-crud-dialog-modal wire:model="confirmingItemCreation">
        <x-slot name="title">
            {{__('Add Record')}}
        </x-slot>

        <x-slot name="content">
            <div class="flow-root">
                <div class="flex justify-between">
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Name') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.name" />
                        @error('item.name') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    <div class="w-1/6 px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('DNI') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.documentid" />
                        @error('item.documentid') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                </div>
            </div>
            <div class="flow-root">
                <div class="flex justify-between">
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Email') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.email" />
                        @error('item.email') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Phone number') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.mobile" />
                        @error('item.mobile') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                </div>
            </div>
            <div class="flow-root">
                <div class="flex justify-between">
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Country') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.country" />
                        @error('item.country') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('City') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.city" />
                        @error('item.city') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                    <div class="w-full px-3 mt-4">
                        <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Address') }}</x-tall-crud-label>
                        <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.address" />
                        @error('item.address') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                    </div>
                </div>
            </div>
            <div class="flow-root">
                <div class="flex justify-between">
                    <div class="grid grid-cols-3">
                        <div class="w-full px-3 mt-4">
                            <x-tall-crud-label class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Reference Type') }}</x-tall-crud-label>
                            <x-tall-crud-select class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" wire:model.defer="item.type-of-reference">
                                <option value="">Please Select</option>
                                <option value="personal">personal</option>
                                <option value="emergency">emergency</option>
                                <option value="security">security</option>
                            </x-tall-crud-select>
                            @error('item.type-of-reference') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer" class="gap-5">
            <x-tall-crud-button wire:click="$set('confirmingItemCreation', false)"  class="mr-8 inline-block float-right px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-fuchsia border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-fuchsia hover:border-slate-700 hover:bg-fuchsia-700 hover:text-white">Cancel</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="createItem()"  class="ml-8 inline-block float-right px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-fuchsia border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                {{__('Save')}}
            </x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>

    <x-tall-crud-dialog-modal wire:model="confirmingItemEdit">
        <x-slot name="title">
            {{__('Edit Record')}}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-tall-crud-label>Name</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.name" />
                @error('item.name') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>DNI</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.documentid" />
                @error('item.documentid') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Email</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.email" />
                @error('item.email') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Phone number</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.mobile" />
                @error('item.mobile') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Address</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.address" />
                @error('item.address') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Country</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.country" />
                @error('item.country') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>City</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.city" />
                @error('item.city') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>
            <div class="mt-4">
                <x-tall-crud-label>Reference Type</x-tall-crud-label>
                <x-tall-crud-input class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" type="text" wire:model.defer="item.type-of-reference" />
                @error('item.type-of-reference') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
            </div>

            <div class="grid grid-cols-3">
                <div class="mt-4">
                    <x-tall-crud-label>User</x-tall-crud-label>
                    <x-tall-crud-select class="block mt-1 w-full" wire:model.defer="item.user_id">
                        <option value="">Please Select</option>
                        @foreach($users as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </x-tall-crud-select>
                    @error('item.user_id') <x-tall-crud-error-message>{{$message}}</x-tall-crud-error-message> @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-tall-crud-button wire:click="$set('confirmingItemEdit', false)" class="inline-block float-right px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-fuchsia border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-fuchsia hover:border-slate-700 hover:bg-fuchsia-700 hover:text-white">Cancel</x-tall-crud-button>
            <x-tall-crud-button mode="add" wire:loading.attr="disabled" wire:click="editItem()" class="ml-4 inline-block float-right px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-fuchsia border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">Save</x-tall-crud-button>
        </x-slot>
    </x-tall-crud-dialog-modal>
</div>

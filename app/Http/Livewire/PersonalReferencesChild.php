<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use \Illuminate\View\View;
use App\Models\PersonalReference;
use Illuminate\Support\Facades\Auth;

class PersonalReferencesChild extends Component
{

    public $item;

    /**
     * @var array
     */
    protected $listeners = [
        'showDeleteForm',
        'showCreateForm',
        'showEditForm',
    ];

    /**
     * @var array
     */
    public $users = [];

    /**
     * @var array
     */
    protected $rules = [
        'item.name' => '',
        'item.documentid' => '',
        'item.email' => '',
        'item.mobile' => '',
        'item.address' => '',
        'item.country' => '',
        'item.city' => '',
        'item.type-of-reference' => '',
        'item.user_id' => 'required',
    ];

    /**
     * @var array
     */
    protected $validationAttributes = [
        'item.name' => 'Name',
        'item.documentid' => 'DNI',
        'item.email' => 'Email',
        'item.mobile' => 'Phone number',
        'item.address' => 'Address',
        'item.country' => 'Country',
        'item.city' => 'City',
        'item.type-of-reference' => 'Reference Type',
    ];

    /**
     * @var bool
     */
    public $confirmingItemDeletion = false;

    /**
     * @var string | int
     */
    public $primaryKey;

    /**
     * @var bool
     */
    public $confirmingItemCreation = false;

    /**
     * @var bool
     */
    public $confirmingItemEdit = false;

    public function render(): View
    {
        return view('livewire.personal-references-child');
    }

    public function showDeleteForm(int $id): void
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem(): void
    {
        PersonalReference::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('personal-references', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Deleted Successfully');
    }

    public function showCreateForm(): void
    {
        $this->confirmingItemCreation = true;
        $this->resetErrorBag();
        $this->reset(['item']);

        $this->users = User::orderBy('name')->get();
    }

    public function createItem(): void
    {
        $this->validate();
        dd($this->item);
        $item = PersonalReference::create([
            'name' => $this->item['name'] ?? '',
            'documentid' => $this->item['documentid'] ?? '',
            'email' => $this->item['email'] ?? '',
            'mobile' => $this->item['mobile'] ?? '',
            'address' => $this->item['address'] ?? '',
            'country' => $this->item['country'] ?? '',
            'city' => $this->item['city'] ?? '',
            'type-of-reference' => $this->item['type-of-reference'] ?? '',
            'user_id' => Auth::user()->id,
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('personal-references', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Added Successfully');
    }

    public function showEditForm(PersonalReference $personalreference): void
    {
        $this->resetErrorBag();
        $this->item = $personalreference;
        $this->confirmingItemEdit = true;

        $this->users = User::orderBy('name')->get();
    }

    public function editItem(): void
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdit = false;
        $this->primaryKey = '';
        $this->emitTo('personal-references', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Updated Successfully');
    }

}

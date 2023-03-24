<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\View\View;

use App\Models\PersonalReference;
use App\Models\User;

class PersonalReferences extends Component
{
    use WithPagination;

    /**
     * @var array
     */
    protected $listeners = ['refresh' => '$refresh'];
    /**
     * @var string
     */
    public $sortBy = 'id';

    /**
     * @var bool
     */
    public $sortAsc = true;

    /**
     * @var int
     */
    public $per_page = 15;

    /**
     * @var array
     */
    public $columns = ['Personal Reference','Name','DNI','Email','Phone number','Address','Country','City','Reference Type'];

    /**
     * @var array
     */
    public $selectedColumns = [];

    /**
     * @var array
     */
    public $filters = [];

    /**
     * @var array
     */
    public $selectedFilters = [];


    public function mount(): void
    {
        $this->selectedColumns = $this->columns;        $this->initFilters();
    }

    public function render(): View
    {
        $results = $this->query()
            ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->per_page);

        return view('livewire.personal-references', [
            'results' => $results
        ]);
    }

    public function sortBy(string $field): void
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function updatingPerPage(): void
    {
        $this->resetPage();
    }

    public function updatingSelectedFilters(): void
    {
        $this->resetPage();
    }

    private function isFilterSet(string $column): bool
    {
        if (isset($this->selectedFilters[$column])) {
            if (is_array($this->selectedFilters[$column])) {
                if (!empty($this->selectedFilters[$column])) {
                    return true;
                }
            } else {
                if ($this->selectedFilters[$column] != '') {
                    return true;
                }
            }
        }
        return false;
    }

    public function resetFilters(): void
    {
        $this->reset('selectedFilters');
        $this->initMultiFilters();
    }

    private function initMultiFilters(): void
    {

    }

    public function query(): Builder
    {
        return PersonalReference::query()
            ->when($this->isFilterSet('user_id'), function($query) {
                return $query->where('user_id', $this->selectedFilters['user_id']);
            })

;
    }
    private function initFilters(): void
    {


        $users = User::pluck('name', 'id')->map(function($i, $k) {
            return ['key' => $k, 'label' => $i];
        })->toArray();
        $this->filters['user_id']['label'] = 'User';
        //$this->filters['user_id']['multiple'] = true;
        $this->filters['user_id']['options'] = ['0' => ['key' => '', 'label' => 'Any']] + $users;
        $this->initMultiFilters();
    }

}

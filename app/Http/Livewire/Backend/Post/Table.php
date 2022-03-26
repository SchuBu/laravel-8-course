<?php

namespace App\Http\Livewire\Backend\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $updated = null;
    protected $listeners = ["post-updated" => "postUpdated"];
    public $filter = ['search' => null];

    public function updatedFilter()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function postUpdated()
    {
        $this->updated = now();
    }

    public function render()
    {
        $posts = Post::query()->with('user')
            ->when($this->filter['search'], function ($query) {
                $query->search('title', $this->filter['search'])
                ->orSearch('id', $this->filter['search']);
            })
            ->orWhereHas('user', function ($query) {
                $query->search('email', $this->filter['search']);
            })
            ->withTrashed()
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(15);

        return view('livewire.backend.post.table', compact('posts'));
    }
}

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

    public $filter = [
        'search' => null
    ];

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

    public function render()
    {
        $posts = Post::query()
            ->when($this->filter['search'], function ($query) {
                $query->search('title', $this->filter['search']);
            })
            ->withTrashed()
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(15);

        return view('livewire.backend.post.table', compact('posts'));
    }
}

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

    public function editModal($pid)
    {
        $this->emit('edit-modal', $pid);
    }

    public function render()
    {
        $posts = Post::withTrashed()
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(15);

        return view('livewire.backend.post.table', compact('posts'));
    }
}

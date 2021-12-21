<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class EditModal extends Component
{
    public $showModal = false;
    public $post;

    protected $rules = [
        'post.title' => 'required',
        'post.body' => 'required'
    ];

    public function render()
    {
        return view('livewire.edit-modal');
    }

    public function save()
    {

        $this->validate();
        Post::withTrashed()->whereId($this->post['id'])->firstOrFail()->update($this->post);
        $this->showModal = false;
        $this->emit('post-updated');
    }

}

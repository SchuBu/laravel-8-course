<?php

namespace App\Http\Livewire\Backend\Post;

use App\Models\Post;
use Livewire\Component;

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
        return view('livewire.backend.post.edit-modal');
    }

    public function save()
    {
        $this->validate();
        Post::withTrashed()->whereId($this->post['id'])->firstOrFail()->update($this->post);
        $this->showModal = false;
        $this->emit('post-updated');
    }

}

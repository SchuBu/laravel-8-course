<?php

namespace App\Http\Livewire\Backend\Post;

use App\Models\Post;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class EditModal extends Component
{
    use WireToast;

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
        toast()->success('Der Beitrag wurde erfolgreich bearbeitet.')->push();
    }

}

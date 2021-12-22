<?php

namespace App\Http\Livewire\Backend\Post;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class CreateModal extends Component
{
    use WireToast;

    public $showModal = false;
    public $post;

    protected $rules = [
        'post.title' => 'required',
        'post.body' => 'required'
    ];

    public function save()
    {
        $this->validate();
        Auth::user()->posts()->create($this->post);
        $this->showModal = false;
        $this->emit('post-updated');
        toast()->success('Der Beitrag wurde erfolgreich erstellt.')->push();
    }

    public function render()
    {
        return view('livewire.backend.post.create-modal');
    }
}

<?php

namespace App\Http\Livewire\Backend\Post;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class DeleteModal extends Component
{
    use WireToast;

    public $post;
    public $showModal = false;

    public function render()
    {
        return view('livewire.backend.post.delete-modal');
    }

    public function delete()
    {
        $this->post->forceDelete();
        $this->showModal = false;
        $this->emit('post-updated');
        toast()->success('Der Beitrag wurde endgültig gelöscht!')->push();
    }

}

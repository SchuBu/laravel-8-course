<?php

namespace App\Http\Livewire\Backend\Post;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class Toggle extends Component
{
    use WireToast;
    public $post;

    public function toggle()
    {
        $this->post->isTrashed() ? $this->post->restore() : $this->post->delete();
        $this->post->isTrashed() ? toast()->success('Der Beitrag ist unsichtbar geschaltet')->push() : toast()->success('Der Beitrag ist sichtbar geschaltet')->push();
        ;
    }

    public function render()
    {
        return view('livewire.backend.post.toggle');
    }
}

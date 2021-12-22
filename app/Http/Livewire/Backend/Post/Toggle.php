<?php

namespace App\Http\Livewire\Backend\Post;

use Livewire\Component;

class Toggle extends Component
{
    public $post;

    public function toggle()
    {
        $this->post->isTrashed() ? $this->post->restore() : $this->post->delete();
    }

    public function render()
    {
        return view('livewire.backend.post.toggle');
    }
}

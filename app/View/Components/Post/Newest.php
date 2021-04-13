<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Newest extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $posts = collect([
            ["title" => "Beitrag 1", "id" => 1],
            ["title" => "Beitrag 2", "id" => 2],
            ["title" => "Beitrag 3", "id" => 3],
            ["title" => "Beitrag 4", "id" => 4],
            ["title" => "Beitrag 5", "id" => 5],
        ]);

        return view('components.post.newest', compact('posts'));
    }
}

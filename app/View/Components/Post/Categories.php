<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Categories extends Component
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
        $categories = collect([
            ["title" => "Kategorie 1", "id" => 1],
            ["title" => "Kategorie 2", "id" => 2],
            ["title" => "Kategorie 3", "id" => 3],
            ["title" => "Kategorie 4", "id" => 4],
            ["title" => "Kategorie 5", "id" => 5],
        ]);


        return view('components.post.categories', compact('categories'));
    }
}

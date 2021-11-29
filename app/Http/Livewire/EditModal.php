<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditModal extends Component
{

    public $showModal = false;

    public function render()
    {
        return view('livewire.edit-modal');
    }

    public function deactivate()
    {
        // action
        $this->showModal = false;
    }

}

<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Mensaje extends Component
{
    public $message;
    public $timeout = 3000;
    public $position = 'left';
    public $color = 'blue';

    public function mount($message, $timeout = 3000, $position = 'left', $color = 'blue')
    {
        $this->message = $message;
        $this->timeout = $timeout;
        $this->position = $position;
        $this->color = $color;
    }
    public function render()
    {
        return view('livewire.partials.mensaje');
    }
}

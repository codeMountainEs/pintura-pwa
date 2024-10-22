<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class FlashMessage extends Component
{
    public $message;
    public $timeout = 3000;
    public $position = 'left';
    public $color = 'blue';

    public function mount($message, $timeout = 3000, $position = 'left', $type = 'success')
    {


        $this->message = $message;
        $this->timeout = $timeout;
        $this->position = $position;
        $this->color = match ($type) {
            'success' => 'green',
            'error' => 'red',
            // ...
        };
    }

    public function render()
    {
        return view('livewire.partials.flash-message');
    }
}

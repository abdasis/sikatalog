<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ErrorMessage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $error;
    public function __construct($error)
    {
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.error-message');
    }
}

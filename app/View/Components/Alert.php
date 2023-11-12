<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public $info;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct($info='Garofalo', $message='Benvenuto')
    {
        $this->info=$info;
        $this->message=$message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class jompotrun extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title="";
    public function __construct($componentname)
    {
        //
        $this->title=$componentname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.jompotrun');
    }
}

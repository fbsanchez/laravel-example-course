<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * String title
     *
     * @var string
     */
    public $title;

    /**
     * Nav items
     *
     * @var ?array
     */
    public $nav;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $title, ?array $nav = null)
    {
        $this->nav = $nav ?? [ 'hola' => 'Volver' ];
        $this->title = $title ?? __('Unset');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.base');
    }
}

<?php

namespace UzzairWebStudio\FBPixel\View\Components;

use Illuminate\View\Component;

class FBPixelComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pixelId;

    public function __construct($pixelId)
    {
        $this->pixelId = $pixelId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('vendor.components.uws-fb-pixel');
    }
}

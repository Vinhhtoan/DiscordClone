<?php

namespace App\View\Components\ChannelManage;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChannelFormat extends Component
{
    public $typeOfChannel;
    /**
     * Create a new component instance.
     */
    public function __construct($typeOfChannel)
    {
        $this->typeOfChannel = $typeOfChannel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.channel-manage.channel-format');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $message,
        public string $type
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $bgClassColor = match ($this->type) {
            'success' => 'bg-green-50',
            'error' => 'bg-red-50',
            'info' => 'bg-blue-50',
            default => 'bg-gray-50'
        };

        $textClassColor = match ($this->type) {
            'success' => 'text-green-800',
            'error' => 'text-red-800',
            'info' => 'text-blue-800',
            default => 'text-gray-800'
        };

        return view('components.alert' , compact('bgClassColor' , 'textClassColor'));
    }
}

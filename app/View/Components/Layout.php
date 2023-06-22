<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */

     public $title;
    public $description;
    public $ogUrl;
    public $ogDescription;
    public $ogTitle;
    public $canonical;
    
    public function __construct($title, $description, $ogUrl, $ogDescription, $ogTitle, $canonical)
    {
        $this->title = $title;
        $this->description = $description;
        $this->ogUrl = $ogUrl;
        $this->ogDescription = $ogDescription;
        $this->ogTitle = $ogTitle;
        $this->canonical = $canonical;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}

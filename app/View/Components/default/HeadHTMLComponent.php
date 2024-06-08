<?php

namespace App\View\Components\default;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadHTMLComponent extends Component
{

    public string $title;
    //Тайтл страницы
    public string $description;
    //описание страницы
    public string $contenttype = '<meta http-equiv="Content-type" content="text/html;charset=utf-8">';

    public array $keywords = [];


    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $contenttype, $keywords)
    {
        $this->title = $title;
        $this->description = $description;
        $this->contenttype = $contenttype;
        $this->keywords = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default.head-h-t-m-l-component');
    }
}

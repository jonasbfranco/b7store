<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //carregando todos os estados do Brasil
        $this->states = [
            ['value' => 'AC', 'name' => 'ACRE'],
            ['value' => 'MG', 'name' => 'MINAS GERAIS'],
            ['value' => 'SP', 'name' => 'SAO PAULO']
        ];

        $this->categories = [
            ['value' => 'categoria1', 'name' => 'Categoria 1'],
            ['value' => 'categoria2', 'name' => 'Categoria 2']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}

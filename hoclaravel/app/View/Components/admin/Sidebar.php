<?php

namespace App\View\Components\admin;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $inforEmployee = Auth::guard('employee')->user();
       

        return view('components.admin.sidebar',[
            'inforEmployee' => $inforEmployee,
        ]);
    }
}

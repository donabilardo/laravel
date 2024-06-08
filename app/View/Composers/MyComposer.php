<?php

namespace App\View\Composers;

use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MyComposer
{
    public function compose(View $view): void
    {
        $res = Employee::query()->count();
        $view->with('mydata', $res);
    }
}

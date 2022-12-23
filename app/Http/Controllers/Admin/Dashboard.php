<?php

namespace App\Http\Controllers\Admin;

use App\Models\Administrator;
use Encore\Admin\Facades\Admin;

class Dashboard
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin.title');
    }
}

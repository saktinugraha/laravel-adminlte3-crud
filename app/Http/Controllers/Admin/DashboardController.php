<?php

namespace App\Http\Controllers\Admin;

class DashboardController
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}

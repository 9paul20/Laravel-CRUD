<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appData = [
            'drawer' => false,
            'mini' => false,
            'items' => [
                [
                    'icon' => 'mdi-home',
                    'title' => 'Inicio',
                    'route' => '/',
                ],
                [
                    'icon' => 'mdi-table',
                    'title' => 'Tabla',
                    'route' => '/table',
                ],
                [
                    'icon' => 'mdi-account-group',
                    'title' => 'Users',
                    'route' => '/users',
                ],
            ],
        ];

        return view('app', compact('appData'));
    }
}
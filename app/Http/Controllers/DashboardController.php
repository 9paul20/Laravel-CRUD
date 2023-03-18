<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appData = [
            'drawer' => true,
            'mini' => true,
            'items' => [
                [
                    'id' => 1,
                    'icon' => 'mdi-home',
                    'title' => 'Inicio',
                    'route' => '/',
                ],
                [
                    'id' => 2,
                    'icon' => 'mdi-information-variant',
                    'title' => 'Acerca De',
                    'route' => '/about',
                ],
                [
                    'id' => 3,
                    'icon' => 'mdi-table',
                    'title' => 'Tabla',
                    'route' => '/table',
                ],
                [
                    'id' => 4,
                    'icon' => 'mdi-table',
                    'title' => 'Tabla 2',
                    'route' => '/table_two',
                ],
                [
                    'id' => 5,
                    'icon' => 'mdi-alert-circle-outline',
                    'title' => '403',
                    'route' => '/403',
                ],
                [
                    'id' => 6,
                    'icon' => 'mdi-alert-circle-outline',
                    'title' => '404',
                    'route' => '/404',
                ],
            ],
        ];
        return view('app', compact('appData'));
    }
}
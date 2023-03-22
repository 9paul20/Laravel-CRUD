<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appData = [
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
                    'icon' => 'mdi-table',
                    'title' => 'CRUDS',
                    'sub_items' => [
                        [
                            'id' => 11,
                            'icon' => 'mdi-table',
                            'title' => 'Uno',
                            'route' => '/crud_one',
                        ],
                        [
                            'id' => 12,
                            'icon' => 'mdi-table',
                            'title' => 'Dos',
                            'route' => '/crud_two',
                        ],
                        [
                            'id' => 13,
                            'icon' => 'mdi-table',
                            'title' => 'Tres',
                            'route' => '/crud_tree',
                        ],
                    ],
                ],
                [
                    'id' => 6,
                    'icon' => 'mdi-table',
                    'title' => 'CRUDS',
                    'sub_items' => [
                        [
                            'id' => 14,
                            'icon' => 'mdi-table',
                            'title' => 'Cuatro',
                            'sub_items' => [
                                [
                                    'id' => 21,
                                    'icon' => 'mdi-eye',
                                    'title' => 'Cinco',
                                    'route' => '/crud_five',
                                ],
                            ],
                        ],
                        [
                            'id' => 12,
                            'icon' => 'mdi-table',
                            'title' => 'Seis',
                            'route' => '/crud_six',
                        ],
                    ],
                ],
                [
                    'id' => 7,
                    'icon' => 'mdi-alert-circle-outline',
                    'title' => '403',
                    'route' => '/403',
                ],
                [
                    'id' => 8,
                    'icon' => 'mdi-alert-circle-outline',
                    'title' => '404',
                    'route' => '/404',
                ],
            ],
        ];
        return view('app', compact('appData'));
    }
}

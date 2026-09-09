<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'John Smith',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Sarah Lee',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Anna Cruz',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Kevin Santos',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}
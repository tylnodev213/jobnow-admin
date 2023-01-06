<?php

namespace Database\Seeders;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::truncate();
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name'     => 'Administrator',
            'type'     => config('const.administrator.type.admin')
        ]);

        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Dashboard",
                    "icon" => "fa-bar-chart",
                    "uri" => "/",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 3,
                    "title" => "Admin",
                    "icon" => "fa-tasks",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "Users",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "Roles",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "Permission",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "Menu",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 8,
                    "title" => "Operation log",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 13,
                    "title" => "Post",
                    "icon" => "fa-bars",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 14,
                    "title" => "New",
                    "icon" => "fa-bell",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 9,
                    "title" => "Company",
                    "icon" => "fa-building",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 15,
                    "title" => "File",
                    "icon" => "fa-clipboard",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 11,
                    "order" => 16,
                    "title" => "CV",
                    "icon" => "fa-file",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 11,
                    "order" => 17,
                    "title" => "JD",
                    "icon" => "fa-file-text",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Setting",
                    "icon" => "fa-cogs",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 17,
                    "order" => 11,
                    "title" => "Language",
                    "icon" => "fa-code",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 17,
                    "order" => 12,
                    "title" => "Category langguage",
                    "icon" => "fa-file-code-o",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 10,
                    "title" => "Job",
                    "icon" => "fa-bars",
                    "uri" => "",
                    "permission" => NULL
                ],

            ]
        );
    }
}

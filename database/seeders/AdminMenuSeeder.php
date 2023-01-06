<?php

namespace Database\Seeders;

use App\Enums\UserType;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'Administrator',
        ]);

        // base tables
        Menu::truncate();
        Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Setting",
                    "icon" => "fa-cogs",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Dashboard",
                    "icon" => "fa-bar-chart",
                    "uri" => "",
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
                    "title" => "AdminUsers",
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
                    "order" => 9,
                    "title" => "User",
                    "icon" => "fa-bars",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 10,
                    "title" => "HR",
                    "icon" => "fa-users",
                    "uri" => "/users-hr",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 11,
                    "title" => "Candidate",
                    "icon" => "fa-user",
                    "uri" => "/users-candidate",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 12,
                    "title" => "Users banned",
                    "icon" => "fa-user-times",
                    "uri" => "/users-banned",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 13,
                    "title" => "Company",
                    "icon" => "fa-building",
                    "uri" => "/companies",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 14,
                    "title" => "Job",
                    "icon" => "fa-bars",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 14,
                    "order" => 15,
                    "title" => "Language",
                    "icon" => "fa-code",
                    "uri" => "/languages",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 14,
                    "order" => 16,
                    "title" => "Category language",
                    "icon" => "fa-file-code-o",
                    "uri" => "/object-languages",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 17,
                    "title" => "Post",
                    "icon" => "fa-bars",
                    "uri" => "/posts",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 18,
                    "title" => "New",
                    "icon" => "fa-bell",
                    "uri" => "/news",
                    "permission" => NULL
                ],

            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ],
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
            ]
        );

        // pivot tables
        DB::table('np_admin_role_menu')->truncate();
        DB::table('np_admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 1
                ],


            ]
        );

        DB::table('np_admin_role_permissions')->truncate();
        DB::table('np_admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ],

            ]
        );
    }
}

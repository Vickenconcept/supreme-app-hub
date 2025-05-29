<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        

        Permission::create(['name' => 'manage-reseller']);
        Permission::create(['name' => 'access-dfy-marketing']);
        Permission::create(['name' => 'access-affiliate-training']);
        Permission::create(['name' => 'access-sales-pages-setup']);
        Permission::create(['name' => 'access-unlimited-traffic']);
        Permission::create(['name' => 'access-agency-website-setup']);
        Permission::create(['name' => 'access-affiliate-marketing-course']);
        Permission::create(['name' => 'access-coaching-program']);

        // Create roles and assign permissions
        $FE = Role::create(['name' => 'FE']);

        $Bundle = Role::create(['name' => 'Bundle']);
        // $Bundle->givePermissionTo(Permission::all());
        $permissions = Permission::where('name', '!=', 'access-coaching-program')->get();
        $Bundle->syncPermissions($permissions);

        $permissions = Permission::where('name', '!=', 'access-coaching-program')->get();
        $Bundle->givePermissionTo($permissions);

        $OTO1 = Role::create(['name' => 'OTO1']);
        $OTO1->givePermissionTo(['manage-reseller']);


        $OTO2 = Role::create(['name' => 'OTO2']); // Automation ToolKit Unlimited
        $OTO2->givePermissionTo(['manage-reseller']); // assuming similar permission


        $OTO3 = Role::create(['name' => 'OTO3']); // Sales Pages Setup
        $OTO3->givePermissionTo(['access-sales-pages-setup']);


        $OTO4 = Role::create(['name' => 'OTO4']); // Unlimited Traffic
        $OTO4->givePermissionTo(['access-unlimited-traffic', 'access-dfy-marketing']);


        $OTO5 = Role::create(['name' => 'OTO5']); // 10 Agency Website Setup
        $OTO5->givePermissionTo(['access-agency-website-setup', 'access-affiliate-training']);


        $OTO6 = Role::create(['name' => 'OTO6']); // Reseller
        $OTO6->givePermissionTo(['manage-reseller']);


        $OTO7 = Role::create(['name' => 'OTO7']); // Affiliate Marketing Course
        $OTO7->givePermissionTo(['access-affiliate-marketing-course']);


        $OTO8 = Role::create(['name' => 'OTO8']); // 8-Week Coaching Program
        $OTO8->givePermissionTo(['access-coaching-program']);
    }
}

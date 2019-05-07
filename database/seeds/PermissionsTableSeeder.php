<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-05-07 00:45:40',
            'updated_at' => '2019-05-07 00:45:40',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '17',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '18',
                'title'      => 'crm_status_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '19',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '20',
                'title'      => 'crm_status_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '21',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '22',
                'title'      => 'crm_status_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '23',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '24',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '25',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '26',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '27',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '28',
                'title'      => 'crm_note_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '29',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '30',
                'title'      => 'crm_note_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '31',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '32',
                'title'      => 'crm_note_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '33',
                'title'      => 'crm_document_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '34',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '35',
                'title'      => 'crm_document_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '36',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '37',
                'title'      => 'crm_document_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '38',
                'title'      => 'package_create',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '39',
                'title'      => 'package_edit',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '40',
                'title'      => 'package_show',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '41',
                'title'      => 'package_delete',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ],
            [
                'id'         => '42',
                'title'      => 'package_access',
                'created_at' => '2019-05-07 00:45:40',
                'updated_at' => '2019-05-07 00:45:40',
            ]];

        Permission::insert($permissions);
    }
}

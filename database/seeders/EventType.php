<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\EventType as EventTypeTable;

class EventType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        EventTypeTable::insert([
            'title' => 'Concert',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        EventTypeTable::insert([
            'title' => 'Product',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        EventTypeTable::insert([
            'title' => 'Charity',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}

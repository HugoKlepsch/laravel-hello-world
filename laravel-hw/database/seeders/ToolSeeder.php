<?php

namespace Database\Seeders;

use App\Models\Tool;
use App\Models\User;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::find(1);
        $tool = new Tool([
            'name' => 'Hammer',
            'user_id' => $user->id,
            'signed_out_at' => now(),
        ]);
        $tool->save();
    }
}

<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTypeService;
use App\Models\TypeService;
use App\Models\User;

class UserTypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeServices = TypeService::all();
        $users = User::all();

        foreach ($users as $user) {
            foreach ($typeServices as $typeService) {
                UserTypeService::create([
                    'pricefinal' => rand(1, 1000),
                    'date' => now(),
                    'user_id' => $user->id,
                    'type_service_id' => $typeService->id,
                ]);
            }
        }
    }
}

<?php

   namespace Database\Seeders;

    use App\Models\User;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class UserSeeder extends Seeder implements WithoutModelEvents
        {
        /**
         * Run the database seeds.
         */
            public function run()
                {
                    $user = (new User)->updateOrCreate([
                                                           'name' => 'admin',
                                                                                                     'email' => 'info@radioafricagroup.co.ke',
                                                       ], [
                                                           'password'          => bcrypt('secret'),
                                                           'email_verified_at' => now()->format('Y-m-d H:i:s'),
                                                           'status'            => "Active",
                                                           'remember_token'    => Str::ulid()
                                                       ]);
                }
        }

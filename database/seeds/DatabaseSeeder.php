<?php

    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class DatabaseSeeder extends Seeder
        {
        /**
         * Seed the application's database.
         *
         * @return void
         */
            public function run()
                {

                    (new User)->updateOrCreate([
                                                   'name' => 'admin',
                                                   'email' => 'info@radioafricagroup.co.ke',
                                               ], [
                                                   'password'          => bcrypt('secret'),
                                                   'email_verified_at' => now()->format('Y-m-d H:i:s'),
                                                   'status'            => 1,
                                                   'remember_token'    => Str::ulid()
                                               ]);
                }
        }

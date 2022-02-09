<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use App\Models\Thing;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountSeeder::class,
            ReviewSeeder::class, // has user and thing
            ThingSeeder::class, // has a user and an organization
            ContactSeeder::class, // has a user and an account
            OrganizationSeeder::class, // has a user and an account
            UserSeeder::class,
        ]);
        /*
        $user = User::factory()->create([
            'account_id' => $account->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe2@example.com',
            'password' => 'secret',
            'owner' => true,
        ]);

        User::factory(5)->create(['account_id' => $account->id]);

        $organizations = Organization::factory(10)
            ->create(['account_id' => $account->id]);

        Contact::factory(10)
            ->create(['account_id' => $account->id])
            ->each(function ($contact) use ($organizations) {
                $contact->update(['organization_id' => $organizations->random()->id]);
            });

        $thing = Thing::factory()->create([
            'user_id' => $user->id,
            'organization_id' => $organizations->random()->id,
        ]);

        Review::factory()->create([
            'user_id' => $user->id,
            'thing_id' => $thing->id,
        ]);
        */
    }
}

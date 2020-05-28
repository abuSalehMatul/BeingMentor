<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleAndPermissionTableSeeder::class);
        $this->call(UserRoleAndPermissionTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(UserTagTableSeeder::class);
        $this->call(WebsiteTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(ChatRoomSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);
        $this->call(VoteTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(SuccessStorySeeder::class);
    }

}

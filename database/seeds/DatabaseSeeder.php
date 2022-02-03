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
        /* ダミーデータを呼びだす。
         ※必要なときにコメントアウトを外す */
        $this->call(UsersTableSeeder::class);
    }
}

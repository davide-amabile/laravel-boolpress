<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\article;
use App\User;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 20; $i++){
            $user = User::inRandomOrder()->first();

            $newArticle = new Article;

            $newArticle->user_id = $user->id;
            $newArticle->title = $faker->sentence(6, true);
            $newArticle->content = $faker->paragraph(6, true);
            $newArticle->slug = Str::of($newArticle->title)->slug('-');
            $newArticle->save();

        }
    }
}

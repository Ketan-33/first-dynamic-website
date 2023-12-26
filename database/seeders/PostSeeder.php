<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed two real posts
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'image_id' => 1,
            'title' => 'First Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et urna et arcu gravida ullamcorper. Vivamus aliquam eu nulla vitae tincidunt. Proin ullamcorper diam at erat venenatis, ut tincidunt odio cursus. Aenean vulputate eros eu tristique scelerisque. Ut sollicitudin hendrerit lacinia. Fusce malesuada justo vel cursus bibendum. Integer id augue non sapien tincidunt tincidunt. Vivamus vel lectus nec leo aliquam tristique. Phasellus a bibendum ligula. Sed interdum augue sit amet magna facilisis gravida. Nam at malesuada mauris. Proin nec ipsum vel lacus pellentesque luctus.
                        Nullam lacinia aliquam lorem, eu gravida tortor tincidunt eu. Suspendisse potenti. In hac habitasse platea dictumst. Suspendisse commodo eu nisi vel cursus. Phasellus dapibus cursus volutpat. Vivamus euismod ex a felis gravida, non placerat tellus volutpat. Fusce vel nisl vestibulum, volutpat ligula vitae, blandit urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 2,
            'image_id' =>1,
            'title' => 'Second Post',
            'content' => 'Sed pretium aliquet eros, sit amet vulputate felis accumsan ut. Duis in vulputate felis, ac hendrerit dolor. Curabitur auctor metus eu est consectetur, vel tincidunt odio accumsan. Nullam eu quam eu ex commodo feugiat in nec arcu. Morbi laoreet nunc vel augue condimentum efficitur. Integer ac metus nec metus dapibus sodales. Sed lacinia ipsum id odio efficitur, id dignissim odio laoreet. Sed quis velit vel nisi imperdiet auctor in nec quam. Suspendisse potenti. Phasellus ultricies, dui vel bibendum accumsan, justo odio feugiat mi, sit amet pellentesque dolor orci a purus. Sed non turpis auctor, aliquam justo at, tempor libero.
                            Vestibulum gravida metus quis enim tempus, nec laoreet sem fringilla. Ut ut ante eu ipsum ullamcorper suscipit a a massa. Nunc aliquet euismod odio, vel euismod erat posuere a. Integer aliquam cursus felis, eu semper eros cursus ac. Curabitur ut fermentum tellus, vel dignissim ex. Fusce sollicitudin, odio vel consectetur facilisis, eros sapien finibus mi, a ultrices turpis neque vel lacus.',
        ]);

        // Seed 10 fake posts using Faker
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'user_id' => $faker->numberBetween(1, 10),
                'category_id' => $faker->numberBetween(1, 4),
                'image_id' => $faker->numberBetween(1, 5),
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }
    }
}

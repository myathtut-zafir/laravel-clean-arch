<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title=$this->faker->words(5, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->randomHtml,
            'desc' => $this->faker->sentence(2, true),
            'published' => $this->faker->boolean,
        ];
    }
}

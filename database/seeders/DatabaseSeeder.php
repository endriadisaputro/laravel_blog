<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'skawan',
            'email'=>'skawan@gmail.com',
            'password'=>bcrypt('skawan')
        ]);

        User::create([
        	'name'=>'lovre',
        	'email'=>'lovre@gmail.com',
        	'password'=>bcrypt('lovre')
        ]);

        Category::create([
        	'name'=>'Programming',
        	'slug'=>'programming'
        ]);

        Category::create([
        	'name'=>'Desain',
        	'slug'=>'desain'
        ]);

        Post::create([
        	'title'=>'Judul Pertama',
        	'category_id'=>1,
        	'user_id' =>1,
        	'slug'=>'judul-pertama',
        	'excerpt'=>'Lorem ipsum dolor sit amet, consectetur', 
        	'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' 
    	]);

        Post::create([
            'title'=>'Judul Kedua',
            'category_id'=>2,
            'user_id' =>2,
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur', 
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' 
        ]);
        
        Post::create([
            'title'=>'Judul Ketiga',
            'category_id'=>1,
            'user_id' =>1,
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur', 
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' 
        ]);    
            
        Post::create([
        	'title'=>'Judul Keempat',
        	'category_id'=>2,
        	'user_id' =>2,
        	'slug'=>'judul-keempat',
        	'excerpt'=>'Lorem ipsum dolor sit amet, consectetur', 
        	'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>' 
    	]);
    }
}

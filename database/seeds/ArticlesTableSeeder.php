<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'First Title',
            'image' => '/upload/images/Article-first-title-2019-06-27-130518.jpg',
            'summary' => 'Summary for the first title.',
            'content' => '<p>&nbsp; fsasf sddf sdadf asdf as<img alt="" src="https://cdnb.artstation.com/p/assets/images/images/018/644/953/large/anato-finnstark-remember-chihiro-spirited-away-by-anatofinnstark-dbvb8wt-fullview-1.jpg?1560181129" style="height:410px; width:300px" /></p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Title Two',
            'image' => '/upload/images/Article-title-two-2019-06-27-133731.jpg',
            'summary' => 'Summary two',
            'content' => '<p>123 13 1232e rewr g g r gr wgrg w</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article 4',
            'image' => '/upload/images/Article-article-4-2019-06-27-135533.jpg',
            'summary' => 'Summary 4',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article 5',
            'image' => '/upload/images/Article-article-5-2019-06-27-135615.jpg',
            'summary' => 'Summary  5',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article 6',
            'image' => '/upload/images/Article-article-6-2019-06-27-135657.jpg',
            'summary' => 'Summary 6',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  7',
            'image' => '/upload/images/Article-article-7-2019-06-27-135753.jpg',
            'summary' => 'Summary  7',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article 8',
            'image' => '/upload/images/Article-article-2019-06-27-135825.jpg',
            'summary' => 'Summary 8',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  9',
            'image' => '/upload/images/Article-article-9-2019-06-27-135942.jpg',
            'summary' => 'Summary  9',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  10',
            'image' => '/upload/images/Article-article-10-2019-06-27-140000.jpg',
            'summary' => 'Summary 10',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  11',
            'image' => '/upload/images/Article-article-11-2019-06-27-140029.jpg',
            'summary' => 'Summary 11',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  12',
            'image' => '/upload/images/Article-article-12-2019-06-27-140058.jpg',
            'summary' => 'Summary 12',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  13',
            'image' => '/upload/images/Article-article-13-2019-06-27-140112.jpg',
            'summary' => 'Summary 13',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  14',
            'image' => '/upload/images/Article-article-14-2019-06-27-140126.jpg',
            'summary' => 'Summary 14',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  15',
            'image' => '/upload/images/Article-article-15-2019-06-28-065717.jpg',
            'summary' => 'Summary  15',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  16',
            'image' => '/upload/images/Article-article-16-2019-06-28-070340.jpg',
            'summary' => 'Summary  16',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '1',
            'title' => 'Article  17',
            'image' => '/upload/images/Article-article-17-2019-06-28-070543.jpg',
            'summary' => 'Summary  17',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '',
            'title' => 'Title 2.0',
            'image' => '/upload/images/Article-title-20-2019-06-28-075418.jpg',
            'summary' => 'Summary 2.0',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '',
            'title' => 'Title 3.1',
            'image' => '/upload/images/Article-title-31-2019-06-28-075500.jpg',
            'summary' => 'Summary 3.1',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '',
            'title' => 'Title 4.00',
            'image' => '/upload/images/Article-title-400-2019-06-28-075617.jpg',
            'summary' => 'Summary 4.00',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('articles')->insert([
            'user_id' => '',
            'title' => 'Random Articla Name',
            'image' => '/upload/images/Article-random-articla-name-2019-06-28-120414.jpg',
            'summary' => 'Summary for random articla',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque consequat nisl vel semper. Cras viverra suscipit aliquam. Nam dignissim tempor mauris, vel tristique sapien faucibus eget. Sed non vehicula turpis. Maecenas erat elit, pulvinar quis eleifend sit amet, cursus in erat. In vehicula augue <img alt="" src="https://cdna.artstation.com/p/assets/images/images/016/662/692/large/anato-finnstark-the-ocher-knight-by-anatofinnstark-dd2ht8e-fullview.jpg?1553002011" style="float:left; height:534px; margin-left:10px; margin-right:10px; width:400px" />quis sollicitudin mollis. Cras ac egestas libero, id tempor mauris. Duis fringilla posuere blandit. Ut ac varius libero. Nulla suscipit porttitor odio. Donec porttitor mi tortor, nec iaculis ante dapibus quis. Pellentesque fermentum aliquet sapien. Integer venenatis pellentesque placerat. Maecenas id mi lacinia, malesuada nisi at, scelerisque risus. Curabitur in consectetur lectus.</p>

<p>Duis imperdiet augue nec leo convallis tincidunt. Cras eu condimentum massa. Proin vel feugiat mi. Nunc sit amet congue justo, non tristique nisl. Duis ultricies aliquet massa, vitae suscipit elit. Vivamus non posuere libero, vestibulum egestas mi. Morbi dapibus vel ante vel porttitor. Duis velit ipsum, consectetur at quam et, auctor congue quam. Suspendisse molestie, nisl at rhoncus blandit, tortor nisi maximus risus, eu dictum est arcu ac tortor. Aliquam suscipit vel tellus ut volutpat. Curabitur feugiat blandit ipsum non dignissim. Pellentesque et libero et ligula semper euismod non quis ex. Etiam tempus dictum gravida.</p>',
            'deleted' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}

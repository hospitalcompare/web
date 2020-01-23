<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_authors');
        Schema::dropIfExists('blog_categories');

        if (!Schema::hasTable('blog_authors')) {
            Schema::create('blog_authors', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->longText('description');
                $table->string('image');
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }
        if (!Schema::hasTable('blog_categories')) {
            Schema::create('blog_categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('icon');
                $table->string('colour');
                $table->string('status')->default("active");
                $table->timestamps();

            });
        }
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('blog_category_id');
                $table->unsignedInteger('blog_author_id');
                $table->string('title');
                $table->longText('description');
                $table->integer('time_to_read');
                $table->string('image');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('blog_author_id')->references('id')->on('blog_authors')->onDelete('cascade')->onUpdate('cascade');
            });
        }
        //TODO: Remove these Example Authors
        $preAuthor = [
            'name'          => 'Lucian Niculescu',
            'description'   => 'Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                                chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                                pudding jujubes danish. Marzipan tar',
            'image'         => 'images/Layer_16.png'
        ];
        //TODO: Remove these Example Categories
        $preCategories = [
            [
                'name'      => 'Category One',
                'colour'    => '#0D69F2'
            ],[
                'name'      => 'Category Two',
                'colour'    => '#8E00FE'
            ],[
                'name'      => 'Category Three',
                'colour'    => '#5E15D1'
            ],[
                'name'      => 'Category Four',
                'colour'    => '#DE026D'
            ],[
                'name'      => 'Category Five',
                'colour'    => '#F6AB3F'
            ]
        ];

        //TODO: Remove these Example Blogs
        $preBlogs = [
            [
                'title'         => 'Example 1',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_16.png',
//                'facebook'      => 'https://facebook.com',
//                'twitter'       => 'https://twitter.com',
//                'linkedin'      => 'https://linkedin.com',
                ''
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png'
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png'
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png'
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png'
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png'
            ],[
                'title'         => 'Blog Title 2',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_17.png',
            ],[
                'title'         => 'Blog Title 3',
                'description'   => '<p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>',
                'image'         => 'images/Layer_18.png',
            ]
        ];

        $author = new \App\Models\BlogAuthor();
        $author->name = $preAuthor['name'];
        $author->description = $preAuthor['description'];
        $author->image = $preAuthor['image'];
        $author->save();

        foreach( $preCategories as $preCategory ) {
            $category = new \App\Models\BlogCategory();
            $category->name = $preCategory['name'];
            $category->icon = 'heart-solid';
            $category->colour = $preCategory['colour'];
            $category->save();
        }

        foreach( $preBlogs as $preBlog ) {
            $blog = new \App\Models\Blog();
            $blog->title = $preBlog['title'];
            $blog->description = $preBlog['description'];
            $blog->image  = $preBlog['image'];
            $blog->time_to_read = rand(1, 10);
            $blog->blog_category_id = rand(1, 5);
            $blog->blog_author_id = 1;
            $blog->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_authors');
        Schema::dropIfExists('blog_categories');

    }
}

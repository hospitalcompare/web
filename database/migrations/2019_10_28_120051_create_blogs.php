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
//        Schema::create('blog_categories', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('status')->default("active");
//            $table->timestamps();
//
//        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
//            $table->unsignedInteger('blog_category_id');
            $table->string('title');
            $table->longText('description');
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('status')->default("active");
            $table->timestamps();

//            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');
        });
        //TODO: Remove these Example Blogs
        $preBlogs = [
            [
                'title'         => 'Blog Title 1',
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
                'facebook'      => 'https://facebook.com',
                'twitter'       => 'https://twitter.com',
                'linkedin'      => 'https://linkedin.com',
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
                'facebook'      => 'https://facebook.com',
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
                'facebook'      => 'https://facebook.com',
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
                'facebook'      => 'https://facebook.com',
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
                'facebook'      => 'https://facebook.com',
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
                'facebook'      => 'https://facebook.com',
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
                'facebook'      => 'https://facebook.com',
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
            ]
        ];

        foreach( $preBlogs as $preBlog ) {
            $blog = new \App\Models\Blog();
            $blog->title = $preBlog['title'];
            $blog->description = $preBlog['description'];
            $blog->image  = $preBlog['image'];
            $blog->facebook = $preBlog['facebook'] ?? '';
            $blog->twitter = $preBlog['twitter'] ?? '';
            $blog->linkedin = $preBlog['linkedin'] ?? '';
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
//        Schema::dropIfExists('blog_categories');
        Schema::dropIfExists('blogs');
    }
}

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
                $table->string('metatags')->nullable();
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('blog_author_id')->references('id')->on('blog_authors')->onDelete('cascade')->onUpdate('cascade');
            });
        }
        //TODO: Remove these Example Authors
        $preAuthor = [
            'name'          => 'Test Testerson',
            'description'   => 'Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                                chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                                pudding jujubes danish. Marzipan tar',
            'image'         => 'images/Layer_16.png'
        ];
        //TODO: Remove these Example Categories
        $preCategories = [
            [
                'name'      => 'General',
                'colour'    => '#0D69F2'
            ]
//            ,[
//                'name'      => 'Category Two',
//                'colour'    => '#8E00FE'
//            ],[
//                'name'      => 'Category Three',
//                'colour'    => '#5E15D1'
//            ],[
//                'name'      => 'Category Four',
//                'colour'    => '#DE026D'
//            ],[
//                'name'      => 'Category Five',
//                'colour'    => '#F6AB3F'
//            ]
        ];

        $preBlogs = [
            [
                'title'         => 'Welcome to Hospital Compare!',
                'description'   => '<p>UK healthcare system is amongst the very best in the world, with over 750 NHS plus private healthcare providers in
                                England alone.</p>
                            <p>If you need to see a hospital consultant, <a class="btn-link" href="/">hospitalcompare.co.uk</a> is a free-to-use resource that enables you to compare
                                the whole market and choose the hospital that suits you best.</p>
                            <p>You can find out, step-by-step, how to use the website <a class="btn-link" href="/how-to-use">here</a>, or read more about your legal rights as a patient under
                                the Health and Social Care Act <a class="btn-link" href="/your-rights">here</a>. For example, did you know that many private hospitals also provide NHS
                                treatment? You could dive into our Frequently Asked Questions <a class="btn-link" href="/faqs">here</a> here or find out more about us <a class="btn-link" href="/about-us">here</a>.</p>
                            <h3>So, how does Hospital Compare work?</h3>
                            <p><a class="btn-link" href="/">Hospitalcompare.co.uk</a> pulls together a host of different, complex, datasets and brings them together in a way that
                                helps you work out which is the best hospital for you. You can browse the hospital list by entering your postcode
                                <a class="btn-link" href="/">here</a>.</p>
                            <p>We also have a list of over 500 treatments, grouped by their specialty – if you already know what treatment you need,
                                you can select it from the list. Don’t worry if you don’t – there are generic body areas in the list that you can
                                select to filter the search results and also a not known option. Using the treatment list filters out hospitals that
                                don’t provide that type of service, so you only see hospitals that provide the service you need.</p>
                            <h3>Our analysis</h3>
                            <p>Our analysis shows that there is often significant variation in both waiting times and care quality in England at a
                                national, regional and county level. Patients in some areas of England are waiting many months longer for their
                                hospital treatment that others elsewhere are receiving in weeks. This is relevant because you have the legal right
                                to choose where you are referred for your NHS treatment (there are some exceptions, which are outlined below *).
                                Many people are not aware of this right.</p>
                            <p>Furthermore, many people are unaware of their right to start consultant-led treatment within 18 weeks of referral, or
                                to request an offer of an alternative provider that can start your treatment sooner. The NHS must take all
                                reasonable steps to meet patients’ requests and <a class="btn-link" href="/">hospitalcompare.co.uk</a> is here to help put you in control.</p>
                            <h3>Knowledge is Power!</h3>
                            <p>We hope to fully empower patients to choose the best quality hospitals and shortest waiting times locally or across
                                England. We believe people could be treated in some cases months earlier if they exercised these legal rights.</p>
                            <p>Our free-to-use site enables you to search using your postcode and over 500 treatment types to shortlist potentially
                                suitable hospital choices and compare the latest reported waiting times, hospital quality rating, cancelled
                                operations and user ratings. You can search by a radius of five miles right up to nationwide.</p>
                            <p>We also intend for the site to be available to patients in Wales, Scotland and Northern Ireland during 2020.</p>',
                'image'         => 'images/blogs/Blog_Article_1.jpg',
                'time_to_read'  => 3,
                'metatags'      => 'welcome, hospital compare, blog'
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
            $blog->time_to_read = $preBlog['time_to_read'];
            $blog->blog_category_id = 1;
            $blog->blog_author_id = 1;
            $blog->metatags = $preBlog['metatags'];
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

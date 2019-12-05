<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">3 great reasons to use Hospital Compare</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row carousel-mobile carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @include('components.basic.testimonial', [
                    'stars'         => 4.5,
                    'active'        => true
                ])
                @include('components.basic.testimonial', ['stars' => 4])
                @include('components.basic.testimonial', ['stars' => 5])
            </div>
            <div class="col-12 mt-5">
                <div class="btn-area text-center">
                    @include('components.basic.button', [
                        'classTitle'        => 'btn btn-squared font-18 btn-turq',
                        'buttonText'        => 'Find the right hospital',
                        'hrefValue'         => '/results-page'
                    ])
                </div>
            </div>
        </div>
    </div>
</section>

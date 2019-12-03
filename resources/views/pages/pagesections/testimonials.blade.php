<section class="testimonial-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">3 great reasons to use Hospital Compare</h2>
            </div>
            @include('components.basic.testimonial', ['stars' => 4.5])
            @include('components.basic.testimonial', ['stars' => 4.5])
            @include('components.basic.testimonial', ['stars' => 4.5])
            <div class="col-12 mt-5">
                <div class="btn-area text-center">
                    @include('components.basic.button', [
                        'classTitle'        => 'btn btn-squared btn-turq',
                        'buttonText'        => 'Find the right hospital',
                        'hrefValue'         => '/results-page'
                    ])
                </div>
            </div>
        </div>
    </div>
</section>

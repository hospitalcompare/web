<div class="{{ empty($single) ? !empty($active) ? 'col-12 col-md-4 carousel-item active' : 'col-12 col-md-4 carousel-item' : '' }}">
    <div class="col-inner {{ empty($single) ? 'text-center p-30 ' : '' }}">
        <p class="font-20">
            "Use Hospital Compare to make the very best choice for your treatment"
        </p>
        <div class="star-rating mb-3">
            {!! \App\Helpers\Utils::getHtmlStars($stars) !!}
        </div>
        <div class="signature mb-2">
            Dr Stevini
        </div>
        <div class="job-title text-uppercase">
            Hospital Compare,<br>
            Head of development
        </div>
    </div>
</div>

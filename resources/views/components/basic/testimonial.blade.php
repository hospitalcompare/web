<div class="{{ empty($single) ? 'col-12 col-md-4' : '' }}">
    <div class="col-inner p-30 {{ empty($single) ? 'text-center' : '' }}">
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

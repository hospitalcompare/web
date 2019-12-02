<div class="{{ empty($single) ? 'col-4' : '' }}">
    <div class="col-inner {{ empty($single) ? 'text-center' : '' }}">
        <p>
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

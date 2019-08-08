<?php

// https://css-tricks.com/forums/topic/display-a-stored-value-1-5-as-a-star/

namespace App\Helpers;

function starRating($noStars)
{
    $rating = $noStars;

// round down to get number of whole stars needed
    $wholeStars = floor($rating);

// double, round, take modulo.
// this will be 1 if you have a half-rating, 0 if not.
    $halfStar = round($rating * 2) % 2;

// this will hold your html markup
    $html = "";

// write img tags for each whole star
    for ($i = 0; $i < $wholeStars; $i++) {
        $html .= "<img src='../images/icons/star.svg' alt='Whole Star'>";
    }
// write img tag for half star if needed
    if ($halfStar) {
        $html .= "<img src='../images/icons/half.svg' alt='Half Star'>";
    }

// all done
    return $html;
}


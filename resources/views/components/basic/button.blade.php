<a id="{{ empty($id) ? '' : $id }}"
   class="{{$classTitle}}"
   href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
   role="button">{{$button}} <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>

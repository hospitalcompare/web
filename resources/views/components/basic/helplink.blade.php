<div class="helpParent" @if(!empty($helpParentPositionRelative)) style="position: relative" @endif>
    @if(!empty($helpChar))
        <div class="helpLink @if(!empty($className)) {{$className}} @endif">{{$helpChar}}</div>
    @endif
    @include('components.basic.lightbox', ['helpText' => $helpText , 'button' => 'Find hospitals'])
</div>

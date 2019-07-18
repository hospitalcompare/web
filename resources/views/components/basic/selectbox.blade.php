<div class="selectParent  {{ empty($selectClassName) ? '' : $selectClassName }}">
    @if(!empty($showLabel))
        <label class="selectBox {{empty($resultsLabel)? '' : $resultsLabel}}" for="{{empty($selectId)? '' : $selectId}}">{{empty($placeholder)? '': $placeholder}}</label>
    @endif
    <select class="{{empty($selectClass)? '' : $selectClass}}" id="{{empty($selectId)? '' : $selectId}}">
        <option value="" disabled selected>{{$placeholder}}</option>
        @if(!empty($options))
            @foreach($options as $option)
                <option name="option-{{$option['id']}}" id="option_id_{{$option['id']}}"  value="{{$option['id']}}">{{$option['name']}} </option>
            @endforeach
        @endif
    </select>
    <i class="fas {{empty($chevronFAClassName)? 'fa-chevron-down' : $chevronFAClassName}}"></i>




</div>
<div class="{{ empty($selectClassName) ? '' : $selectClassName }}">
    <label class="selectBox" for="{{empty($selectId)? '' : $selectId}}">{{empty($placeholder)? '': $placeholder}}</label>
        <select id="{{empty($selectId)? '' : $selectId}}">
            @if(!empty($options))
                @foreach($options as $option)
                    <option name="option-{{$option['id']}}" id="option_id_{{$option['id']}}"  value="{{$option['id']}}">{{$option['name']}}</option>
                @endforeach
            @endif
        </select>
    <i class="fas {{empty($chevronFAClassName)? 'fa-chevron-down' : $chevronFAClassName}}"></i>
</div>
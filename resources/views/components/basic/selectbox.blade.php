<div class="select-parent  {{ empty($selectClassName) ? '' : $selectClassName }}">
    @if(!empty($showLabel))
        <label class="_select-box {{empty($resultsLabel) ? '' : $resultsLabel}}"
               for="{{empty($selectId)? '' : $selectId}}">
            {{empty($placeholder)? '': $placeholder}}
        </label>
    @endif
    <select class="{{empty($selectClass)? '' : $selectClass}}" id="{{empty($selectId)? '' : $selectId}}"
            name="{{$name}}">
        {{--        <option value="" disabled {{ empty(Request::input($name)) ? 'selected' : ''  }}>{{$placeholder}}</option>--}}
        @if(!empty($options))
            @foreach($options as $option)
                <option name="{{$option['name']}}" id="{{$name}}_{{$option['id']}}"
                        value="{{$option['id']}}" {{ Request::input($name)==$option['id'] ? 'selected' : ''  }}>
                    {{$option['name']}}
                </option>
            @endforeach
        @endif
    </select>
    @if(!empty($chevronFAClassName))
        <i class="fas {{empty($chevronFAClassName)? 'fa-chevron-down' : $chevronFAClassName}}"></i>
    @endif
</div>

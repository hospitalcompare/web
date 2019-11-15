<div class="select-parent {{ empty($selectClassName) ? '' : $selectClassName }}">
    @if(!empty($showLabel))
        <label class="{{empty($labelClass) ? '' : $labelClass}}"
               for="{{empty($selectId) ? '' : $selectId}}">
            {{empty($placeholder) ? '': $placeholder}}
        </label>
    @endif
    <select class="{{empty($selectClass) ? '' : $selectClass}}"
            id="{{empty($selectId) ? '' : $selectId}}"
            data-live-search="{{ !empty($selectPicker) ? $selectPicker : ''}}"
            name="{{$name}}"
            {{ !empty($required) && ($required) ? 'required' : '' }}>
        @if(!empty($placeholderOption))
            <option value="0" {{ !empty($disabled) && ($disabled) ? '' : 'disabled' }} {{ empty(Request::input($name)) || ($selectedPlaceholder) ? 'selected' : ''  }}> {{ $placeholderOption }}</option>
        @endif
        @if(!empty($group))
            @foreach($options as $option)
                    <option name="{{$option['name']}}" id="{{'group_'.$name.'_'.$option['id']}}"
                            value="{{$option['id']}}" {{$option['id'] > 0 ? 'disabled': ''}}
                            class="{{$option['class'] ?? ''}}">
                        {{$option['name']}}
                    </option>
                @if(!empty($option[$groupName]))
                    @foreach($option[$groupName] as $opt)
                        <option name="{{$opt['name']}}" id="{{$name.'_'.$opt['id']}}"
                                value="{{$opt['id']}}"
                                {{ Request::input($name)==$opt['id'] ? 'selected' : ''  }} class="suboption {{$suboptionClass ?? ''}}">
                            {{$opt['name']}}
                        </option>
                    @endforeach
                @endif
            @endforeach
        @elseif(!empty($options))
            @foreach($options as $option)
                <option name="{{$option['name']}}" id="{{$name.'_'.$option['id']}}"
                        value="{{$option['id']}}"
                        {{ Request::input($name)==$option['id'] ? 'selected' : ''  }} class="{{$option['class'] ?? ''}}">
                    {{$option['name']}}
                </option>
            @endforeach
        @endif
    </select>
    @if(!empty($svg))
        {!! file_get_contents(asset('/images/icons/' . $svg . '.svg')) !!}
    @endif
</div>

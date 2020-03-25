<div class="select-parent {{ empty($selectParentClass) ? '' : $selectParentClass }}">
    @if(!empty($showLabel))
        <label class="{{empty($labelClass) ? '' : $labelClass}}"
               for="{{empty($selectId) ? '' : $selectId}}">
            {!! empty($placeholder) ? '': $placeholder !!}
            @if(!empty($modalText) && ($showTooltip))
                @include('components.basic.modalbutton', [
                    'modalTarget'           => '#hc_modal_mobile_tooltip',
                    'classTitle'            => 'more-info-please',
                    'buttonText'            => '',
                    'style'                 => 'display: inline-block;',
                    'svg'                   => 'icon-more-info',
                    'modalText'             => $modalText])
            @endif
        </label>
    @endif
    <div class="select-wrapper position-relative {{ empty($selectWrapperClass) ? '' : $selectWrapperClass }}">
        <select class="{{empty($selectClass) ? '' : $selectClass}} form-control"
                @if(!empty($selectId))
                    id="{{ $selectId }}"
                @endif
                data-live-search="{{ !empty($selectPicker) ? $selectPicker : ''}}"
                @if(!empty($selectPickerContainer))
                data-container="{{ $selectPickerContainer }}"
                @endif
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
        @if(!empty($svg) && empty($svgStatic))
            @svg($svg, 'position-absolute v-c')
        @elseif(!empty($svg) && !empty($svgStatic))
            @svg($svg, 'position-static')
        @endif
    </div>
</div>

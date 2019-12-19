<div class="input-parent {{ empty($inputParentClassName) ? '' : $inputParentClassName }}">
    @if(!empty($label))
        <label for="{{empty($id)? '' : $id}}" class="{{ empty($labelClassName) ? '' : $labelClassName }}" for="{{empty($label) ? '' : $label }}">{{ $label }}</label>
    @endif
    <div class="input-wrapper">
        <input
            id="{{empty($id)? '' : $id}}"
            class="{{ empty($inputClassName)? '' : $inputClassName }} form-control"
            type="{{ $type ?? 'text' }}"
            {{--    results="{{ !empty($type) && $type == 'search' ?? $results }}"--}}
            placeholder="{{$placeholder}}"
            value="{{$value}}"
            name="{{$name}}"
            {{!empty($validation) ? $validation : ''}}
        />
    </div>
</div>

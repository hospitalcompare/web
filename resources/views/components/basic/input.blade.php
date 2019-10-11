@if(!empty($label))
<label for="{{empty($id)? '' : $id}}">{{ $label }}</label>
@endif
<input
    id="{{empty($id)? '' : $id}}"
    class="{{empty($className)? '' : $className}}"
    type="{{ $type ?? 'text' }}"
    results="{{ !empty($type) && $type == 'search' ?? $results }}"
    placeholder="{{$placeholder}}"
    value="{{$value}}"
    name="{{$name}}"
    {{!empty($validation) ? $validation : ''}}
/>

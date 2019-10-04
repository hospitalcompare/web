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

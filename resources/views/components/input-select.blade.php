@props(['label', 'name', 'items'])
@php
    $items = explode(',', $items);
@endphp
<label>{{$label}}</label>
<select class="form-select" aria-label="Default select example" name="{{$name}}">
    <option value="">&nbsp; Select...</option>
    @foreach ($items as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</select>
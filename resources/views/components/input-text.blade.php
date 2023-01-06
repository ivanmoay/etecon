@props(['label', 'name', 'value'])
<label class="form-label">{{$label}}</label> @error($name)<code>*{{$message}}</code> @enderror    
<div class="input-group input-group-outline mb-3">
    <input type="text" class="form-control" name="{{$name}}" value="{{$value}}">   
</div>

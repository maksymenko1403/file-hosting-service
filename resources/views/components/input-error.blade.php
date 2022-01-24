@props(['name'])

@error($name)
    <p class="text-danger m-0">{{ $message }}</p>
@enderror

@props(['name'])

@error($name)
<p class="text-rose-400 text-sx mt-1 font-semibold">
    {{ $message }}
</p>
@enderror

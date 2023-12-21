<div class="mb-8 relative">
    <label for="{{$label}}" class="sr-only">{{$label}}</label>
    <div class="relative">
        <input type="{{$type}}" name="{{$name}}" value="" placeholder="{{$placeholder}}"
            class="w-full px-4 py-3 pl-12 border rounded-lg" id="username">
        <span class="fa-solid fa-envelope absolute top-1/2 transform -translate-y-1/2 left-4 text-gray-400"></span>
    </div>
    @error('$name')
        <span class="text-red-700">{{ $message }}</span>
    @enderror
</div>
<div class="relative">
    <button type="submit" onclick="document.getElementById('{{ $name }}').value =''"
        class="absolute top-0 right-0 flex h-full items-center pr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4 text-slate-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
        </svg>
    </button>
    @if ('textarea' !== $type)
        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}" id="{{ $name }}" @class([
                'pr-8 w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2',
                'ring-slate-300' => !$errors->has($name),
                'ring-red-300' => $errors->has($name),
            ]) />
    @else
        <textarea type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}" id="{{ $name }}" @class([
                ' w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2',
                'ring-slate-300' => !$errors->has($name),
                'ring-red-300' => $errors->has($name),
            ])>{{ $slot }}</textarea>
    @endif

    @error($name)
        <div class="mt-2 text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

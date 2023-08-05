<label for="{{ $for }}" class="mb-2 block text-sm font-medium text-slate-900">
    {{ $slot }}
    @if ($required)
        <span class="italic font-semibold text-xm text-red-500">required</span>
    @endif
</label>

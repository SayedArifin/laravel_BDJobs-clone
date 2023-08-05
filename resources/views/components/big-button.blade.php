<button type="submit"
    class="w-full {{ isset($bg) ? $bg : 'bg-blue-500' }} hover:{{ isset($bghover) ? $bghover : 'bg-blue-700' }} text-white font-bold py-2 px-4 rounded {{ isset($class) ? $class : null }}">{{ $slot }}</button>

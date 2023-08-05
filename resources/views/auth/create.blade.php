<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h1>
    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="post">
            @csrf
            <div class="mb-8">
                <x-label :required="true" for="email">E-mail</x-label>
                <x-text-input name="email" type="email" />
            </div>
            <div class="mb-8">
                <x-label :required="true" for="password">Password</x-label>
                <x-text-input name="password" type="password" />
            </div>
            <div class="mb-8 flex justify-between text-sm font-medium ">
                <div class="">
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" id="remember"
                            class="rounded-sm border border-slate-400">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div class="">
                    <a href="#" class="text-indigo-600 hover:underline">Forgot Password?</a>
                </div>
            </div>
            <x-big-button>Login</x-big-button>
        </form>

    </x-card>
</x-layout>

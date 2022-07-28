<x-layout>
    <x-card class="max-w-lg p-10 mx-auto mt-24">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Login
            </h2>
            <p class="mb-4">Log into your account to post gigs</p>

            @error('email')
                <p class="mt-1 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </header>

        <form method="POST" action="/auth">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block mb-2 text-lg">Email</label>
                <input type="email" class="w-full p-2 border border-gray-200 rounded" name="email"
                    value="{{ old('email') }}" />


            </div>

            <div class="mb-6">
                <label for="password" class="inline-block mb-2 text-lg">
                    Password
                </label>
                <input type="password" class="w-full p-2 border border-gray-200 rounded" name="password" />
            </div>

            <div class="mb-6">
                <button type="submit" class="px-4 py-2 text-white rounded bg-laravel hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Didn't have an account?
                    <a href="/register" class="text-laravel">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

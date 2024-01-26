<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 rounded p-8">
            <h1 class="text-center font-bold text-xl mb-4">Log in to your account</h1>

            <form method="POST" action="/sessions">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input id="email" name="email" type="email" class="border border-gray-400 p-2 w-full rounded-full" value="{{old('email')}}" required />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input id="password" name="password" type="password" class="border border-gray-400 p-2 w-full rounded-full" required />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500">Log in</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>

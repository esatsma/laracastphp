<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 rounded p-8">
            <h1 class="text-center font-bold text-xl mb-4">Log in to your account</h1>

            <form method="POST" action="/sessions">
                @csrf
                <x-form.field>
                    <x-form.input name="email" type="email"></x-form.input>
                </x-form.field>
                <x-form.field>
                    <x-form.input name="password" type="password"></x-form.input>
                </x-form.field>
                <x-form.field>
                    <button type="submit" class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500">Log in</button>
                </x-form.field>
            </form>
        </main>
    </section>
</x-layout>

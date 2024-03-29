@if(session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bottom-4 right-4 bg-blue-300 text-white py-2 px-4 rounded ">
        <p>
            {{ session('success')->get('success') }}
        </p>
    </div>
@endif

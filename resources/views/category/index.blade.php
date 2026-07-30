<x-layout title="Category | Buisness Management">
    <div>
        <div class="flex gap-4 justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-slate-800">Categories</h2>
                <p class="text-sm text-slate-500">Manage your product/service categories</p>
            </div>
            <div>
                <a href="{{ route('category.create') }}"
                class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                + New Category
                </a>
            </div>
        </div>

        <div>
            <p class="mt-2">Total categories {{ $totalItems }}</p>

            <div class="mt-4 flex gap-6 flex-wrap">
                @foreach ($categories as $category)
                    <x-category-card :category="$category" />
                @endforeach
            </div>
        </div>

        @if (session('success'))
            <p id="successAlert" class="mt-2 mb-4 px-4 py-3 rounded-lg bg-green-50 text-green-700 border border-green-200 text-sm transition-opacity duration-500">{{ session('success') }}</p>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const successAlert = document.querySelector("#successAlert");
            
            if(successAlert) {
                setTimeout(() => {
                    successAlert.remove();
                }, 3000)
            }
        })
    </script>
</x-layout>
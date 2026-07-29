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
    </div>
</x-layout>
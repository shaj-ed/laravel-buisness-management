<x-layout title="Category | Buisness Management">
    <div>
        <a href="{{ route('category.index') }}" class="text-sky-400 underline">Go back</a>
        <h2 class="text-xl font-semibold text-slate-800">Update Categories</h2>

        <div class="mt-4">
            <form id="categoryForm" action="{{ route('category.update', $category) }}" method="POST">
                @csrf
                @method("PUT")
                @include('category._form')
                
                <button type="submit"
                    class="mt-4 bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    <span id="saveButton" class="block">Update</span>
                    <span id="loadingButton" class="hidden">Updating...</span>
                </button>
            </form>
        </div>
    </div>

    <script>
        const categoryForm = document.querySelector("#categoryForm");
        const saveButton = document.querySelector("#saveButton");
        const loadingButton = document.querySelector("#loadingButton");

        categoryForm.addEventListener('submit', () => {
            saveButton.classList.remove('block');
            saveButton.classList.add('hidden');
            loadingButton.classList.remove('hidden');
        })
    </script>
</x-layout>
<x-layout title="Category | Buisness Management">
    <div>
        <a href="{{ route('category.index') }}" class="text-sky-400 underline">Go back</a>
        <h2 class="text-xl font-semibold text-slate-800">Create Categories</h2>

        <div class="mt-4">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="mb-2 block">Category Name *</label>

                    <input
                        class="border px-2 py-1 rounded-sm w-xl block"
                        placeholder="Enter name"
                        name="categoryName"
                        value=""
                    />
                </div>

                <div>
                    <label class="mb-2 block">Description</label>

                    <textarea
                        class="border px-2 py-1 rounded-sm w-xl block"
                        placeholder="Write description.."
                        name="description"
                        value=""
                    ></textarea>

                </div>
                
                <button type="submit"
                    class="mt-4 bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Save
                </button>
            </form>

        </div>
    </div>
</x-layout>
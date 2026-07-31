<div>
    <div class="mb-4">
        <label class="mb-2 block">Category Name *</label>

        <input
            class="border px-2 py-1 rounded-sm w-xl block"
            placeholder="Enter name"
            name="name"
            value="{{ old('name', $category->name ?? "") }}"
        />

        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="mb-2 block">Description</label>

        <textarea
            class="border px-2 py-1 rounded-sm w-xl block"
            placeholder="Write description.."
            name="description"
        >{{ old('description', $category->description ?? "") }}</textarea>
    </div>

    @isset($category)
       <div class="mt-2 flex gap-4 items-center">
             <label for="status">Status</label>
            <input
                id="status"
                type="checkbox"
                name="status"
                value="1"
                {{ old('status', $category->status ? 'checked' : '') }}
            />
       </div>
    @endisset
</div>
@props(['category'])

<article class="bg-white rounded-xl border border-slate-200 p-6">
    <div class="flex gap-2 items-center">
        <h3 class="text-xl font-bold text-slate-800">
            {{ $category->name }}
        </h3>
        @if ($category->status)
                <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-200">Active</span>
        @else
            <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-500 border border-slate-200">Inactive</span>
        @endif
    </div>
    <p>
        {{ $category->description ?? "No description available" }}
    </p>

    <div class="mt-6">
        <a href="{{ route('category.create') }}" class="py-1 px-4 rounded bg-slate-800 text-white text-sm font-semibold">
            Edit
        </a>
    </div>
</article>

<aside class="w-64 h-screen bg-slate-900 text-slate-200 flex flex-col fixed left-0 top-0">
    <div class="px-6 py-5 text-xl font-bold text-white border-b border-slate-800">
        Business<span class="text-indigo-400">EDD</span>
    </div>

    <nav class="flex-1 px-3 py-4 space-y-1">
        <a href="{{ route('category.index') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-medium hover:bg-slate-800 hover:text-white transition
                  {{ request()->routeIs('category.index') ? 'bg-slate-800 text-white' : '' }}">
            Categories
        </a>

        {{-- future links: Products, Invoices, Customers, etc --}}
    </nav>

    <div class="px-6 py-4 border-t border-slate-800 text-xs text-slate-500">
        v1.0 · Day 1
    </div>
</aside>
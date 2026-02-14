<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Inventory Management Admin - GAIS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#137fec",
              "background-light": "#f6f7f8",
              "background-dark": "#101922",
            },
            fontFamily: {
              "display": ["Inter"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
<!-- Sidebar -->

<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0">
<div class="p-6 flex items-center gap-3">
    <div class="bg-white p-1 rounded-lg shadow-sm overflow-hidden">
      <img
        src="{{ asset('images/bosowa.png') }}"
        alt="BOSOWA"
        class="h-7 w-auto max-w-[120px] object-contain"
      />
    </div>
    <h1 class="font-bold text-xl tracking-tight text-primary">GAIS Admin</h1>
  </div>
<nav class="flex-1 px-4 space-y-1 overflow-y-auto">

<a class="flex items-center gap-3 px-3 py-2.5 bg-primary text-white rounded-lg transition-all" href={{ route('admin.dashboard') }}>
<span class="material-icons-round text-[20px]">dashboard</span>
<span class="font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="{{ route('inventory.index') }}">
<span class="material-icons-round text-[20px] text-slate-400 group-hover:text-primary">inventory_2</span>
<span class="font-medium">Inventory</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-icons-round text-xl  text-slate-400 group-hover:text-primary">apartment</span>
<span class="font-medium">Assets</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="#">
<span class="material-icons-round text-[20px] text-slate-400 group-hover:text-primary">assignment</span>
<span class="font-medium">Requests</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="#">
<span class="material-icons-round text-[20px] text-slate-400 group-hover:text-primary">fact_check</span>
<span class="font-medium">Checklist</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="#">
<span class="material-icons-round text-[20px] text-slate-400 group-hover:text-primary">meeting_room</span>
<span class="font-medium">Room Booking</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="#">
<span class="material-icons-round text-[20px] text-slate-400 group-hover:text-primary">store</span>
<span class="font-medium">Vendors</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="{{ route('inventory.index') }}">
<span class="material-icons-round text-xl text-slate-400 group-hover:text-primary">assessment</span>
<span class="font-medium">Reports</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<img alt="Admin Profile" class="w-10 h-10 rounded-full" data-alt="Headshot of a professional male office administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCXB1pNBjmzjvswfF3bT1DbjGBujdC0n9vDQj7Qx-1fhWnXDT6svGNiJnsvrR3ssTqgNj61l4jtWnLCC7YjF-W-PS_Qx0ClwdWRVzmBXVG_YmwqGM33WwNvFnAS383sMWwcJqEKrQ9CGhXApkeJ1WGdbTlC0pybJYxvKyGc6m-AaYVBPvXojS32yqLLpUzFAjr-9Xy72utReN-SAQ81bnpvZm72ZoyjXgXWHArFr4OzCsipWHyvLcsGs4f8lYk4W_Vn8s7hjwgCJ4"/>
<div>
<p class="text-sm font-semibold text-slate-800 dark:text-slate-200">Alex Rivers</p>
<p class="text-xs text-slate-500">Super Admin</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 p-8">
<!-- Header -->
<header class="flex justify-between items-end mb-8">
<div>
<h1 class="text-2xl font-bold text-slate-900 dark:text-white">Inventory Management</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">Manage and track office assets and supplies across all locations.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
<span class="material-icons text-sm">file_download</span>
<span>Export CSV</span>
</button>
<a href="{{ route('inventory.create') }}"
   class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-shadow shadow-lg shadow-primary/20">
    <span class="material-icons text-sm">add</span>
    <span class="font-medium">Add New Item</span>
</a>
</div>
</header>
<!-- Stats Overview -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 text-sm font-medium">Total Items</span>
<span class="material-icons text-primary">inventory_2</span>
</div>
<div class="text-2xl font-bold">
    {{ $totalItems }}
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 text-sm font-medium">Low Stock Alerts</span>
<span class="material-icons text-red-500">warning</span>
</div>
<div class="text-2xl font-bold">14</div>
<div class="text-xs text-slate-500 mt-1">Items requiring restock</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 text-sm font-medium">Damaged Assets</span>
<span class="material-icons text-amber-500">report_problem</span>
</div>
<div class="text-2xl font-bold">5</div>
<div class="text-xs text-slate-500 mt-1">Pending maintenance</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 text-sm font-medium">Total Value</span>
<span class="material-icons text-primary">payments</span>
</div>
<div class="text-2xl font-bold">$42,850</div>
<div class="text-xs text-slate-500 mt-1">Estimated asset value</div>
</div>
</div>
<!-- Data Grid Container -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<!-- Filter Bar -->
 <div class="px-8 pt-6 pb-4">
    <form method="GET" action="{{ route('inventory.index') }}"
          class="flex items-center justify-between gap-4">

        <!-- SEARCH -->
        <div class="relative w-1/2">
            <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">
                search
            </span>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search item name..."
                class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
            />
        </div>

        <!-- DROPDOWN WRAPPER -->
        <div class="flex gap-3">

            <!-- CATEGORY -->
            <select name="category"
                onchange="this.form.submit()"
                class="px-4 py-2.5 bg-white border border-slate-200 rounded-lg text-sm min-w-[160px] focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="">All Categories</option>
                <option value="ATK" {{ request('category') == 'ATK' ? 'selected' : '' }}>ATK</option>
                <option value="Electronics" {{ request('category') == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                <option value="Furniture" {{ request('category') == 'Furniture' ? 'selected' : '' }}>Furniture</option>
            </select>

            <!-- LOCATION -->
            <select name="location"
                onchange="this.form.submit()"
                class="px-4 py-2.5 bg-white border border-slate-200 rounded-lg text-sm min-w-[160px] focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="">All Locations</option>
                <option value="Room 302" {{ request('location') == 'Room 302' ? 'selected' : '' }}>Room 302</option>
                <option value="Storage A" {{ request('location') == 'Storage A' ? 'selected' : '' }}>Storage A</option>
            </select>

        </div>

    </form>
</div>

<!-- Table -->
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/30 text-slate-500 dark:text-slate-400 text-xs font-semibold uppercase tracking-wider">
<tr>
<th class="px-6 py-4">ID</th>
<th class="px-6 py-4">Item Name</th>
<th class="px-6 py-4">Category</th>
<th class="px-6 py-4">Location</th>
<th class="px-6 py-4">Stock Level</th>
<th class="px-6 py-4">Condition</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@forelse($inventories as $item)
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 font-semibold text-slate-500">
    {{ $item->id }}
</td>

<td class="px-6 py-4">
    <div class="font-semibold text-slate-900 dark:text-slate-100">
        {{ $item->item_name }}
    </div>
</td>

<td class="px-6 py-4">
    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-700">
        {{ $item->category }}
    </span>
</td>

<td class="px-6 py-4 text-slate-600">
    {{ $item->location }}
</td>

<td class="px-6 py-4">
    {{ $item->stock }}
</td>

<td class="px-6 py-4">
    {{ $item->condition }}
</td>

<td class="px-6 py-4 text-right">
    <div class="flex justify-end gap-2">

    <a href="{{ route('inventory.edit', $item->id) }}"
       class="text-primary font-medium">
        Edit
    </a>

    <form action="{{ route('inventory.destroy', $item->id) }}"
          method="POST"
          onsubmit="return confirm('Yakin mau hapus?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 font-medium">
            Delete
        </button>
    </form>

</div>
</td>
</tr>
@empty
<tr>
    <td colspan="7" class="text-center py-6 text-slate-500">

</tr>
@endforelse
</tbody>
</table>
<div class="px-6 py-4">
    {{ $inventories->links() }}
</div>
</div>
<!-- Pagination -->

</div>
</div>
</div>
</main>
</body></html>
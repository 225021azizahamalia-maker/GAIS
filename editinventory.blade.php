<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GAIS Bosowa - Add New Inventory Item</title>
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
<img alt="User Profile" class="w-8 h-8 rounded-full" data-alt="Portrait of a professional office administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWFCB-_j26J5BhTaRUx96fr4lFAAACLvxOWksFSrs6t811wPhThCDsP01M2qndosgFk0EdeGuzyv0iDRNt7lnlzQ0qIKvfag11Pp90MhoNPR1soJSOc5akgojWLKUtysRZ8-dTCdBaUIFR8McybsTvdZma9PPx1VEzDgFjQC9CwiRnxCMkJ-paWyeiUn7E0oAoK7GgDQy7MaLtIPCSIHPOqn3KbKUEu0FxVV9d2lvmKsK7sdOfXKT99wtHzOUcnMVdBzJPgjooacQ"/>
<div class="overflow-hidden">
<p class="text-sm font-semibold truncate">Admin User</p>
<p class="text-xs text-slate-500 truncate">General Affair</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 p-8">
<!-- Top Header Bar -->
<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-50">
<div class="flex items-center gap-2 text-sm">
<span class="text-slate-500">Inventory</span>
<span class="material-icons text-slate-400 text-sm">chevron_right</span>
<span class="font-medium text-slate-900 dark:text-white">Add New Item</span>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-icons">notifications</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-icons">help_outline</span>
</button>
</div>
</header>
<!-- Form Area -->
<div class="flex-1 p-8 flex justify-center items-start">
<div class="w-full max-w-3xl bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<!-- Form Header -->
<div class="px-8 py-6 border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50">
<h2 class="text-xl font-bold text-slate-900 dark:text-white">Item Registration</h2>
<p class="text-sm text-slate-500 mt-1">Please provide accurate details for the new inventory asset.</p>
</div>
<!-- General Information -->
<form action="{{ route('inventory.update', $item->id) }}" method="POST">
@csrf
@method('PUT')

<!-- General Information -->
<section>
<h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">General Information</h3>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<div class="md:col-span-2">
<label class="block text-sm font-semibold mb-1.5">Item Name</label>
<input name="item_name" type="text"
value="{{ old('item_name', $item->item_name) }}"
class="w-full px-4 py-2.5 rounded-lg border"/>
</div>

<div>
<label class="block text-sm font-semibold mb-1.5">Category</label>
<select name="category" class="w-full px-4 py-2.5 rounded-lg border">
<option value="atk" {{ $item->category == 'atk' ? 'selected' : '' }}>ATK</option>
<option value="electronics" {{ $item->category == 'electronics' ? 'selected' : '' }}>Electronics</option>
<option value="furniture" {{ $item->category == 'furniture' ? 'selected' : '' }}>Furniture</option>
<option value="pantry" {{ $item->category == 'pantry' ? 'selected' : '' }}>Pantry Supplies</option>
<option value="cleaning" {{ $item->category == 'cleaning' ? 'selected' : '' }}>Cleaning Supplies</option>
</select>
</div>

<div>
<label class="block text-sm font-semibold mb-1.5">Location</label>
<select name="location" class="w-full px-4 py-2.5 rounded-lg border">
<option value="warehouse-a" {{ $item->location == 'warehouse-a' ? 'selected' : '' }}>Main Warehouse (A)</option>
<option value="it-storage" {{ $item->location == 'it-storage' ? 'selected' : '' }}>IT Storage Room</option>
<option value="floor-3" {{ $item->location == 'floor-3' ? 'selected' : '' }}>Floor 3 Utility Room</option>
<option value="reception" {{ $item->location == 'reception' ? 'selected' : '' }}>Reception Desk</option>
</select>
</div>

</div>
</section>

<!-- Stock -->
<section>
<h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Stock Management</h3>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<div>
<label class="block text-sm font-semibold mb-1.5">Initial Stock</label>
<input name="stock" type="number"
value="{{ old('stock', $item->stock) }}"
class="w-full px-4 py-2.5 rounded-lg border"/>
</div>

<div>
<label class="block text-sm font-semibold mb-1.5">Minimum Stock Level</label>
<input name="minimum_stock" type="number"
value="{{ old('minimum_stock', $item->minimum_stock) }}"
class="w-full px-4 py-2.5 rounded-lg border"/>
</div>

<div>
<label class="block text-sm font-semibold mb-1.5">Unit</label>
<select name="unit" class="w-full px-4 py-2.5 rounded-lg border">
<option value="pcs" {{ $item->unit == 'pcs' ? 'selected' : '' }}>PCS</option>
<option value="box" {{ $item->unit == 'box' ? 'selected' : '' }}>Box</option>
<option value="unit" {{ $item->unit == 'unit' ? 'selected' : '' }}>Unit</option>
</select>
</div>

</div>
</section>

<!-- Physical -->
<section>
<h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Physical Attributes</h3>

<div class="space-y-6">

<div>
<label class="block text-sm font-semibold mb-3">Condition</label>
<div class="flex gap-6">

<label class="flex items-center gap-2">
<input type="radio" name="condition" value="good" checked>
<span>Good / Functional</span>
</label>

<label class="flex items-center gap-2">
<input type="radio" name="condition" value="damaged">
<span>Damaged / Needs Repair</span>
</label>

</div>
</div>

<div>
<label class="block text-sm font-semibold mb-1.5">Description</label>
<textarea name="description" rows="4"
class="w-full px-4 py-2.5 rounded-lg border">{{ old('description', $item->description) }}</textarea>
</div>

</div>
</section>

<div class="pt-6 border-t flex justify-end gap-3">
<button type="submit"
class="px-8 py-2.5 text-white bg-primary rounded-lg">
Save Item
</button>
</div>

</form>

</div>
</div>
<!-- System Footer -->
<footer class="p-8 text-center">
<p class="text-xs text-slate-500">© 2024 Bosowa Group - General Affair Information System (GAIS) v2.4.0</p>
</footer>
</main>
<!-- Floating Help Button -->
<button class="fixed bottom-6 right-6 w-12 h-12 bg-white dark:bg-slate-800 text-primary rounded-full shadow-xl border border-slate-100 dark:border-slate-700 flex items-center justify-center hover:scale-110 transition-transform z-20">
<span class="material-icons">support_agent</span>
</button>
</body></html>
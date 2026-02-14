<!DOCTYPE html>

<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GAIS Admin Dashboard</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<!-- ✅ Tambahkan Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
</script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
<div class="flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0">
<div class="p-6">
  <div class="flex items-center gap-3">
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
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all group" href="inventoryManagement">
<span class="material-icons-round text-xl text-slate-400 group-hover:text-primary">assessment</span>
<span class="font-medium">Reports</span>
</a>
</nav>
<div class="p-4 mt-auto">
<div class="bg-primary/10 dark:bg-primary/5 p-4 rounded-xl">
<p class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">Help Center</p>
<p class="text-xs text-slate-500 dark:text-slate-400 mb-3">Having issues with the system?</p>
<button class="w-full py-2 bg-primary text-white text-xs font-bold rounded-lg hover:opacity-90 transition-opacity">Contact Support</button>
</div>
</div>
</aside>

<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0 overflow-hidden">
<!-- Top Bar -->
<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 shrink-0">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md group">
<span class="material-icons-round absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/50" placeholder="Search for items, requests, or rooms..." type="text"/>
</div>
</div>

<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full relative">
<span class="material-icons-round">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
</button>

<div class="h-8 w-px bg-slate-200 dark:bg-slate-800 mx-2"></div>

<!-- ✅ Profile Dropdown Wrapper -->
<div x-data="{ open:false }" class="relative flex items-center gap-3">
  <div class="text-right hidden sm:block">
    <p class="text-sm font-semibold">Admin</p>
    <p class="text-[11px] text-slate-500 uppercase font-bold tracking-tight">System Admin</p>
  </div>

  <!-- Avatar as button -->
  <button
    type="button"
    @click="open = !open"
    class="rounded-full focus:outline-none focus:ring-2 focus:ring-primary/40"
    aria-label="Open user menu"
  >
    <img
      class="h-10 w-10 rounded-full object-cover ring-2 ring-primary/20 cursor-pointer"
      data-alt="Admin user profile picture"
      src="https://lh3.googleusercontent.com/aida-public/AB6AXuAE00cXO1FXenvWeqBuxBTnkrxHHCl9PYEHK-kckujvPt6ERuuEhAALiz2fgfOkMKWvSHJVVIT27Qt_Do9-MCc49H7vt3qiW0vjzEFBySW1wOxyPCxVwVyEOhcmaqgoyIHw8mr7qSyVZxc290Uejav7jACT_R8MMn74EAVFhrm_YXBcaLPfh4f4BZAVyjXbbML_5EM8sf3vMoThS6wJiOUwKZ_PK7eI2qCpl-eEdTc0jkD9yboWlHQ8IwAapsjBOwD0fHwj-v7cmdQ"
    />
  </button>

  <!-- Dropdown Panel -->
  <div
    x-show="open"
    @click.away="open = false"
    @keydown.escape.window="open=false"
    x-transition
    class="absolute right-0 top-14 w-56 bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800 overflow-hidden z-50"
    style="display: none;"
  >
    <!-- header mini -->
    <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-800">
      <p class="text-sm font-semibold text-slate-900 dark:text-white">Admin</p>
      <p class="text-xs text-slate-500 dark:text-slate-400">System Admin</p>
    </div>

<a href="#">
</a>


 <form method="POST" action="{{ route('logout') }}">
  @csrf
  <button type="submit"
    class="w-full flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-slate-50 dark:hover:bg-slate-800">
    <span class="material-icons-round text-[18px]">logout</span>
    Logout
  </button>
</form>

  </div>
</div>
<!-- ✅ End Profile Dropdown -->

</div>
</header>

<!-- Dashboard Content -->
<div class="flex-1 overflow-y-auto p-8 space-y-8">
<!-- Page Title -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-bold text-slate-900 dark:text-white">Operational Overview</h2>
<p class="text-slate-500 dark:text-slate-400 text-sm">Welcome back, here's what's happening today.</p>
</div>

<div class="flex gap-3">
    <button class="px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-lg text-sm font-medium hover:bg-slate-50 transition-colors flex items-center gap-2">
        <span class="material-icons-round text-sm">calendar_today</span>
        {{ now()->translatedFormat('d F Y') }}
    </button>
</div>

</div>

<!-- Stat Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
    <div class="flex items-start justify-between">
      <div>
        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Low Stock Items</p>
        <h3 class="text-2xl font-bold mt-1">0</h3>
      </div>
      <div class="bg-amber-100 dark:bg-amber-900/30 p-2 rounded-lg text-amber-600 dark:text-amber-400"></div>
    </div>
    <div class="mt-4 flex items-center gap-2"></div>
  </div>

  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
    <div class="flex items-start justify-between">
      <div>
        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending Requests</p>
        <h3 class="text-2xl font-bold mt-1">0</h3>
      </div>
      <div class="bg-primary/10 p-2 rounded-lg text-primary">
        <span class="material-icons-round">pending_actions</span>
      </div>
    </div>
    <div class="mt-4 flex items-center gap-2"></div>
  </div>

  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
    <div class="flex items-start justify-between">
      <div>
        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Today's Bookings</p>
        <h3 class="text-2xl font-bold mt-1">0</h3>
      </div>
      <div class="bg-indigo-100 dark:bg-indigo-900/30 p-2 rounded-lg text-indigo-600 dark:text-indigo-400">
        <span class="material-icons-round">event_available</span>
      </div>
    </div>
    <div class="mt-4 flex items-center gap-2"></div>
  </div>

  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
    <div class="flex items-start justify-between">
      <div>
        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Completed Checklist</p>
        <h3 class="text-2xl font-bold mt-1">0%</h3>
      </div>
      <div class="bg-emerald-100 dark:bg-emerald-900/30 p-2 rounded-lg text-emerald-600 dark:text-emerald-400">
        <span class="material-icons-round">task_alt</span>
      </div>
    </div>
    <div class="mt-4 bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden"></div>
  </div>
</div>

<!-- Grid Layout for Tables and Lists -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
  <div class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
      <h3 class="font-bold text-slate-900 dark:text-white">Recent Item Requests</h3>
      <a class="text-primary text-sm font-medium hover:underline" href="#">View all</a>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left">
        <thead>
          <tr class="bg-slate-50 dark:bg-slate-800/50">
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Requester</th>
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Item</th>
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Qty</th>
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Date</th>
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
          <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center gap-3"></div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col">
    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
      <h3 class="font-bold text-slate-900 dark:text-white">Room Schedule</h3>
      <button class="p-1 hover:bg-slate-100 dark:hover:bg-slate-800 rounded">
        <span class="material-icons-round text-slate-400">more_vert</span>
      </button>
    </div>
  </div>
</div>

<!-- Secondary Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
  <div class="bg-gradient-to-br from-primary to-blue-700 p-8 rounded-xl text-white shadow-xl flex items-center justify-between group overflow-hidden relative">
    <div class="relative z-10">
      <h3 class="text-xl font-bold mb-2">Vendor Directory</h3>
      <p class="text-blue-100 text-sm max-w-[240px] mb-6">Manage all your external service providers and procurement contacts in one place.</p>
      <button class="bg-white text-primary px-6 py-2.5 rounded-lg text-sm font-bold shadow-lg hover:scale-105 transition-transform">Manage Vendors</button>
    </div>
    <div class="relative z-10 hidden sm:block">
      <div class="grid grid-cols-2 gap-2">
        <div class="h-12 w-12 bg-white/20 rounded-lg flex items-center justify-center"><span class="material-icons-round">local_shipping</span></div>
        <div class="h-12 w-12 bg-white/20 rounded-lg flex items-center justify-center"><span class="material-icons-round">support_agent</span></div>
        <div class="h-12 w-12 bg-white/20 rounded-lg flex items-center justify-center"><span class="material-icons-round">construction</span></div>
        <div class="h-12 w-12 bg-white/20 rounded-lg flex items-center justify-center"><span class="material-icons-round">receipt_long</span></div>
      </div>
    </div>
    <span class="material-icons-round absolute -right-4 -bottom-4 text-[120px] opacity-10 rotate-12">storefront</span>
  </div>

  <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 flex flex-col gap-6">
    <div class="flex items-center justify-between">
      <h3 class="font-bold">Daily Checklist Progress</h3>
    </div>
  </div>
</div>

</div>

<!-- Footer -->
<footer class="px-8 py-4 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
<p class="text-xs text-slate-500 dark:text-slate-400">© 2023 GAIS Operational System • v2.4.1</p>
<div class="flex gap-6">
<a class="text-xs text-slate-500 hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="text-xs text-slate-500 hover:text-primary transition-colors" href="#">Terms of Service</a>
</div>
</footer>
</main>
</div>
</body>
</html>

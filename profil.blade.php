<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bosowa User Profile Settings | GAIS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "bosowa-red": "#e63946",
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
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

<!-- Main Content -->
<main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark">
<!-- Header -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-8 py-6">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 text-sm text-slate-400">
<span>GAIS</span>
<i class="material-icons text-sm">chevron_right</i>
<span>Settings</span>
<i class="material-icons text-sm">chevron_right</i>
<span class="text-slate-600 dark:text-slate-200">User Profile</span>
</div>
<h1 class="text-2xl font-bold text-slate-900 dark:text-white">User Profile Settings</h1>
</div>
</header>
<!-- Content Area -->
<div class="p-8">
<!-- Success Notification (Toast Simulation) -->
<div class="mb-6 flex items-center gap-3 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800/30 text-emerald-700 dark:text-emerald-400 p-4 rounded-xl max-w-2xl">
<i class="material-icons">check_circle</i>
<p class="text-sm font-medium">Your profile information has been updated successfully.</p>
</div>
<div class="max-w-5xl bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-8">
<div class="flex flex-col lg:flex-row gap-12">
<!-- Left Column: Profile Picture -->
<div class="flex flex-col items-center gap-6 w-full lg:w-1/3">
<div class="relative group">
<div class="w-48 h-48 rounded-full border-4 border-white dark:border-slate-800 shadow-xl overflow-hidden bg-slate-100 dark:bg-slate-800">
<img alt="User Avatar" class="w-full h-full object-cover" data-alt="Professional headshot of a corporate manager" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBP22gAY8Accu7muUyT1bG-ixrX641f0nxTz9mJW-wysHaq4oCkdlzQzigEnxMpqvzP7oLkfGTYxcX9IOopaprEptFqKgDMDNwUKIYI67f5Nvqnnn8DBaP9wDbRYXUVWGZp7GPfz5bYD_ITidU_p6URstw6lvXz-8Ur_e7ScPNEvKg0J5BCFNVXk35E3yjzsr9Uyy-tPrBpIHHEQZ7hcR-teamDRKmvIjdOFYi6ttFGXXWMdzFazENqZAXdXYSjMmUlG2Thm0XihbQm"/>
</div>
<button class="absolute bottom-2 right-2 p-3 bg-primary text-white rounded-full shadow-lg hover:bg-primary/90 transition-all">
<i class="material-icons text-xl">camera_alt</i>
</button>
</div>
<div class="text-center">
<h3 class="font-semibold text-lg text-slate-900 dark:text-white">Andi Pratama</h3>
<p class="text-slate-500 text-sm">Senior Logistics Manager</p>
</div>
<div class="w-full pt-4 border-t border-slate-100 dark:border-slate-800">
<p class="text-xs text-slate-400 text-center leading-relaxed">
                                        Allowed file types: PNG, JPG, or GIF.<br/>Max file size 2MB.
                                    </p>
<div class="mt-4 flex flex-col gap-2">
<button class="w-full py-2 px-4 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-medium rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                            Upload New Photo
                                        </button>
<button class="w-full py-2 px-4 text-bosowa-red font-medium rounded-lg hover:bg-red-50 dark:hover:bg-red-950/20 transition-colors">
                                            Remove Photo
                                        </button>
</div>
</div>
</div>
<!-- Right Column: Form Information -->
<div class="flex-1">
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Username -->
<div class="col-span-2">
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="username">
                                                Full Name / Username
                                            </label>
<input class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="username" type="text" value="Andi Pratama"/>
</div>
<!-- Email -->
<div class="col-span-2 md:col-span-1">
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="email">
                                                Email Address
                                            </label>
<input class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 focus:outline-none cursor-not-allowed" id="email" readonly="" type="email" value="andi.pratama@bosowa.co.id"/>
<p class="mt-1 text-xs text-slate-400">Email cannot be changed manually.</p>
</div>
<!-- Phone -->
<div class="col-span-2 md:col-span-1">
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="phone">
                                                Phone Number (No HP)
                                            </label>
<input class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="phone" type="tel" value="+62 812 3456 7890"/>
</div>
<!-- Alamat -->
<div class="col-span-2">
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="address">
                                                Home Address (Alamat)
                                            </label>
<textarea class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none" id="address" rows="4">Jl. Jendral Sudirman No. 12, Kavling 3-4, Makassar, Sulawesi Selatan, 90111</textarea>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="pt-8 mt-8 border-t border-slate-100 dark:border-slate-800 flex justify-end items-center gap-4">
<button class="px-6 py-2.5 text-slate-600 dark:text-slate-400 font-semibold hover:text-slate-900 dark:hover:text-white transition-colors" type="button">
                                            Cancel
                                        </button>
<button class="px-8 py-2.5 bg-primary hover:bg-primary/90 text-white font-semibold rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center gap-2" type="button">
<span>Save Changes</span>
<!-- Hidden spinner for context: <i class="material-icons animate-spin text-lg">sync</i> -->
</button>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Security Section (Secondary Card) -->
<div class="max-w-5xl mt-8 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
<div class="p-6 border-b border-slate-100 dark:border-slate-800">
<h2 class="text-lg font-bold text-slate-900 dark:text-white">Account Security</h2>
<p class="text-sm text-slate-500">Manage your password and security preferences.</p>
</div>
<div class="p-6 flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500">
<i class="material-icons">lock</i>
</div>
<div>
<p class="font-semibold text-slate-900 dark:text-white">Password</p>
<p class="text-sm text-slate-500">Last changed 4 months ago</p>
</div>
</div>
<button class="px-4 py-2 border border-primary text-primary font-medium rounded-lg hover:bg-primary/5 transition-colors">
                            Change Password
                        </button>
</div>
</div>
</div>
</main>
</div>
</body></html>
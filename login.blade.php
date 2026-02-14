<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bosowa GAIS Login</title>
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
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex overflow-hidden">
<!-- Split Screen Container -->
<div class="flex w-full min-h-screen">
<!-- Left Side: Brand Visual (60%) -->
<div class="hidden lg:flex lg:w-3/5 relative items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img
    class="w-full h-full object-cover"
    src="{{ asset('images/gedung_1.jpg') }}"
    alt="Background"
/>

<div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/90 via-background-dark/40 to-transparent"></div>
</div>
<div class="relative z-10 p-12 text-white max-w-2xl">
<div class="mb-8">
<img
        src="{{ asset('images/bosowa.png') }}"
        alt="BOSOWA"
        class="h-7 w-auto max-w-[120px] object-contain"
      />
</div>
<h1 class="text-5xl font-bold mb-6 leading-tight">General Affair Information System</h1>
<p class="text-xl text-white/80 font-light leading-relaxed max-w-lg">
                    Streamlining operations, empowering efficiency, and driving excellence across the Bosowa corporate ecosystem.
                </p>
<div class="mt-12 pt-8 border-t border-white/20">
<p class="text-sm font-medium tracking-widest uppercase opacity-70">Building a Better Future</p>
</div>
</div>
</div>
<!-- Right Side: Login Form (40%) -->
<div class="w-full lg:w-2/5 flex flex-col justify-center items-center bg-background-light dark:bg-background-dark p-8 md:p-16 relative">
<!-- Mobile Logo (shown only on small screens) -->
<div class="lg:hidden mb-12">
<img alt="Bosowa Logo" class="h-12 w-auto" data-alt="Bosowa corporate logo in blue and red" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWOhIJkni5_0UKXtm3Q2hR25vhPRTPqzufdeQUyZiXb188vZOCM7ChG4I_ih7jNWcjyR-SNCA7ln1TjpkbBKZMT0ht1E6AillKB-ZEktaEjLyfgzTEtOb7jqusv9vOoSaAMLtWA8cFhyixCFyjBzjYPuAB0X-7Tuf3RXnINk0BzZhmNK_Lq_NdzFL90UCGN3Um1VHCQnsiQDLoea96S5xFdMXObRN5dl9s4jEKGo_KZfA7DHnbwtFB9J77uJzfmnI9DyXrCgui468"/>
</div>
<div class="w-full max-w-md">
<div class="mb-10 text-center lg:text-left">
<h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Welcome </h2>
<p class="text-gray-500 dark:text-gray-400">Please enter your credentials to access GAIS</p>
</div>

<form method="POST" action="{{ route('login.store') }}" class="space-y-6">
    @csrf

<!-- Email/Username Input -->
<div>
<label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2" for="identity">Email or Username</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-icons text-gray-400 text-xl">person</span>
</div>
<input
  class="block w-full pl-11 pr-4 py-3.5 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 outline-none text-gray-900 dark:text-white"
  id="email"
  name="email"
  value="{{ old('email') }}"
  placeholder="john.doe@bosowa.co.id"
  required
  type="email"
/>

</div>
</div>
<!-- Password Input -->
<div>
<div class="flex items-center justify-between mb-2">
<label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="password">Password</label>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-icons text-gray-400 text-xl">lock</span>
</div>
<input class="block w-full pl-11 pr-12 py-3.5 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 outline-none text-gray-900 dark:text-white" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors" type="button">
<span class="material-icons text-xl">visibility_off</span>
</button>
</div>
</div>
<!-- Remember Me & Forgot Password -->
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded cursor-pointer" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block text-sm text-gray-600 dark:text-gray-400 cursor-pointer" for="remember-me">
                                Remember me
                            </label>
</div>
<a class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors" href="#">
                            Forgot password?
                        </a>
</div>
<!-- Login Button -->
<button class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all duration-200 uppercase tracking-wider" type="submit">
                        Sign In to Portal
                    </button>
</form>
<!-- Help Link -->

</div>
<!-- Footer for Form Side -->
<div class="absolute bottom-8 left-0 right-0 text-center">
<p class="text-xs text-gray-400 dark:text-gray-500">
                    © 2024 Bosowa Group. All rights reserved.
                    <br/>
<span class="mt-1 inline-block opacity-60">Building a Better Future</span>
</p>
</div>
</div>
</div>
</body></html>
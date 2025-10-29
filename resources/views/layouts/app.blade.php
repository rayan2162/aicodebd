<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'AicodeBD') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <!-- DaisyUI + Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Anime.js -->
  <script src="https://cdn.jsdelivr.net/npm/animejs/dist/bundles/anime.umd.min.js"></script>

  <style>
    /* Accent color */
    :root {
      --accent-color: #ff0044;
    }

    html, body {
      overflow-x: hidden;
      width: 100%;
    }

    * {
      box-sizing: border-box;
      max-width: 100vw;
    }

    /* Ensure links are clickable and not overlapped */
    nav a {
      position: relative;
      z-index: 50;
    }

    /* Typewriter animation */
    .typewriter {
      display: inline-block;
      overflow: hidden;
      border-right: 2px solid var(--accent-color);
      white-space: nowrap;
      animation: typing 4s steps(50, end), blink-caret 0.75s step-end infinite;
    }

    @keyframes typing {
      from { width: 0; }
      to { width: 100%; }
    }

    @keyframes blink-caret {
      from, to { border-color: transparent; }
      50% { border-color: var(--accent-color); }
    }

    /* Scroll logo */
  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-scroll {
    display: flex;
    width: max-content;
    animation: scroll 3s linear infinite;
  }


    /* Hide scrollbar for mobile horizontal scroll */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    /* Extra safeguard for sections */
    main, section, footer {
      overflow-x: hidden;
    }
  </style>
</head>

<body class="overflow-x-hidden font-sans antialiased min-h-screen flex flex-col">
  
  {{-- Navbar --}}
  @include('layouts.navbar')

  {{-- Page Content --}}
  <main class="flex-grow">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('layouts.footer')

  <script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', function () {
      const menuBtn = document.getElementById('menu-btn');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuIconOpen = document.getElementById('menu-icon-open');
      const menuIconClose = document.getElementById('menu-icon-close');

      if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
          menuIconOpen.classList.toggle('hidden');
          menuIconClose.classList.toggle('hidden');
        });
      }
    });

    // Project card scroll (if used)
    const container = document.getElementById('card-container');
    function scrollCards(direction) {
      const scrollAmount = 320; // Adjust based on card width + gap
      if (container) {
        container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      }
    }
  </script>

  {{-- Optional script stack --}}
  @stack('scripts')
</body>
</html>

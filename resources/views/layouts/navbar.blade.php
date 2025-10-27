<nav class="bg-gray-200/70 backdrop-blur-sm relative z-50 sticky top-0">
  <div class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between items-center">

      <!-- Logo -->
      <div class="flex items-center">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/aicodebd.svg') }}" alt="AicodeBD" class="h-40 w-auto">
        </a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden sm:flex space-x-6">
        <a href="{{ url('/') }}" class="text-black hover:text-[var(--accent-color)] py-2 transition">Home</a>
        <a href="#services" class="text-black hover:text-[var(--accent-color)] py-2 transition">Services</a>
        <a href="#case-study" class="text-black hover:text-[var(--accent-color)] py-2 transition">Case Study</a>
        <a href="#products" class="text-black hover:text-[var(--accent-color)] py-2 transition">Try Our Products</a>
        <a href="#about" class="text-black hover:text-[var(--accent-color)] py-2 transition">About Us</a>
        <a href="#contact" class="text-white px-4 py-2 rounded-lg bg-green-500">Contact Us</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="sm:hidden">
        <button id="menu-btn" type="button"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-[var(--accent-color)] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <svg class="h-6 w-6" id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg class="h-6 w-6 hidden" id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="sm:hidden hidden transition-all duration-300 ease-in-out bg-gray-100">
    <div class="px-4 pb-4 space-y-2">
      <a href="{{ url('/') }}" class="block text-gray-800 hover:text-[var(--accent-color)] transition">Home</a>
      <a href="#services" class="block text-gray-800 hover:text-[var(--accent-color)] transition">Services</a>
      <a href="#case-study" class="block text-gray-800 hover:text-[var(--accent-color)] transition">Case Study</a>
      <a href="#about" class="block text-gray-800 hover:text-[var(--accent-color)] transition">About Us</a>
      <a href="#contact" class="block text-white text-center py-2 rounded-lg bg-green-500">Contact Us</a>
    </div>
  </div>
</nav>

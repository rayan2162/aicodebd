{{-- Footer --}}
<footer class="bg-gray-200/70 backdrop-blur-sm text-gray-800 shadow-lg">
  <div class="p-6 sm:p-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-center">

      <!-- Logo -->
      <aside class="flex justify-center lg:justify-start lg:col-span-1">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/aicodebd.svg') }}" alt="AIcodeBD Logo" class="h-40 w-auto mb-4 lg:mb-0 hover:opacity-80 transition">
        </a>
      </aside>

      <!-- Footer Menus -->
      <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:col-span-4">

        <nav>
          <h6 class="font-semibold text-lg mb-2 text-gray-700">Services</h6>
          <a href="#web" class="block text-gray-700 hover:text-blue-600 transition">Website</a>
          <a href="#software" class="block text-gray-700 hover:text-blue-600 transition">Software</a>
          <a href="#apps" class="block text-gray-700 hover:text-blue-600 transition">Apps</a>
        </nav>

        <nav>
          <h6 class="font-semibold text-lg mb-2 text-gray-700">AIcodeBD</h6>
          <a href="#about" class="block text-gray-700 hover:text-blue-600 transition">Who are we?</a>
          <a href="#process" class="block text-gray-700 hover:text-blue-600 transition">How do we work?</a>
          <a href="#contact" class="block text-gray-700 hover:text-blue-600 transition">Contacts</a>
        </nav>

        <nav>
          <h6 class="font-semibold text-lg mb-2 text-gray-700">Legal</h6>
          <a href="#referral" class="block text-gray-700 hover:text-blue-600 transition">Commission on Referral</a>
          <a href="#terms" class="block text-gray-700 hover:text-blue-600 transition">Terms of Use</a>
          <a href="#privacy" class="block text-gray-700 hover:text-blue-600 transition">Privacy Policy</a>
        </nav>

        <nav>
          <h6 class="font-semibold text-lg mb-2 text-gray-700">Social</h6>
          <div class="flex space-x-4">
            <a href="https://facebook.com" target="_blank" class="hover:text-blue-600 transition" aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M9 8H6v4h3v12h5V12h3.642l.358-4H14V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z" />
              </svg>
            </a>

            <a href="https://twitter.com" target="_blank" class="hover:text-blue-600 transition" aria-label="Twitter">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M24 4.557a9.94 9.94 0 0 1-2.828.775 4.93 4.93 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.385 4.482A13.978 13.978 0 0 1 1.671 3.149 4.922 4.922 0 0 0 3.195 9.723a4.9 4.9 0 0 1-2.229-.616v.06a4.927 4.927 0 0 0 3.949 4.827 4.996 4.996 0 0 1-2.224.084 4.936 4.936 0 0 0 4.6 3.42A9.867 9.867 0 0 1 0 19.54a13.94 13.94 0 0 0 7.548 2.212c9.142 0 14.307-7.721 13.995-14.646A9.936 9.936 0 0 0 24 4.557z" />
              </svg>
            </a>

            <a href="https://youtube.com" target="_blank" class="hover:text-red-600 transition" aria-label="YouTube">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 4-8 4z" />
              </svg>
            </a>

            <a href="https://linkedin.com" target="_blank" class="hover:text-blue-700 transition" aria-label="LinkedIn">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M4.98 3.5A2.5 2.5 0 1 1 4.98 8a2.5 2.5 0 0 1 0-5zM2 9h6v12H2zM14 9h5v2.293c.803-1.278 2.36-2.293 4.79-2.293C26.092 9 28 10.906 28 14.146V21h-6v-5.938c0-1.445-.519-2.437-1.812-2.437-1.324 0-2.188.994-2.188 2.437V21h-6z" />
              </svg>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center py-3 border-t border-gray-300 text-sm bg-gray-100">
    <p>Copyright © {{ date('Y') }} - All rights reserved by 
      <a href="{{ url('/') }}" class="hover:underline" style="color: #f92e65">AicodeBD</a>
    </p>
  </div>
</footer>

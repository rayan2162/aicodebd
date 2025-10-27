@extends('layouts.app')
@section('content')

<div class="relative px-6 lg:px-16 h-[66vh] flex flex-col lg:flex-row overflow-hidden">

  {{-- Dark Overlay for entire hero --}}
  <div class="absolute inset-0 bg-black -z-10"></div>

  {{-- Hero Text (Left) --}}
  <div class="flex-1 flex flex-col justify-center items-start text-left p-10 relative z-10">
    <div class="max-w-xl space-y-4">
      <p class="text-sm sm:text-lg text-gray-300">The Trusted Development Company of Choice.</p>
      <h1 class="text-5xl sm:text-7xl md:text-6xl font-semibold tracking-tight text-white">
        Where Your <span class="text-[var(--accent-color)]">IDEA</span> <br> Turns Into a Solution.
      </h1>
      <p class="text-lg sm:text-xl text-gray-200 font-medium">
        Website, Software, or App – We build what you need with Quality, Reliability, and Affordable Pricing.
      </p>
      <div class="mt-6 flex items-center gap-x-6">
        <a href="#" class="rounded-md bg-green-500 text-1xl px-5 py-2.5 font-semibold text-white shadow-md">
          Talk With Us
        </a>
        <a href="#" class=" font-semibold text-gray-300 hover:text-white">Learn more <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </div>

  {{-- Video (Right) --}}
  <div class="flex-1 relative w-full h-64 sm:h-full lg:h-full">
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
      <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">

    </video>
  </div>


        </div>

</div>


{{-- === COMPANIES SECTION === --}}
<div class="bg-white py-5 flex-shrink-0 mt-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h1 class="text-4xl sm:text-5xl md:text-5xl font-semibold text-gray-900 leading-tight mb-4">
                Trusted by <span class="text-[var(--accent-color)]">Industry and Institutions</span>
                <div class="h-4"></div>
                of Bangladesh
            </h1>
<br>

    {{-- Horizontal scroll - Fixed centering --}}
    <div class="mt-6 overflow-x-auto">
      <div class="flex justify-center space-x-6 min-w-max items-center px-4">
        <div class="flex-shrink-0 flex items-center space-x-3">
          <img src="{{ asset('images/cu_logo.png') }}" alt="Chittagong University" class="h-12 w-auto object-contain" />
          <div class="text-left">
            <p class="text-gray-800 font-semibold text-sm">Dept. of Mathematics</p>
            <p class="text-gray-800 font-semibold text-sm">University of Chittagong</p>
          </div>
        </div>

        <div class="flex-shrink-0 flex items-center space-x-3">
          <img src="{{ asset('images/zafaria_lacquer.jpg') }}" alt="Zafaria Lacquer" class="h-12 w-auto object-contain" />
          <div class="text-left">
            <p class="text-gray-800 font-semibold text-sm">Zafaria Lacquer</p>
            <p class="text-gray-800 font-semibold text-sm">& Traders</p>
          </div>
        </div>

        <div class="flex-shrink-0 flex items-center space-x-3">
          <img src="{{ asset('images/cse_aa_pu.png') }}" alt="CSE Alumni Association" class="h-12 w-auto object-contain" />
          <div class="text-gray-800 font-semibold text-sm leading-snug">
            CSE Alumni Association<br>Premier University
          </div>
        </div>

        <div class="flex-shrink-0 flex items-center space-x-3">
          <img src="{{ asset('images/BMS_logo.png') }}" alt="Bangladesh Mathematical Society" class="h-12 w-auto object-contain" />
          <div class="text-gray-800 font-semibold text-sm leading-snug">
            Bangladesh Mathematical Society <br>BMS
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</div>









  {{-- Add margin after company section --}}
  <div class="mb-6"></div>

</div>

{{-- what we do --}}
@include('layouts.welcome.whatwedo')

{{-- sector --}}
@include('layouts.welcome.sector')

{{-- Scroll logo --}}
@include('layouts.welcome.scrolllogo')

{{-- Workflow --}}
@include('layouts.welcome.workflow')

{{-- Projects --}}
@include('layouts.welcome.projects')

{{-- Testimonial --}}
@include('layouts.welcome.testimonial')

{{-- CTA --}}
@include('layouts.welcome.cta')

@endsection


@push('script')
@endpush
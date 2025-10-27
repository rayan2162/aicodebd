<section class="py-5 bg-white">
  <div class="max-w-7xl mx-auto lg:px-0">
<h2 class="text-6xl font-semibold text-right mb-4 px-4 sm:px-0">
  Our <span class="text-[var(--accent-color)]"> Works</span>
</h2>

<p class="w-full sm:w-3/4 ml-0 sm:ml-auto text-right text-gray-600 mb-12 px-4 sm:px-0 text-justify">
  We pride ourselves on delivering quality products on time, ensuring customer satisfaction, and maintaining the highest standards in every project.  
  Our dedicated team works tirelessly to innovate, provide seamless solutions, and exceed client expectations.  
  From concept to completion, we focus on reliability, efficiency, and continuous improvement to help your business thrive.
</p>





    {{-- Horizontal Scroll Container --}}
    <div class="flex overflow-x-auto gap-8 pb-6 pl-6 pr-0 scrollbar-hide">
      @foreach ([
        [
    'img' => 'images/cumathbms.png',
    'project' => '24th International Mathematics Conference',
    'company' => 'Bangladesh Mathematical Society',
    'desc' => 'An interactive platform developed for the 24th International Mathematics Conference at the University of Chittagong, showcasing conference details, schedules, and resources with a user-friendly interface and seamless access.'
],
[
    'img' => 'images/cseaapu.png',
    'project' => 'CSE Alumni Association Portal',
    'company' => 'Premier University',
    'desc' => 'A dynamic CSE Alumni Association Portal for Premier University, facilitating alumni networking, event management, and communication, built with modern web technologies to enhance engagement and collaboration.'

],

[
    'img' => 'images/regsys.png',
    'project' => '24IMC Registration and Ticketing System',
    'company' => 'Chittagong University',
    'desc' => 'A comprehensive registration and ticketing system for the 24th International Mathematics Conference, enabling seamless participant registration, payment processing, and ticket management through an intuitive Website.'

],

[
    'img' => 'images/monitoring.png',
    'project' => 'Domain, Hosting, Deployment and Monitoring Services',
    'company' => 'Chittagong University',
    'desc' => 'Provided domain, hosting, deployment, and monitoring services for Chittagong University, including continuous server monitoring for the 24IMC Registration and Ticketing System to ensure reliability and uptime.'


    ],

[
    'img' => 'images/zafaria.png',
    'project' => 'Shop Management System',
    'company' => 'Zafaria Lacquer & Traders',
    'desc' => 'A tailored Shop Management System for Zafaria Lacquer & Traders, streamlining inventory management, sales tracking, and customer relations to enhance operational efficiency and business growth.'


    ],

[
    'img' => 'images/mydaysys.png',
    'project' => 'My Day Management System',
    'company' => '',
    'desc' => 'A personal task and time management system designed to help users organize their daily activities, set reminders, and track progress towards goals with an intuitive interface and customizable features.'


    ],

[
    'img' => 'images/farmer.png',
    'project' => 'Smart Farmer Assistance App',
    'company' => '',
    'desc' => 'A web application designed to assist farmers with crop management, weather updates, and market prices, providing valuable resources and tools to enhance agricultural productivity and decision-making.'


]
      ] as $work)
      <div class="flex-shrink-0 w-[420px] bg-black text-white rounded-2xl overflow-hidden shadow-lg hover:shadow-[#ff0044]/40 hover:shadow-2xl transition duration-300 last:mr-0">
        <div class="flex flex-col h-full">
          {{-- Card Inner (Image + Info) --}}
          <div class="flex h-full flex-col sm:flex-row">
            <div class="w-full sm:w-1/2">
              <img src="{{ asset($work['img']) }}" alt="{{ $work['project'] }}" class="object-cover w-full h-48 sm:h-full">
            </div>
            <div class="sm:w-1/2 p-5 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold">{{ $work['project'] }}</h3>
                <p class="text-sm text-gray-400 uppercase">{{ $work['company'] }}</p>
                <p class="text-gray-200 text-sm mt-3">{{ $work['desc'] }}</p>
              </div>
              <a href="#" class="inline-block mt-4 px-4 py-2 bg-[#ff0044] text-white font-medium rounded-lg hover:bg-[#ff3366] transition self-start">
                Read More →
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

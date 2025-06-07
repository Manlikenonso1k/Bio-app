<x-app-layout>
    {{-- Custom full header outside the slot for proper styling --}}
    <header>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

      <nav class="middle-section">
        <div class="left-section">
          <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/dashboard.svg') }}" alt="Dashboard Icon">
          </a>
        </div>
        <div class="nav-content">
          <div class="hamburger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <div class="nav-list">
            <div class="nav-list-list">
              <div>Resume</div>
              <div>Cover Letter</div>
              <div>Career Support</div>
              <div>Blog</div>
              <div>Financing</div>
              <div class="last-div">Resources</div>
            </div>
            <div class="right-section">
              <button class="Sign">Sign in</button>
              <button class="get">Get Started</button>
            </div>
          </div>
          <div class="mobile-nav-menu">
            <div><a href="#">Resume</a></div>
            <div><a href="#">Cover Letter</a></div>
            <div><a href="#">Career Support</a></div>
            <div><a href="#">Blog</a></div>
            <div><a href="#">Financing</a></div>
            <div><a href="#">Resources</a></div>
            <div class="mbutton">
              <button class="Sign">Sign in</button>
              <button class="get">Get Started</button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    {{-- Optional page header slot for smaller header text --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Main dashboard content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <div class="mt-4">
                        <a href="{{ route('cv.index') }}" 
                           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            View Saved CVs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  @yield('head')
  <link rel="icon" href="{{ asset('images/favicon.ico')}}">
  <meta name="author" content="TRPL Undiksha" />
  <meta name="robots" content="index, follow" />
  <meta property="og:site_name" content="TRPL Undiksha" />
  <meta property="og:type" content="article" />
  <meta property="og:image:width" content="600" />
  <meta property="og:image:height" content="315" />
  <link rel="stylesheet" href="{{ asset('dist/output.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('dist/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/flowbite.min.css')}}">
  <link href="{{ asset('dist/css2')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('dist/style.css')}}">
  <link rel="canonical" href="https://trpl.undiksha.ac.id/">
  <link rel="icon" href="{{ asset('images/favicon.ico')}}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
  <script src="{{ asset('dist/saved_resource')}}"></script>
  <script src="{{ asset('dist/swiper-bundle.min.js.download')}}"></script>
  <script src="{{ asset('dist/flowbite.js.download')}}"></script>
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  
</head>

<body>
  <main>
    <!-- HEADER -->
   
    <header class="sticky top-0 z-50 bg-white bg-opacity-80 backdrop-blur-sm shadow-md transition duration-300 ease-in-out">
      <div x-data="{ open: false }"
        class="flex flex-col w-full mx-auto px-4 lg:items-center lg:justify-between lg:flex-row lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
          <div class="flex items-center">
            <img src="{{ asset('images/trpl.png')}}" alt="logo-undiksha" class="max-h-14">
            <div class="ml-3 hidden lg:block">
              <div class="grid-rows-3">
                <h2 class="font-bold text-sm">Teknologi Rekayasa Perangkat Lunak</h2>
                <p class="font-medium text-xs">Universitas Pendidikan Ganesha</p>
              </div>
            </div>
            <div class="ml-3 lg:hidden">
              <div class="grid-rows-3">
                <h2 class="font-bold text-base">TRPL</h2>
                <p class="font-medium text-xs">Universitas Pendidikan Ganesha</p>
                <!-- <h1 class="text-trpl border-solid text-4xl font-bold">TRPL</h1> -->
              </div>
            </div>
          </div>
          <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
          class="justify-center flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-end lg:flex-row lg:items-center px-6">
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}">Beranda</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('karir')}}">Peluang Karir</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('kurikulum')}}">Akademik</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('pengajar')}}">Pengajar</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('berita','all')}}#berita">Berita</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}#beasiswa">Beasiswa</a>
          {{-- <div class="col-span-6 md:col-span-2 col-start-11 flex">
            <a href="https://penerimaan.undiksha.ac.id/ujian-tulis" target="_blank"
              class="button py-3 px-6 rounded-xl text-center capitalize bg-indigo-700 hover:bg-indigo-500 text-white font-bold flex-grow transition duration-300 ease-in-out">
              DAFTAR</a>
          </div> --}}
        </nav>
      </div>
    </header>

    <main>
    {{ $slot }}
    </main>
    @include('layouts.footer')
    <!-- FOOTER -->
    
  </main>

  <script src="{{ asset('dist/script.js')}}"></script>
  {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
</body>
</html>
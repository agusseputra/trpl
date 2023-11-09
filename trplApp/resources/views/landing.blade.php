<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="descriptions" content="Program Studi TRPL Jurusan Teknik Informatika FTK Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dan game dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
  <meta name="keywords" content="TRPL, Teknologi Rekayasa Perangkat Lunak, Jurusan Teknik Informatika, Universitas Pendidikan Ganesha, FTK Undiksha, Vokasi Unggul" />
  <meta name="author" content="TRPL Undiksha" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://trpl.undiksha.ac.id" />
  <link rel="icon" href="{{ asset('images/favicon.ico')}}">
  <meta property="og:site_name" content="TRPL Undiksha" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="TRPL Undiksha" />
  <meta property="og:image" content="https://trpl.undiksha.ac.id/dist/img/img-mengapa-trpl.png" />
  <meta property="og:image:width" content="600" />
  <meta property="og:image:height" content="315" />
  <meta property="og:description" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
  <meta property="og:url" content="https://trpl.undiksha.ac.id" />
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
  {{-- <script src="{{ asset('dist/flowbite.js.download')}}"></script> --}}
  <title>Teknologi Rekayasa Perangkat Lunak Undiksha</title>
</head>

<body>
  <main>
    <!-- HEADER -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
            href="{{route('landing')}}#top">Beranda</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}#kompetensi">Peluang Karir</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}#skill">Akademik</a>
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}#pengajar">Pengajar</a>          
          <a class="transition duration-300 ease-in-out mr-8 mb-2 lg:mb-0 pb-1.5 border-b-2 border-transparent hover:border-indigo-700 hover:text-gray-900 py-2 text-base md:mt-0 md:ml-4 focus:border-indigo-700 active:border-indigo-700"
            href="{{route('landing')}}#berita">Berita</a>
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
    {{-- <section>
      <div class="swiper slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        id="top">
        <div class="swiper-wrapper" id="swiper-wrapper-1055d7284a6a9efc6" aria-live="off"
          style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" style="width: 2114px;">
            <img src="{{ asset('dist/img/slider.png')}}" class="w-full">
          </div>
          <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" style="width: 2114px;">
            <img src="{{ asset('dist/img/slider-1.png')}}" class="w-full">
          </div>

        </div>
        <div
          class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 2"></span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </section> --}}
<section class="bg-indigo-900 dark:bg-gray-900">
 <div class="swiper slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" id="top">
        <div class="swiper-wrapper"  aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide bg-indigo-900 dark:bg-gray-900 swiper-slide-active" role="group" aria-label="1 / 3" >
                  <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 justify-start">
                      <div class="mr-auto place-self-center lg:col-span-7">
                          <h1 class="max-w-2xl mb-4 font-bold text-white text-3xl lg:text-6xl  dark:text-white">Kini Ngoding <br/> Tak lagi Rumit</h1>
                          <p class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Dibantu tools praktis dan terkini, pengalaman programming
                          menjadi lebih menyenangkan.</p>
                          <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                              Yuk Kepoin
                              <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          </a>
                          </div>
                      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                          <img src="{{ asset('images/devapp.png')}}" alt="mockup">
                      </div> 
                  </div>
            </div> 
            <div class="swiper-slide bg-indigo-900  dark:bg-gray-900 swiper-slide-next" role="group" aria-label="2 / 3">
             <div class="flex flex-wrap hp:flex-wrap-reverse">
                <div class="w-full self-center px-4 lg:w-1/2">
                  <h1 class="max-w-2xl mb-4 font-bold text-white text-end  text-3xl lg:text-4xl dark:text-white">We improve your skills to be <br/> A PROFESSIONAL DIGITAL TALENT</h1>
                          <p class="max-w-2xl mb-6 font-light leading-loose text-white text-end lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">70% Matakuliah Praktikum dengan metode pembelajaran berbasis proyek memberikan pengalaman belajar lebih menarik dan menantang</p>
                          <a href="https://trpl.undiksha.ac.id/#skill" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                              Lihat Kurikulum
                              <svg class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                              </svg>

                          </a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative  lg:mt-9 lg:right-0">
                        <img src="{{ asset('images/dstrpl.JPG')}}" alt="TRPL Undiksha"
                            class=" rounded-tl-full rounded-tr-full shadow-lg h-96  w-full mt-12 mx-auto hover:scale-105 transition duration-300 ease-in-out">
                        <span class="absolute buttom-0 -z-10>
                            <svg width=" 1000" height="1000" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#1e3a8a"
                                d="M16.1,-24.4C20.7,-25.1,24.2,-20.6,33.2,-15.6C42.2,-10.7,56.5,-5.3,58.6,1.2C60.7,7.7,50.4,15.5,38.9,16C27.4,16.6,14.7,10,8,7.6C1.3,5.3,0.7,7.2,-3.2,12.7C-7.1,18.3,-14.1,27.5,-19.4,29C-24.7,30.6,-28.3,24.5,-28.3,18.4C-28.4,12.2,-24.9,6.1,-26.9,-1.1C-28.8,-8.4,-36.2,-16.8,-35.2,-21.2C-34.2,-25.7,-24.9,-26.3,-17.6,-24C-10.3,-21.8,-5.2,-16.6,0.3,-17.1C5.7,-17.6,11.4,-23.6,16.1,-24.4Z"
                                transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>
              </div>
            </div>  
            <div class="swiper-slide bg-indigo-900  dark:bg-gray-900 swiper-slide-next" role="group" aria-label="3 / 3">
                  <div class="grid max-w-screen-xl px-4 py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-4 lg:grid-cols-12 ">
                      <div class="mr-8 place-self-center lg:col-span-7">
                          
                          <h1 class="block font-bold text-white text-xl lg:text-5xl mb-7 hp:mt-7">Yuk Mulai Keseruannya <br/>Bersama Kami</h1>
                          <p class=" text-white mb-8 leading-loose">
                          Bersama Dosen dan Mentor prosesional yang tersertifikasi kompetensi memberikan suasana belajar menyenangkan dan interaktif
                          </p>
                            <a href="https://sidata-ptn-snpmb.bppp.kemdikbud.go.id/ptn_sn.php?ptn=612&prodi=612050&jenis=0" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                    Daftar
                                  </a>
                                <a href="https://drive.google.com/file/d/1GvOSY789XgGPKw4zxZfkY7uBaGgIpdnb/view?usp=sharing" target="_blank" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-100 border border-gray-300 rounded-lg hover:text-black hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    Download Booklet
                                </a> 
                      </div>
                      <div class="w-5/6 lg:mt-0 lg:col-span-5 lg:flex mt-16">
                          <img src="{{ asset('images/trpl-mhs.png')}}"  alt="mockup">
                      </div> 
                  </div>
            </div>  
                  
        </div> 
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 2"></span>
        </div>       
    </div>
</section>
    <!-- KENAPA TRPL -->
    <section id="trpl" class="pt-6 lg:pt-16 max-w-screen-xl mx-auto">
      <div class="container">
        <div class="flex flex-wrap justify-center items-center hp:flex-wrap-reverse">
          <div class="w-full self-end px-12 lg:w-1/2">
            <div class="relative mt-10 mb-10 lg:mt-9 lg:right-0 hover:scale-105 transition duration-300 ease-in-out">
              <img src="{{ asset('dist/img/img-mengapa-trpl.png')}}" alt="">
            </div>
          </div>
          <div class="w-full self-center px-12 lg:px-2 lg:w-1/2">
            <h2 class="lg:px-0 block font-bold text-indigo-800 mb-7 hp:mt-5 lg:text-2xl text-2xl">Mengapa Harus Kuliah Sarjana
              Terapan</h2>
            <h1 class="lg:px-0 text-trpl border-solid text-8xl font-bold my-5">TRPL?</h1>            
            <div id="controls-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-48 overflow-hidden rounded-lg md:h-56">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item ="active">
                        
                      <h5 class="mb-4 text-2xl font-extrabold leading-none">
                      Peluang Kerja
                      <span class="inline-block text-purple-600">Tinggi</span>
                    </h5>
                    <p class="mb-6 text-gray-900">
                      Peluang kerja bagi lulusan yang diserap oleh industri perangkat lunak akan terus berkembang dan 
membutuhkan tenaga kerja terampil dalam pengembangan perangkat lunak
                    </p>  
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <h5 class="mb-4 text-2xl font-extrabold leading-none">
                      Kami telah Hadir<br class="hidden md:block" />
                      selama lebih dari
                      <span class="inline-block text-purple-600">20 tahun</span>
                    </h5>
                    <p class="mb-6 text-gray-900">
                     Didukung dengan pengalaman dan rekam jejak prodi yang telah berdiri selama 23 tahun, kini Program sarjana terapan TRPL memiliki fokus untuk menghasilkan lulusan yang terampil dan unggul dalam bidang pengembangan perangkat lunak,
                      yang sangat dibutuhkan oleh dunia industri dan dunia kerja. 
                    </p>  
                         </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <h5 class="mb-4 text-2xl font-extrabold leading-none">
                      Tools  dan Peralatan Praktikum Terkini
                    </h5>
                    <p>
                    Untuk itu, Prodi TRPL membekali mahasiswa dengan kemampuan belajar dan adaptasi dengan 
                    perkembangan teknologi baru dalam industri perangkat lunak dengan teknologi baru dalam 
                    industri perangkat lunak, serta dengan sarana dan prasarana yang memadai. 
                    </p>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <h5 class="mb-4 text-2xl font-extrabold leading-none">
                      <span class="inline-block text-purple-600">Kampus Unggul </span> Biaya Kuliah Terjangkau                     
                    </h5>
                    <p>
                    Kampus terakreditasi unggul memastikan bahwa fasilitas dan sarana pendukung pembelajaran 
sangat memadai dalam kegiatan perkuliahan. Didukung oleh lingkungan yang nyaman terletak dipusat kota dengan biaya hidup yang relatif 
masih rendah menjadi salah satu daya tarik untuk menempuh pendidikan di kota singaraja.
                    </p>
                   </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
</div>
<a href="https://drive.google.com/file/d/1GvOSY789XgGPKw4zxZfkY7uBaGgIpdnb/view?usp=sharing" target="_blank" class="py-3 px-3 mt-4 rounded-xl text-center capitalize border border-indigo-500/50 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white text-blue-600  flex-grow transition duration-300 ease-in-out">
                                    Download Booklet
                                </a> 
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal"  type="button" class="py-3 mx-8 px-3 mt-4 rounded-xl text-center capitalize border border-blue-500/50 hover:border-blue-700 hover:bg-blue-700 hover:text-white text-blue-600  flex-grow transition duration-300 ease-in-out">
                                    Video Prodil TRPL
                                </button> 
              {{-- <p class="lg:px-0 mt-5">
                <a href="https://penerimaan.undiksha.ac.id/ujian-tulis" target="_blank"
                  class="py-3 px-3 mt-10 rounded-xl text-center capitalize border border-indigo-500/50 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white text-blue-600 font-bold flex-grow transition duration-300 ease-in-out">
                  Yuk.. Daftar Aja dulu</a>
              </p> --}}
          </div>
        </div>
      </div>
    </section>

    <!-- PERBEDAAN D4 S1 -->
    <section id="perbedaan" class="pt-24 px-12 lg:px-24 max-w-screen-xl mx-auto lg:grid lg:grid-cols-12 gap-12">
      <div class="col-span-12 text-center lg:px-24">
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">Apakah Kuliah Sarjana Terapan sama dengan S1?</h2>
        <p class="font-thin text-gray-600 leading-loose">Sarjana Terapan dan S1 keduanya memiliki kualifikasi akademik
          yang setara. Sarjana terapan adalah jenjang pendidikan vokasi. Sementara sarjana adalah jenjang pendidikan
          akademik.</p>
      </div>
      <div class="mt-6 lg:mt-0 col-span-12 md:col-span-6">
        <div class="card-d4 text-white">
          <div class="px-10 py-10">
            <div class="font-semibold text-xl">Sarjana Terapan</div>
            <div class="card-trpl my-1">TRPL</div>
            <div class="px-2 pb-6">
              <div id="accordion-d4" data-accordion="collapse" data-active-classes="text-white font-bold"
                data-inactive-classes="text-gray-100 font-semibold">
                <h2 id="accordion-d4-heading-1">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full text-left border-b border-gray-200 text-white font-bold"
                    data-accordion-target="#accordion-d4-body-1" aria-expanded="true"
                    aria-controls="accordion-d4-body-1">
                    <span>Praktik 70%, Ilmu teori 30%</span>
                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-d4-body-1" class="" aria-labelledby="accordion-d4-heading-1">
                  <div class="py-5 border-b border-gray-200">
                    <p class="mb-2 text-gray-300 font-thin">D4 menitikberatkan praktik sebesar 70 persen sedangkan ilmu
                      teori 30 persen, untuk lebih berfokus pada keterampilan mahasiswa didik.</p>
                  </div>
                </div>
                <h2 id="accordion-d4-heading-2">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full font-semibold text-left border-b border-gray-200 text-gray-100"
                    data-accordion-target="#accordion-d4-body-2" aria-expanded="false"
                    aria-controls="accordion-d4-body-2">
                    <span>Jalur pendidikan profesional, mencetak praktisi</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-d4-body-2" class="hidden" aria-labelledby="accordion-d4-heading-2">
                  <div class="py-5 border-b border-gray-300">
                    <p class="mb-2 text-gray-300 font-light">Sarjana Terapan TRPL menerapkan jalur pendidikan
                      profesional untuk mencetak lulusan yang berkompeten di bidangnya</p>
                  </div>
                </div>
                <h2 id="accordion-d4-heading-3">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full font-semibold text-left border-b border-gray-200 text-gray-100"
                    data-accordion-target="#accordion-d4-body-3" aria-expanded="false"
                    aria-controls="accordion-d4-body-3">
                    <span>Lulusan bergelar S.Tr.Kom untuk D4 TRPL</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-d4-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                  <div class="py-5 border-b border-gray-300">
                    <p class="mb-2 text-gray-300 font-light">Lulusan Sarjana Terapan TRPL mendapatkan gelar S.Tr.Kom</p>
                  </div>
                </div>
                <h2 id="accordion-d4-heading-4">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full font-semibold text-left border-b border-gray-200 text-gray-100"
                    data-accordion-target="#accordion-d4-body-4" aria-expanded="false"
                    aria-controls="accordion-d4-body-4">
                    <span>Dapat melanjutkan ke jenjang Spesialis 1 atau S2 Terapan (Magister) </span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-d4-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                  <div class="py-5 border-b border-gray-300">
                    <p class="mb-2 text-gray-300 font-light">Sama halnya dengan S1, setelah Lulus Sarjana Terapan TRPL
                      dapat melanjutkan ke jenjang selanjutnya yaitu SP1 (Spesialis 1) atau S2 Terapan, maupun magister
                      akademik</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 col-span-12 md:col-span-6">
        <div class="card-s1 bg-slate-100 text-gray-800">
          <div class="px-10 py-10">
            <div class="font-semibold text-2xl ">Sarjana S1</div>
            <div class="text-s1 my-1">Komputer</div>
            <div class="px-2 pb-6">
              <div id="accordion-s1" data-accordion="collapse" data-active-classes="text-gray-700 font-bold"
                data-inactive-classes="text-gray-700 font-semibold">
                <h2 id="accordion-s1-heading-1">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full text-left border-b border-gray-300 font-bold"
                    data-accordion-target="#accordion-s1-body-1" aria-expanded="true"
                    aria-controls="accordion-s1-body-1">
                    <span>Ilmu teori 70%, praktik 30%</span>
                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-s1-body-1" class="" aria-labelledby="accordion-s1-heading-1">
                  <div class="py-5 border-b border-gray-400">
                    <p class="mb-2 text-gray-700 font-thin">Sarjana lebih menitikberatkan pada ilmu teori sebesar 70%,
                      sedangkan praktik 30%.</p>
                  </div>
                </div>
                <h2 id="accordion-s1-heading-2">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full text-left border-b border-gray-300 font-semibold text-gray-700"
                    data-accordion-target="#accordion-s1-body-2" aria-expanded="false"
                    aria-controls="accordion-s1-body-2">
                    <span>Jalur pendidikan akademis, mencetak akademisi</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-s1-body-2" class="hidden" aria-labelledby="accordion-s1-heading-2">
                  <div class="py-5 border-b border-gray-400">
                    <p class="mb-2 text-gray-700 font-light">Sarjana S1 menerapkan jalur pendidikan yang lebih berfokus
                      pada akademis, untuk mencetak lulusan akademisi</p>
                  </div>
                </div>
                <h2 id="accordion-s1-heading-3">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full font-semibold text-left border-b border-gray-300 text-gray-700"
                    data-accordion-target="#accordion-s1-body-3" aria-expanded="false"
                    aria-controls="accordion-s1-body-3">
                    <span>Lulusan bergelar Sarjana atau S.Kom untuk ilmu komputer</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-s1-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                  <div class="py-5 border-b border-gray-400">
                    <p class="mb-2 text-gray-700 font-light">Lulusan Sarjana S1 mendapatkan gelar Sarjana, S.Kom untuk
                      ilmu komputer</p>
                  </div>
                </div>
                <h2 id="accordion-s1-heading-4">
                  <button type="button"
                    class="flex justify-between items-center py-5 w-full font-semibold text-left border-b border-gray-200 text-gray-700"
                    data-accordion-target="#accordion-s1-body-4" aria-expanded="false"
                    aria-controls="accordion-s1-body-4">
                    <span>Dapat melanjutkan ke jenjang pendidikan S2 (Magister)</span>
                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-s1-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                  <div class="py-5 border-b border-gray-300">
                    <p class="mb-2 text-gray-700 font-light">Setelah Lulus Sarjana S1 dapat melanjutkan ke jenjang
                      pendidikan S2 atau Magister</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>     
    </section>
    <section class="bg-gray-100 dark:bg-gray-800 lg:py-12 lg:flex lg:justify-center mt-24">
    <div
        class="overflow-hidden bg-white dark:bg-gray-900 lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
        <div class="lg:w-1/2">
            <div class="h-64 bg-cover lg:h-full" style="background-image:url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')"></div>
        </div>

        <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">
                Yuk Mulai <span class="text-blue-500">Keseruannya</span>
            </h2>

            <p class="mt-4 text-gray-500 dark:text-gray-300">
               Bersama Dosen dan Mentor prosesional tersertifikasi kompetensi memberikan suasana belajar menyenangkan dan interaktif
               <br/><br/>
              <b class="font-bold">MANDIRI CBT </b> | Pendaftaran 15 Juli - 21 Juli 2023
            </p>
            <div class="inline-flex w-full mt-6 sm:w-auto">
                <a href="https://penerimaan.undiksha.ac.id/smbjm" target="_blank" class="inline-flex items-center justify-center w-full px-6 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                    Informasi Pendaftaran
                </a>
            </div>
        </div>
    </div>
</section>
    <!-- KOMPETENSI LULUSAN -->
    <section id="kompetensi" class="mb-28 pt-24 px-12 lg:px-24 max-w-screen-xl mx-auto lg:grid lg:grid-cols-12 gap-12">
      <div class="col-span-12 text-center ">
        <h2 class="text-2xl font-bold text-indigo-800 mb-5">Kompetensi <span class="text-orange">Lulusan</span></h2>
        <p class="font-thin text-gray-600 leading-loose">Lulusan Sarjana Terapan TRPL sangat spesifik dan berorientasi
          kompetensi yang dibutuhkan oleh software house atau bagian IT dalam sebuah perusahaan.</p>
      </div>
      <div class="col-span-12 lg:grid lg:grid-cols-12 lg:gap-12 mt-20">
        <div class="col-span-12 md:col-span-4 ">
          <!-- Card -->
          <div class="w-full flex flex-row items-center mb-20 lg:mb-0">
            <div class="card mx-auto pb-10 bg-white  shadow hover:shadow-lg rounded-lg transition duration-300 ease-in-out">
              <div class="w-20 mx-auto p-6 rounded-full -mt-12 bg-indigo-700">
                <img class="w-14" src="{{ asset('dist/img/software-engineer-icon.png')}}" alt="">
              </div>
              <div class="text-center mt-8 text-2xl font-medium text-indigo-800">Software Engineer</div>
              <div class="px-10 text-center mt-12 font-light text-gray-700 text-sm">
                <p>
                  Sebagai perancang perangkat lunak di perusahaan atau software house
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-4 mb-20 lg:mb-0">
          <!-- Card -->
          <div class="w-full flex flex-row r items-center">
            <div class="card mx-auto pb-10 bg-white  shadow hover:shadow-lg rounded-lg transition duration-300 ease-in-out">
              <div class="w-20 mx-auto p-6 rounded-full -mt-12 bg-orange">
                <img class="w-14" src="{{ asset('dist/img/software-dev-icon.png')}}" alt="">
              </div>
              <div class="text-center mt-8 text-2xl font-medium text-indigo-800">Software Developer</div>
              <div class="px-10 text-center mt-12 font-light text-gray-700 text-sm">
                <p>
                  Sebagai pengembang perangkat lunak pada perusahaan atau software house
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-4 ">
          <!-- Card -->
          <div class="w-full flex flex-row r items-center">
            <div class="card mx-auto pb-10 bg-white  shadow hover:shadow-lg rounded-lg transition duration-300 ease-in-out">
              <div class="w-20 mx-auto p-6 rounded-full -mt-12 bg-indigo-700">
                <img class="w-14" src="{{ asset('dist/img/project-man-icon.png')}}" alt="">
              </div>
              <div class="text-center mt-8 text-2xl font-medium text-indigo-800">Project Manager</div>
              <div class="px-10 text-center mt-12 font-light text-gray-700 text-sm">
                <p>
                  Sebagai pengelola pengembangan perangkat lunak di software house
                </p>
              </div>
            </div>
            
          </div>
          <div class="mt-10 text-center">
            <button type="button" class="py-3 px-3  rounded-xl text-center capitalize border border-indigo-500/50 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white text-blue-600  flex-grow transition duration-300 ease-in-out">
              <a href="{{route('karir')}}">Yuk kenali lebih lanjut -></a>
            </button>
          </div>
        </div>
        
      </div>
    </section>
     <section id="skill" class="m-12 py-12  px-6  md:m-12 lg:mx-auto bg-gray-100 dark:bg-gray-900">
      <div class="max-w-screen-xl lg:mx-auto mt-16">
      <div class="lg:flex lg:items-center">
            <div class="w-full space-y-12 lg:w-1/2 ">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Kegiatan Akademik <br> Peningkatan Kompetensi</h1>

                    <div class="mt-2">
                        <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                        <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                        <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                    </div>
                    <p>
                    Sesuai tagline kami Profesional Unggul dan Berkarakter, berbagai aktivitas akademik selalu didorong menciptakan atmosfir yang nyaman dalam mengembangkan profesionalisme melalui berbagai karya kolaboratif.
                    </p>
                </div>

                <div class="md:flex md:items-start md:-mx-4">
                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>

                    <div class="mt-4 md:mx-4 md:mt-0">
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Pembelajaran berbasis Proyek</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                        Salah satunya melalui pembelajaran berbasis proyek yang mewajibkan mahasiswa untuk dapat berinteraksi langsung dengan industri maupun calon pengguna dalam menganalisis permasalahan hingga mengembangkan proyek.
                        </p>
                    </div>
                </div>

                <div class="md:flex md:items-start md:-mx-4">
                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </span>

                    <div class="mt-4 md:mx-4 md:mt-0">
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Dosen Praktisi</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                            Meningkatkan pengalaman belajar mahasiswa juga diperoleh melalui kegiatan kuliah tamu dari praktisi, seminar, workshop, student exchange, dan melibatkan mahasiswa dalam proyek penelitian dan pengabdian dosen.
                            </p>
                    </div>
                </div>

                <div class="md:flex md:items-start md:-mx-4">
                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </span>

                    <div class="mt-4 md:mx-4 md:mt-0">
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Sertifikasi Kompetensi</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                            Mendukung profesionalisme lulusan, setiap tahunnya mahasiswa diarahkan untuk dapat mengikuti pelatihan dan sertifikasi kompetensi yang rutin diselenggarakan undiksha maupun dari kementerian. Sehingga nantinya lulusan memiliki setidaknya satu sertifikat kompetensi yang diakui industri.</p>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full" src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=755&q=80" alt="">
            </div>
        </div>

        <hr class="my-12 border-gray-200 dark:border-gray-700">

        <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
            <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="rounded-md" src="{{ asset('dist/img/BNSP.png')}}" alt="">
            </div>

            <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="rounded-md" src="{{ asset('dist/img/aws.png')}}" alt="">
            </div>

            <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="rounded-2xl" src="{{ asset('dist/img/azure.png')}}" alt="">
            </div>

            <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                <img class="rounded-2xl" src="{{ asset('dist/img/psd.png')}}" alt="">
            </div>

            <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                <img class="rounded-2xl" src="{{ asset('dist/img/mos.png')}}" alt="">
            </div>
        </div>
      </div>
    </section>
    <section id="berita">
    <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
    <hr class="pt-10"/>
      <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
        <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
          <span class="inline-block mb-1 sm:mb-4">
            Berita dan Acara
          </span>
        </h2>
        <p class="text-gray-700 lg:text-sm lg:max-w-md">
        Temukan berita menarik terkait kegiatan maupun pengalaman belajar kami.
        </p>
      </div>
      <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
      @foreach ($berita as $val)
          <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
          <img src="{{ asset($val->photo)}}" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
              <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                <a href="{{route('kategori',$val->kategori_id)}}" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="{{$val->kategori}}">{{$val->kategori}}</a>
                <span class="text-gray-600">— {{date('D M Y', strtotime($val->created_at));}}</span>
              </p>
              <a href="{{route('berita',$val->slug)}}" aria-label="Berita" title="{{$val->title}}" class="inline-block mb-3  font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{substr($val->title,0,100)}}</a>
            </div>
          </div>
      @endforeach
      </div>
      <div class="text-center mt-10">
        <a href="{{route('berita','all')}}" aria-label="" class="inline-flex items-center font-semibold hover:text-blue-600">
          Selengkapnya
          <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
    <!-- SKILL PATH -->
    <section id="" class="m-12 py-12 bg-purple rounded-2xl px-6 max-w-screen-xl md:m-12 lg:mx-auto">
      <div class="max-w-screen-xl mx-auto lg:grid grid gap-2 lg:grid-cols-12 lg:px-12 lg:gap-12">
        <div class="col-span-12 text-center px-0 lg:px-24 mb-10">
          <h2 class="text-2xl font-bold text-white mb-5">Skill Path Kurikulum</h2>
          <p class="text-white font-thin text-base leading-loose">Adaptif terhadap perkembangan teknologi, kurikulum dirancang berstandar internasional
            yang disusun bersama industri mengedepankan praktikum sesuai dengan kebutuhan pengembangan perangkat lunak
            terkini</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/front-dev-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">Front End Web</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/back-end-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">Back End</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/mobile-app-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">Mobile Apps Dev</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/devOps-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">DevOps Engineer</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid lg:mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/qa-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">Quality Assurance</p>
        </div>
        <div class="col-span-6 md:col-span-4 lg:col-span-2 grid lg:mb-6">
          <div class="w-28 h-20 bg-white rounded-lg mx-auto py-3 px-7 hover:scale-105 transition duration-300 ease-in-out">
            <img class="" src="{{ asset('dist/img/creative-tech-icon.png')}}" alt="front-end">
          </div>
          <p class="text-white row-span-1 text-center mt-2">Creative Technology</p>
        </div>
      </div>
      <div class="mt-10 text-center">
        <button type="button" class="px-6 py-2 border border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
          <a href="{{route('kurikulum')}}">Yuk Pelajari Kurikulum Kami -></a>
        </button>
      </div>
    </section>

    <!-- TENAGA PENGAJAR -->
    <section id="pengajar" class="pt-24 px-12 max-w-screen-xl mx-auto lg:grid grid-cols-12 gap-12">
      <div class="col-span-12 lg:col-span-6">
        <img src="{{ asset('dist/img/img-tenaga-pengajar.png')}}" class="hover:scale-105 transition duration-300 ease-in-out" alt="">
        <!-- <div class="mt-10"></div> -->
        <div class="grid grid-cols-6 mt-10"></div>
        <div
        class="swiper swiper-container h-20 swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
        <div class="swiper-wrapper w-32 " id="swiper-wrapper-b3cbca7667f61ef2" aria-live="polite"
          style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1483.85px, 0px, 0px);">
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-active"
            data-swiper-slide-index="0" role="group" aria-label="1 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2625.07px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -25; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mta.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 26.2507; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-next"
            data-swiper-slide-index="1" role="group" aria-label="2 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2362.54px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/BNSP.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 23.6254; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
            aria-label="3 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2100.01px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -20; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mce.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 21.0001; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
            aria-label="4 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1837.48px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -17; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/python.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 18.3748; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
            aria-label="5 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1574.95px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -15; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mtcre.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 15.7495; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
            aria-label="6 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1312.42px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -12; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/ccna.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 13.1242; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
            aria-label="7 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1049.9px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -9; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/aws.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 10.499; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="7" role="group"
            aria-label="8 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -787.367px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -7; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/azure.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 7.87367; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="8" role="group"
            aria-label="9 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -524.839px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/psd.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 5.24839; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-visible swiper-slide-prev"
            data-swiper-slide-index="9" role="group" aria-label="10 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -262.31px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mos.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 2.6231; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-visible swiper-slide-active" data-swiper-slide-index="0"
            role="group" aria-label="1 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -0.218774px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mta.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 0.00218774; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-visible swiper-slide-next" data-swiper-slide-index="1"
            role="group" aria-label="2 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -262.747px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/BNSP.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 2.62747; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="2" role="group" aria-label="3 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -525.276px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mce.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 5.25276; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="3" role="group" aria-label="4 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -787.805px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -7; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/python.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 7.87805; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="4" role="group" aria-label="5 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1050.33px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -10; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mtcre.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 10.5033; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="5" role="group" aria-label="6 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1312.86px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -12; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/ccna.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 13.1286; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="6" role="group" aria-label="7 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1575.39px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -15; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/aws.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 15.7539; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="7" role="group" aria-label="8 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1837.92px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -17; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/azure.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 18.3792; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl" data-swiper-slide-index="8" role="group" aria-label="9 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2100.45px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -20; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/psd.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 21.0045; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate-prev" data-swiper-slide-index="9" role="group"
            aria-label="10 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2362.98px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mos.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 23.6298; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-active"
            data-swiper-slide-index="0" role="group" aria-label="1 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2625.51px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -25; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mta.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 26.2551; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-next"
            data-swiper-slide-index="1" role="group" aria-label="2 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2888.03px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -28; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/BNSP.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 28.8803; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
            aria-label="3 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -3150.56px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -31; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mce.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 31.5056; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
            aria-label="4 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -3413.09px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -33; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/python.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 34.1309; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
            aria-label="5 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -3675.62px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -36; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/mtcre.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 36.7562; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
            aria-label="6 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -3938.15px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -38; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/ccna.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 39.3815; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
            aria-label="7 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -4200.68px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -41; margin-right: 40px;">
            <img class="rounded-md" src="{{ asset('dist/img/aws.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 42.0068; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="7" role="group"
            aria-label="8 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -4463.21px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -44; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/azure.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 44.6321; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="8" role="group"
            aria-label="9 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -4725.74px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -46; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/psd.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 47.2574; transition-duration: 0ms;"></div>
          </div>
          <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="9" role="group"
            aria-label="10 / 10"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, -4988.26px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -49; margin-right: 40px;">
            <img class="rounded-2xl" src="{{ asset('dist/img/mos.png')}}" alt="">
            <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right" style="opacity: 49.8826; transition-duration: 0ms;"></div>
          </div>
        </div>
        <div
          class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 9"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 10"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      </div>
      <div class="col-span-12 md:col-span-6">
        <h1 class="text-2xl lg:text-3xl font-bold text-indigo-800 mt-6 lg:pr-12 text-center lg:text-start lg:mt-0">Didukung oleh tenaga Pengajar <span
            class="text-orange">Profesional</span> dan tersertifikasi <span class="text-orange">Internasional</span>
        </h1>
        <div class="lg:grid lg:grid-cols-6 mt-5 lg:mt-10 text-center lg:text-left">
          <div class="mx-auto justify-center mb-2 lg:mb-0 lg:mx-0 lg:col-span-1 w-12 h-12 rounded-full bg-white shadow-lg p-2">
            <img src="{{ asset('dist/img/certificate-icon.png')}}" alt="certificated">
          </div>
          <div class="col-span-6 lg:col-span-4 lg:col-start-2 mt-5 lg:mt-0 ml-0 lg:-ml-3">
            <p class="text-gray-600 font-normal">Tenaga pengajar bersertifikasi Amazon Web Services (AWS) Cloud
              Practitioner 2021 dari Amazon, serta Database Design and Programming dari Oracle Academy</p>
          </div>
        </div>
        <div class="lg:grid lg:grid-cols-6 mt-5 lg:mt-10 text-center lg:text-left">
          <div class="mx-auto justify-center mb-2 lg:mb-0 lg:mx-0 lg:col-span-1 w-12 h-12 rounded-full bg-white shadow-lg p-2">
            <img src="{{ asset('dist/img/users-icon.png')}}" alt="Pengajar">
          </div>
          <div class="col-span-6 lg:col-span-4 lg:col-start-2 mt-5 lg:mt-0 ml-0 lg:-ml-3">
            <p class="text-gray-600 font-normal">Kompeten dan bersertifikat di bidang jaringan, cloud computing,
              pemrograman, certified educator abad 21 berbasis digital, asesmen TIK, dan etika penelitian</p>
          </div>
        </div>
        <div class="mt-8 text-center lg:text-left lg:mt-16">
          <button type="button" class="py-3 px-3  rounded-xl text-center capitalize border border-indigo-500/50 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white text-blue-600  flex-grow transition duration-300 ease-in-out">
            <a href="{{route('pengajar')}}">Yuk Kenal Lebih Dekat -></a>
          </button>
        </div>
      </div>
    </section>

    <!-- FASILITAS -->
    <section id="fasilitas" class="pt-24 m-12">
      <div class="bg-purple py-12 max-w-screen-xl mx-auto grid grid-cols-6 lg:grid lg:grid-cols-12 rounded-2xl px-6 lg:px-12 lg:gap-12">
      <div class="col-span-12 text-center text-white mb-3">
        <h2 class="text-2xl font-bold mb-3">Fasilitas yang Mendukung</h2>
        <p class="font-thin leading-loose">Didukung dengan laboratorium dan fasilitas belajar lainnya, akses wifi 24/7 tentu sangat mendukung suasana akademik</p>
      </div>
      <div class="col-span-12 items-center">
        <!-- Swiper Fasilitas -->
        <div
          class="swiper swiper-container swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
          <div class="swiper-wrapper lg:w-64" id="swiper-wrapper-a7696ca6f47d110b" aria-live="polite"
            style="cursor: grab; transition-duration: 0ms; transform: translate3d(-2422.88px, 0px, 0px);">
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
              aria-label="1 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2543.76px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -24; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-1.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 25.4376; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
              aria-label="2 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2312.5px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -22; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan4.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 23.125; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
              aria-label="3 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2081.25px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -20; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-2.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 20.8125; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-prev"
              data-swiper-slide-index="3" role="group" aria-label="4 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1849.99px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -17; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan1.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 18.4999; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-active"
              data-swiper-slide-index="4" role="group" aria-label="5 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1618.73px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -15; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/puskom.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 16.1873; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-next"
              data-swiper-slide-index="5" role="group" aria-label="6 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1387.47px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -13; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/vicon.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 13.8747; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
              aria-label="7 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1156.21px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -11; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/iki.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 11.5621; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -924.95px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -8; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-1.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 9.2495; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-visible" data-swiper-slide-index="1" role="group"
              aria-label="2 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -693.691px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -6; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan4.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 6.93691; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>

            <div class="swiper-slide rounded-2xl swiper-slide-visible" data-swiper-slide-index="2" role="group"
              aria-label="3 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -462.432px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-2.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 4.62432; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="3"
              role="group" aria-label="4 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -231.173px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -1; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan1.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 2.31173; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-visible swiper-slide-active" data-swiper-slide-index="4"
              role="group" aria-label="5 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -0.0859409px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/puskom.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 0.000859409; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-visible swiper-slide-next" data-swiper-slide-index="5"
              role="group" aria-label="6 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -231.345px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -1; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/vicon.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 2.31345; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-visible" data-swiper-slide-index="6" role="group"
              aria-label="7 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -462.604px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/iki.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 4.62604; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-visible"
              data-swiper-slide-index="0" role="group" aria-label="1 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -693.863px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -6; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-1.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 6.93863; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
              aria-label="2 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -925.122px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -8; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan4.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 9.25122; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
              aria-label="3 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1156.38px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -11; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/img-fasilitas-2.png')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 11.5638; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-prev"
              data-swiper-slide-index="3" role="group" aria-label="4 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1387.64px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -13; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/perpustakaan1.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 13.8764; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-active"
              data-swiper-slide-index="4" role="group" aria-label="5 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1618.9px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -15; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/puskom.jpg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 16.189; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate swiper-slide-duplicate-next"
              data-swiper-slide-index="5" role="group" aria-label="6 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -1850.16px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -18; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/vicon.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 18.5016; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide rounded-2xl swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
              aria-label="7 / 7"
              style="transition-duration: 0ms; transform: translate3d(0px, 0px, -2081.42px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -20; margin-right: 40px;">
              <img class="rounded-2xl" src="{{ asset('dist/img/iki.jpeg')}}" alt="">
              <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
              <div class="swiper-slide-shadow-right" style="opacity: 20.8142; transition-duration: 0ms;"></div>
            </div>
          </div>
          <div class="swiper-button-next p-3" tabindex="0" role="button" aria-label="Next slide"
            aria-controls="swiper-wrapper-a7696ca6f47d110b">
            <img src="{{ asset('dist/img/arrow-right-icon.png')}}" alt="">
          </div>
          <div class="swiper-button-prev p-3" tabindex="0" role="button" aria-label="Previous slide"
            aria-controls="swiper-wrapper-a7696ca6f47d110b">
            <img src="{{ asset('dist/img/arrow-left-icon.png')}}" alt="">
          </div>
          <div
            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span
              class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span
              class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span
              class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span
              class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
              aria-label="Go to slide 5" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
              role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
              role="button" aria-label="Go to slide 7"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
      </div>
      </div>
    </section>
  
    <!-- BIAYA KULIAH TRPL -->
    <section id="beasiswa" class="pt-24 md:px-24 lg:px-8 max-w-screen-xl mx-auto lg:grid lg:grid-cols-12 lg:gap-12 mb-16">
      <div class="col-span-12 md:col-span-7">
        <h2 class="text-center lg:text-left text-3xl font-bold text-indigo-800">Semua Bisa Kuliah <span class="text-orange">Sarjana
            Terapan</span> TRPL</h2>
        <h1 class="text-center lg:text-left text-2xl font-bold my-5 text-indigo-800">Banyak Beasiswa Prestasi dan Kurang Mampu</h1>
        <p class="font-thin text-gray-600 leading-loose">Uang Kuliah Tunggal (UKT) persemester yang terjangkau, didukung dengan biaya hidup di kota Singaraja yang relatif murah memberikan kesempatan luas
        bagi calon mahasiswa untuk menyelesaikan pendidikan di Kampus Undiksha.
        </p>
            <div class="flex flex-col justify-center">
            <p class="mb-4 mt-10 text-sm font-bold tracking-widest uppercase">diantaranya</p>
            <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
              <ul class="space-y-3 text-gray-600">
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  KIP Kuliah
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Beasiswa Prestasi Akademik
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Beasiswa Rektor
                </li>
              </ul>
              <ul class="space-y-3 text-gray-600">
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Beasiswa Pemerintah Daerah
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Beasiswa BI
                </li>
              </ul>
            </div>
             <button type="button" class="py-3 px-3 mt-4  rounded-xl text-center capitalize border border-indigo-500/50 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white text-blue-600  flex-grow transition duration-300 ease-in-out">
              <a target="_blank" href="https://undiksha.ac.id/kemahasiswaan/beasiswa/">Selengkapnya -</a>
            </button>
          </div>
      </div>
      <div class="mt-6 lg:mt-0 col-span-12 md:col-span-5 hover:scale-105 transition duration-300 ease-in-out">
        <img src="{{ asset('dist/img/img-semua-bisa-kuliah.png')}}" alt="">
      </div>
    </section>
@include('layouts.footer')
    <!-- FOOTER -->
    
  </main>

  <script src="{{ asset('dist/script.js')}}"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script> --}}
  <script src="{{ asset('dist/flowbite.min.js')}}"></script>
  {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
  

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="false" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Video Singkat TRPL
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 px-auto space-y-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CZD4jqhbwJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

</body>
</html>
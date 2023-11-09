<x-home-layout>
@section('head')        
        <title>Dosen TRPL Undiksha</title>
        <meta name="descriptions" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta name="keywords" content="TRPL, Teknologi Rekayasa Perangkat Lunak, Universitas Pendidikan Ganesha, FTK Undiksha, Vokasi Unggul" />
        <link rel="canonical" href="https://trpl.undiksha.ac.id" />
        <meta property="og:title" content="Dosen TRPL Undiksha" />
        <meta property="og:image" content="https://trpl.undiksha.ac.id/dist/img/img-mengapa-trpl.png" />
        <meta property="og:description" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta property="og:url" content="https://trpl.undiksha.ac.id" />
    @endsection
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto mx-auto max-w-screen-xl">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">PENGAJAR</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
      Didukung oleh Pengajar dan Mentor Profesional yang Tersertifikasi Kompetensi</p>
    </div>
    <div class="flex flex-wrap -m-4">
        @foreach ($ds as $val)
            <div class="p-4 lg:w-1/2">
        <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
          <img alt="team" class="flex-shrink-0 rounded-lg  h-64 object-cover object-center sm:mb-0 mb-4" src="{{ asset('images/dosen/'.$val->photo)}}">
            <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">{{$val->name}}</h2>
                <h3 class="text-gray-500 mb-3">{!!$val->skill!!}</h3>
                <p class="mb-4">
                @if($val->certified!='')
                Sertifikasi
                @endif
                {{$val->certified}}</p>
            </div>
        </div>
      </div>
        @endforeach
    </div>
  </div>
</section>
    
</x-home-layout>
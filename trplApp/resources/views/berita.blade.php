<x-home-layout>
@section('head')        
        <title>Berita TRPL Undiksha</title>
        <meta name="descriptions" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta name="keywords" content="TRPL, Teknologi Rekayasa Perangkat Lunak, Universitas Pendidikan Ganesha, FTK Undiksha, Vokasi Unggul" />
        <link rel="canonical" href="https://trpl.undiksha.ac.id" />
        <meta property="og:title" content=" Berita TRPL Undiksha" />
        <meta property="og:image" content="https://trpl.undiksha.ac.id/dist/img/img-mengapa-trpl.png" />
        <meta property="og:description" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta property="og:url" content="https://trpl.undiksha.ac.id" />
    @endsection
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
    <div class=" lg:max-w-7xl mx-auto flex flex-wrap py-6">
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <div>
            <h1 class="text-2xl mx-8 font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white text-justify">Berita</h1>
            @foreach ($berita as $val)
            <div class="mt-8 lg:mx-8 lg:flex lg:items-center h-56">
                <img class="object-cover w-full lg:mx-6 lg:w-1/4 rounded-xl h-32 lg:h-48" src="{{asset($val->photo)}}"alt="{{$val->title}}">
                <div class="mt-6 lg:w-3/4 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">{{$val->kategori}}</p>
                    <a href="{{route('berita',$val->slug)}}" class=" mt-4 text-xl font-semibold text-gray-800 hover:text-gray-900 dark:text-white lg:text-2xl">
                        {{$val->title}}
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                       <?php echo substr(strip_tags($val->description),0,200)   ?>
                    </p>
                </div>
            </div>
            @endforeach
            </div>
            <div class="m-4 mt-16"> {{$berita->appends(request()->query())->links()}} </div>
        </section>
        @include('layouts.sidebarBlog')
    </div>
</div>
</x-home-layout>
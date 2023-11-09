<aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Informasi Pendaftaran</p>
        <p class="pb-2">Program Studi TRPL menerima mahasiswa dari jalur Seleksi Nasional Penerimaan Mahasiswa Baru (SNPMB) PTN 2023 dan Jalur Mandiri</p>
        <a href="https://sidata-ptn-snpmb.bppp.kemdikbud.go.id/ptn_sn.php?ptn=612&prodi=612050&jenis=0" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            DAFTAR
        </a>
    </div>
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Berita Terkini</p>
        <div class="mt-4">
        @foreach ($beritaTerkini as $val )
            <div class="flex">
                <div class="pt-1 mr-6 text-center">
                    <div class="px-2 pb-1 mb-1 border-b border-gray-400">
                    <p class="text-sm text-blue-gray-700">{{date('M', strtotime($val->created_at));}}</p>
                    </div>
                    <div class="px-2"><p class="text-lg font-bold">{{date('d', strtotime($val->created_at));}}</p></div>
                </div>
                <div>
                    <div class="mb-2">
                    <a href="{{route('kategori',$val->kategori_id)}}" class="text-xs font-semibold tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Delevopment">{{$val->kategori}}</a>
                    </div>
                    <div class="mb-2">
                    <a href="{{route('berita',$val->slug)}}" aria-label="Article" class="inline-block  font-medium leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-400">{{$val->title}}</a>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 dark:border-gray-700">
        @endforeach                    
        </div>
    </div>

</aside>
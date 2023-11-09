<x-home-layout>
@section('head')        
        <title>Kurikulum TRPL Undiksha</title>
        <meta name="descriptions" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta name="keywords" content="TRPL, Teknologi Rekayasa Perangkat Lunak, Universitas Pendidikan Ganesha, FTK Undiksha, Vokasi Unggul" />
        <link rel="canonical" href="https://trpl.undiksha.ac.id" />
        <meta property="og:title" content="Kurikulum TRPL Undiksha" />
        <meta property="og:image" content="https://trpl.undiksha.ac.id/dist/img/img-mengapa-trpl.png" />
        <meta property="og:description" content="Program Studi TRPL Undiksha mencetak talenta digital yang profesional dalam bidang perekayasaan perangkat lunak dengan tiga kompetensi utama yakni perancang perangkat lunak, pengembang perangkat lunak, dan pengelola pengembangan perangkat lunak" />
        <meta property="og:url" content="https://trpl.undiksha.ac.id" />
    @endsection
    <!-- KURIKULUM DETAIL PERSEGI-->
    <section class="max-w-screen-xl mx-auto">
      <div class="bg-white py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="flex flex-wrap justify-center text-center">
            <div class="w-full px-4">
              <!-- Title -->
              <h1 class="text-4xl font-bold text-indigo-800 mb-3">
                Kurikulum
              </h1>
              <p class="font-thin text-gray-600 leading-loose">
                Adaptif terhadap perkembangan teknologi, kurikulum dirancang berstandar internasional yang disusun bersama industri mengedepankan praktikum sesuai dengan kebutuhan pengembangan perangkat lunak terkini.
                Matakuliah tersebar pada setiap semester sesuai dengan kompetensi yang dibebankan pada capaian pembelajaran lulusan  disetiap tahunnya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- KURIKULUM DETAIL TABEL -->
    <section class="max-w-screen-xl mx-6 lg:mx-auto md:mx-auto">
      <div class="flex items-center justify-center">
        <div class="container">
        <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Tahun Pertama</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Semester pertama dan kedua pada tahun pertama mengawali perkuliahan mahasiswa akan belajar matakuliah dasar informatika. Sasaran kompetensi lulusan pada tahun pertama sebagai perancang perangkat lunak.</p>
        </div>
             <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-3">
                  <thead class="text-white">
                  <tr class="bg-indigo-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">No</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Matakuliah</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Semester</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">SKS</th>
                  </tr>
                  </thead>
                  <tbody class="flex-1 sm:flex-none">
                  <?php $no=1;?>
                  @foreach ($mk[1] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  @foreach ($mk[2] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  </tbody>
            </table>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-center">
        <div class="container">
        <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Tahun Kedua</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Sasaran kompetensi lulusan di tahun kedua sebagai pengembang perangkat lunak yang didukung oleh matakuliah praktis dan profesional bidang rekayasa perangkat lunak, pengembangan teknologi kreatif serta Game.
            Setiap tahunnya mahasiswa akan bertemu dengan matakuliah workshop yang dikemas dengan pembelajaran berbasis proyek (PBL). PBL diharapkan dapat lebih mematangkan mahasiswa dalam mendesain solusi hingga implementasi produk kepada pengguna. Bentuk PBL tentu disesuaikan dengan matakuliah terkait. </p>
        </div>
          <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-3">
            <thead class="text-white">
              <tr class="bg-indigo-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">No</th>
                <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Matakuliah</th>
                <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Semester</th>
                <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">SKS</th>
              </tr>
            </thead>
            <tbody class="flex-1 sm:flex-none">
              @foreach ($mk[3] as $val)
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                    <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                    <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                </tr>
              <?php $no++ ?>
              @endforeach
              @foreach ($mk[4] as $val)
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                    <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                    <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                </tr>
              <?php $no++ ?>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-center">
        <div class="container">
        <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Tahun Ketiga</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Sasaran kompetensi lulusan di tahun kedua sebagai pengelola pengembangan perangkat lunak didukung oleh matakuliah manajemen proyek, cloud computing, serta MBKM diharapkan dapat mencetak lulusan yang terampil dalam pengelolaan pengembangan perangkat lunak.</p>
        </div>
         <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-3">
                  <thead class="text-white">
                  <tr class="bg-indigo-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">No</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Matakuliah</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Semester</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">SKS</th>
                  </tr>
                  </thead>
                  <tbody class="flex-1 sm:flex-none">
                  <?php $no=1;?>
                  @foreach ($mk[5] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  @foreach ($mk[6] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  </tbody>
            </table>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-center">
        <div class="container">
        <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Tahun Keempat</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Selama tiga tahun mahasiswa telah melewati masa kuliah, masuk tahun keempat mahasiswa diharapkan sudah menentukan bidang keahlian spesifik rekayasa perangkat lunak sesuai kompetensi lulusan yang diharapkan. 
            Pengerjaan topik proyek akhir dapat dimulai dari proyek matakuliah berbasis PBL, magang, ataupun proyek independen yang pernah dikerjakan sebelumnya.</p>
        </div>
          <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-3">
                  <thead class="text-white">
                  <tr class="bg-indigo-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">No</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Matakuliah</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">Semester</th>
                      <th class="p-3 text-left lg:text-center md:text-center sm:text-center border">SKS</th>
                  </tr>
                  </thead>
                  <tbody class="flex-1 sm:flex-none">
                  <?php $no=1;?>
                  @foreach ($mk[7] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  @foreach ($mk[8] as $val)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3">{{$no}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['nama']}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$val['semester']}}</td>
                        <td class="border-grey-light lg:text-center md:text-center sm:text-center border hover:bg-gray-100 p-3 truncate">{{$val['sks']}}</td>
                    </tr>
                  <?php $no++ ?>
                  @endforeach
                  </tbody>
            </table>
        </div>
      </div>
      <style>
        html,
        body {
          height: 100%;
        }

        @media (min-width: 640px) {
          table {
            display: inline-table !important;
          }

          thead tr:not(:first-child) {
            display: none;
          }
        }

      </style>
    </section>
    
</x-home-layout>
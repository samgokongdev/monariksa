<div>
    <div class="flex w-full space-x-4">
        <div class="w-1/2 bg-white shadow-md p-4 rounded-lg">
            <h4 class="font-semibold text-xl">Daftar Pemeriksaan JT < 30 Hari</h4>
                    <div class="pt-4">
                        <code
                            class="text-sm w-full inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                            <span class="flex flex-col">
                                @foreach ($tunggakans as $t)
                                    <span class="flex-1">
                                        <span>
                                            {{ $t->nama_wp }} ({{ $t->kode_rik }} |
                                            {{ $t->periode_1 }}-{{ $t->periode_2 }})
                                        </span>
                                        <span class="text-yellow-500">
                                            | *JT : {{ date('d M Y', strtotime($t->jt)) }}*
                                        </span>
                                        <span class="text-blue-500">
                                            | {{ $t->kt }}
                                        </span>
                                    </span>
                                @endforeach
                            </span>
                        </code>
                    </div>
        </div>
        <div class="w-1/2">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Total Tunggakan</span>
                    <span class="font-bold text-2xl">{{ $total_tunggakan->count() }} NP2</span>
                </div>

                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Total LHP Tahun Ini</span>
                    <span class="font-semibold text-2xl">{{ $total_konversi->count('lhp') }}</span>
                </div>

                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Total Tunggakan (Focus Audit)</span>
                    <span class="font-bold text-2xl">{{ $total_tunggakan_fa->count() }} NP2</span>
                </div>

                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Total Konversi Tahun Ini</span>
                    <span class="font-semibold text-2xl">{{ $total_konversi->sum('nilai_konversi') }}</span>
                </div>

                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Tunggakan sudah alokasi belum terbit SP2</span>
                    <span class="font-semibold text-2xl">{{ $total_sudah_alokasi_belum_sp2->count() }} NP2</span>
                </div>

                <div class="bg-white py-4 px-8 flex flex-col space-y-4 rounded-lg shadow-md">
                    <span class="font-semibold text-sm text-gray-700">Jumlah SP2 Belum Disampaikan</span>
                    <span class="font-semibold text-2xl">{{ $total_belum_sppl->count() }} SP2</span>
                </div>
            </div>
        </div>
    </div>
</div>

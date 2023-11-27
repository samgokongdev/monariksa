<div class="flex">
    <aside class="w-2/6">
        <div class="px-4">
            <span class="font-semibold text-xl">Filter</span>
            <div class="space-y-2 mt-4">
                <label class="font-medium">Pencarian</label>
                <input type="text"
                    class="bg-white border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-gray-300 w-full px-4 py-4"
                    placeholder="Masukkan Nama WP atau Nomor LHP" wire:model.live.debounce.300ms ='search' required="">
            </div>

            <div class="space-x-4 flex items-center w-full mt-4 ">
                <div class="w-1/2 flex flex-col space-y-1">
                    <label class="font-medium text-sm">Tahun LHP</label>
                    <select wire:model.live='tahun_lhp'
                        class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
                <div class="w-1/2 flex flex-col space-y-1">
                    <label class="font-medium text-sm">UP2</label>
                    <select wire:model.live='up2'
                        class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                        <option value="">SEMUA</option>
                        <option value="056">KPP PMA 3</option>
                        <option value="130">KANWIL</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-col space-y-1">
                    <label class="font-medium text-sm">Supervisor</label>
                    <select wire:model.live='select_spv'
                        class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                        <option value="">SEMUA</option>
                        @foreach ($fpp as $f)
                            <option value="{{ $f->spv }}">{{ $f->spv }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <div class="w-full flex flex-col space-y-1">
                    <label class="font-medium text-sm">Ketua Tim</label>
                    <select wire:model.live='select_kt'
                        class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                        <option value="">SEMUA</option>
                        @foreach ($kt as $f)
                            <option value="{{ $f->kt }}">{{ $f->kt }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="space-y-1 flex flex-col w-full mt-4 ">
                <label class="font-medium text-sm">Ketepatan Waktu Penyelesaian Pemeriksaan</label>
                <select wire:model.live='cek_tepat_waktu'
                    class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                    <option value="">SEMUA</option>
                    <option value="TEPAT WAKTU">TEPAT WAKTU</option>
                    <option value="TIDAK TEPAT WAKTU">TIDAK TEPAT WAKTU</option>
                </select>
            </div>

            @if ($show_kontribusi)
                @auth
                    <div class="space-y-1 flex flex-col w-full mt-8 ">
                        <div class="flex flex-col mb-4">
                            <label class="font-medium text-lg">Masukkan Data Kontribusi</label>
                            <label>NP2</label>
                            <input value="{{ $np2s }}"
                                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                            <label>Kontribusi Ketua Tim</label>
                            <input value="{{ $k1 }}" wire:model = 'k1'
                                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                            <label>Kontribusi Anggota 1</label>
                            <input value="{{ $k2 }}" wire:model = 'k2'
                                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                            <label>Kontribusi Anggota 2</label>
                            <input value="{{ $k3 }}" wire:model = 'k3'
                                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                            <label>Kontribusi Anggota 3</label>
                            <input value="{{ $k4 }}" wire:model = 'k4'
                                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md" />
                        </div>
                        <div class="flex mt-8 w-full space-x-4">
                            <a class="bg-green-500 w-1/2 hover:bg-green-600 cursor-pointer text-white font-semibold rounded-lg px-4 py-2 border-green-700 border-2"
                                wire:click ="update()">Update</a>
                            <a class="bg-red-500 w-1/2 hover:bg-red-600 cursor-pointer text-white font-semibold rounded-lg px-4 py-2 border-red-700 border-2"
                                wire:click ="cancel()">Cancel</a>
                        </div>

                    </div>
                @else
                    <div class="mt-5">
                        <label class="font-bold text-red-700">Anda bukan admin.. Silahkan Login Untuk Mengisi Data
                            Kontribusi</label>
                    </div>
                @endauth
            @endif



        </div>
    </aside>

    <section class="w-4/6">
        <div>
            <span class="font-bold text-xl">Data Laporan Hasil Pemeriksaan</span>
            <div class="py-4">
                {{ $lhps->links() }}
            </div>

            <div class="py-4 flex space-x-3">
                <label>Per Page</label>
                <select wire:model.live='perPage'
                    class="bg-white border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 text-center px-2 rounded-md">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
            </div>

            <div class="mt-4 space-y-4">
                @foreach ($lhps as $l)
                    <div wire:click="edit({{ "'" . $l->np2 . "'" }})" class="cursor-pointer hover:scale-95">
                        <div class="px-8 py-4 rounded-t-md bg-white flex justify-between items-center shadow-md">
                            <div class="flex flex-col">
                                <span class="font-semibold text-xl">{{ $l->nama_wp }}</span>
                                <span class="text-gray-500">{{ $l->npwp }}</span>
                                <span class="mt-4 font-bold text-lg">{{ $l->lhp }}</span>
                                <span class="font-semibold text-base text-gray-500">Tanggal :
                                    {{ date('d M Y', strtotime($l->tgl_lhp)) }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold">{{ $l->jenis_rik }} ({{ $l->kode_rik }})</span>
                                <span class="text-gray-500">Periode : {{ $l->periode_1 }} s.d.
                                    {{ $l->periode_2 }}</span>
                            </div>
                            <div class="flex flex-col text-center">
                                <span class="text-gray-500 font-semibold">Konversi</span>
                                <span class="font-bold text-3xl">{{ $l->nilai_konversi }}</span>

                                @if ($l->status_konversi === 'TEPAT WAKTU')
                                    <span
                                        class="text-white bg-green-600 px-4 py-1 rounded-full text-sm font-semibold mt-6">
                                        {{ $l->status_konversi }}
                                    </span>
                                @else
                                    <span
                                        class="text-white bg-red-500 px-4 py-1 rounded-full text-sm font-semibold mt-6">
                                        {{ $l->status_konversi }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div
                            class="px-8 py-2 rounded-b-md flex justify-between items-center shadow-md bg-white text-gray-500 font-semibold">

                            Tim Pemeriksa
                            :
                            {{ $l->spv }}{{ !$l->kt ? '' : ", $l->kt" }}{{ !$l->ang1 ? '' : ", $l->ang1" }}{{ !$l->ang2 ? '' : ", $l->ang2" }}{{ !$l->ang3 ? '' : ", $l->ang3" }}
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

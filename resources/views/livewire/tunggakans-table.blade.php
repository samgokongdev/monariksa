<div class="flex w-full">
    <aside class="w-2/6 pr-8">
        <h4 class="mb-6 font-bold text-2xl">Filter</h4>
        <div class="space-y-2">
            <label class="font-medium">Pencarian Wajib Pajak</label>
            <input type="text"
                class="bg-white border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-gray-300 w-full px-4 py-4"
                placeholder="Masukkan Nama WP" required="" wire:model.live.debounce.300ms ='search'>
        </div>

        <div class="mt-6 font-semibold">Pencarian Berdasarkan Pemeriksa</div>
        <div class="space-y-1 mt-1 flex flex-col w-full ">
            <label class="font-medium text-sm">Supervisor</label>
            <select wire:model.live='filterspv'
                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                <option value="">SEMUA</option>
                @foreach ($spv as $s)
                    <option value="{{ $s->nama }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="space-y-1 mt-2 flex flex-col w-full ">
            <label class="font-medium text-sm">Ketua Tim</label>
            <select wire:model.live='filterkt'
                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                <option value="">SEMUA</option>
                @foreach ($kt as $s)
                    <option value="{{ $s->nama }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="space-y-1 mt-2 flex flex-col w-full ">
            <label class="font-medium text-sm">Tahun Pajak</label>
            <select wire:model.live='th_pajak'
                class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                <option value="">SEMUA</option>
                @foreach ($tp as $t)
                    <option value="{{ $t->th_pajak }}">{{ $t->th_pajak }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-5 font-semibold">Status SP2</div>
        <div class="space-y-1 flex items-center space-x-2">
            <input wire:model.live='is_sp2' type="radio" id="semua" name="is_sp2" value="">
            <label for="semua">Semua</label>
            <input wire:model.live='is_sp2' type="radio" id="is_sp2" name="is_sp2" value="1">
            <label for="is_sp2">SP2 Terbit</label>
            <input wire:model.live='is_sp2' type="radio" id="is_sp2_n" name="is_sp2" value="0">
            <label for="is_sp2_n">SP2 Belum Terbit</label>
        </div>

        <div class="mt-2 font-semibold">Status Penyampaian SP2</div>
        <div class="space-y-1 flex items-center space-x-2">
            <input wire:model.live='is_sppl' type="radio" id="semua" name="is_sppl" value="">
            <label for="semua">Semua</label>
            <input wire:model.live='is_sppl' type="radio" id="is_sppl" name="is_sppl" value="1">
            <label for="is_sppl">Disampaikan</label>
            <input wire:model.live='is_sppl' type="radio" id="is_sppl_n" name="is_sppl" value="0">
            <label for="is_sppl_n">Belum Disampaikan</label>
        </div>

        <div class="mt-2 font-semibold">Status SPHP</div>
        <div class="space-y-1 flex items-center space-x-2">
            <input wire:model.live='is_sphp' type="radio" id="semua" name="is_sphp" value="">
            <label for="semua">Semua</label>
            <input wire:model.live='is_sphp' type="radio" id="is_sphp" name="is_sphp" value="1">
            <label for="is_sphp">Terbit</label>
            <input wire:model.live='is_sphp' type="radio" id="is_sphp_n" name="is_sphp" value="0">
            <label for="is_sphp_n">Belum Terbit</label>
        </div>

        <div class="mt-2 font-semibold">Focus Audit</div>
        <div class="space-y-1 flex items-center space-x-2">
            <input wire:model.live='is_fa' type="radio" id="semua" name="is_fa" value="">
            <label for="semua">Semua</label>
            <input wire:model.live='is_fa' type="radio" id="is_fa" name="is_fa" value="1">
            <label for="is_fa">Ya</label>
            <input wire:model.live='is_fa' type="radio" id="is_fa_n" name="is_fa" value="0">
            <label for="is_fa_n">Tidak</label>
        </div>

        <div class="py-8 space-y-2">
            <div class="font-semibold">Urutkan Berdasarkan</div>
            <div class="flex space-x-4">
                <select wire:model.live='sortby'
                    class="bg-white py-4 w-1/2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 px-2 rounded-md">
                    <option value="jt">JT Normal</option>
                    <option value="jt_8_bulan">JT 8 Bulan</option>
                </select>
                <select wire:model.live='orderby'
                    class="bg-white py-4 w-1/2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 px-2 rounded-md">
                    <option value="ASC">Terdekat</option>
                    <option value="DESC">Terjauh</option>
                </select>
            </div>
        </div>

    </aside>
    <div class="w-4/6">
        <section class="text-gray-800">
            <h4 class="mb-6 font-bold text-2xl ">Daftar Tunggakan Pemeriksaan (Sudah Alokasi)</h4>
            <div class="pb-4">
                {{ $tunggakans->links() }}
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
            <div class="space-y-4">
                @foreach ($tunggakans as $t)
                    <div class="px-8 py-4 w-full shadow-md bg-white shadow-gray-200 rounded-lg">
                        <div class="flex justify-between items-center">
                            <div>
                                <div class="font-bold text-lg">{{ $t->nama_wp }}</div>
                                <div class="text-sm text-gray-500">{{ $t->npwp }}</div>
                            </div>
                            <div>
                                <div class="text-gray-500 text-sm">Kode Rik : <span
                                        class="font-semibold">{{ $t->kode_rik }}</span></div>
                                <div class="text-sm text-gray-500">Periode : {{ $t->periode_1 }} -
                                    {{ $t->periode_2 }}
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">{{ $t->jenis_rik }}</div>
                            </div>
                            <div>
                                <div class="font-bold text-lg text-red-700">JT :
                                    {{ date('d M Y', strtotime($t->jt)) }}</div>
                                <div class="text-sm text-orange-400 flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                    <p>
                                        {{ $t->selisih_hari }} Hari Lagi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full pt-2">
                            <div class="w-1/2">
                                <h6 class="font-bold text-lg">
                                    Data SP2
                                    <span
                                        class="text-gray-500 font-medium">{{ !$t->is_focus_audit ? '' : ' (Focus Audit)' }}</span>
                                </h6>
                                <div class="mt">
                                    <div class="text-sm text-gray-500">
                                        {{ !$t->sp2 ? 'SP2 Belum Terbit' : $t->sp2 }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ !$t->sp2 ? '' : 'Tanggal SP2 : ' . date('d M Y', strtotime($t->tgl_sp2)) }}
                                    </div>
                                    @if ($t->sp2)
                                        <div class="text-sm text-white flex">
                                            <p
                                                class="{{ !$t->tgl_sppl ? 'bg-red-500' : 'bg-green-500 ' }} rounded-lg px-2">
                                                {{ !$t->tgl_sppl ? 'Belum Disampaikan' : 'Disampaikan Tanggal : ' . date('d M Y', strtotime($t->tgl_sppl)) }}
                                            </p>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="w-1/2">
                                <h6 class="font-bold text-lg">Data SPHP</h6>
                                <div class="mt">
                                    <div class="text-sm {{ !$t->sphp ? 'text-orange-700' : '' }}">
                                        {{ !$t->sphp ? 'SPHP Belum Terbit' : $t->sphp }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ !$t->sphp ? '' : 'Tanggal SPHP : ' . date('d M Y', strtotime($t->tgl_sphp)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 font-medium text-sm text-gray-500">
                            Tim Pemeriksa :
                            {{ $t->spv }}{{ !$t->kt ? '' : ", $t->kt" }}{{ !$t->ang1 ? '' : ", $t->ang1" }}{{ !$t->ang2 ? '' : ", $t->ang2" }}{{ !$t->ang3 ? '' : ", $t->ang3" }}
                        </div>
                        <div
                            class="flex items-center space-x-2 mt-2 {{ !$t->tgl_sppl ? 'text-gray-500' : 'text-orange-500' }}">

                            @if ($t->sp2)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <label class="font-semibold text-lg">JT Tepat Waktu :
                                    {{ !$t->tgl_sppl ? 'Belum Disampaikan. Sampaikan SP2 dalam waktu 15 Hari Kerja' : date('d M Y', strtotime($t->jt_8_bulan)) }}</label>
                                @if (!$t->today)
                                    <label class="text-cyan-700 font-semibold">(Hari Ini)</label>
                                @elseif($t->selisih_8_bulan > 0)
                                    <label class="text-green-500 font-semibold">(Tersisa {{ $t->selisih_8_bulan }}
                                        hari)</label>
                                @elseif($t->selisih_8_bulan < 0)
                                    <label class="text-red-500 font-semibold">(Lewat {{ $t->selisih_8_bulan * -1 }}
                                        hari)</label>
                                @endif
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

</div>

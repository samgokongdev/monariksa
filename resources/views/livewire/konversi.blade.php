<div>
    <div class="font-bold">
        Perhitungan Konversi Fungsional Pemeriksa Pajak
    </div>
    <div class="flex mt-4 space-x-4">
        <div class="w-1/4">
            <label>Silahkan Pilih Fungsional Pemeriksa Pajak</label>
            <div class="mt-4">
                <div class="w-full flex flex-col space-y-1">
                    <label class="font-medium text-sm">FPP (Non Supervisor)</label>
                    <select wire:model.live='selected_fpp'
                        class="bg-white p-2 border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 pl-2 rounded-md">
                        <option value="">Pilih Salah Satu</option>
                        @foreach ($lists as $l)
                            <option value="{{ $l->fpp }}">{{ $l->fpp }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="w-3/4">
            <div>
                @if ($selected_fpp === '')
                    Pilih FPP Terlebih Dahulu
                @else
                    <div class="bg-white font-bold text-lg flex p-4 rounded-lg shadow-md">

                        Total Konversi : {{ round($total_konversi, 2) }}
                    </div>
                @endif
            </div>
            <div>
                <div class="flex flex-col w-full space-y-3 mt-2">
                    @if ($selected_fpp !== '')

                        <div class="py-4">
                            {{ $daftars->links() }}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="py-4 flex space-x-3">
                                <label>Per Page</label>
                                <select wire:model.live='perPage'
                                    class="bg-white border-gray-900 ring-1 ring-gray-300 font-medium text-gray-800 text-center px-2 rounded-md">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <input type="text"
                                    class="bg-white border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-gray-300 w-full px-4 py-4"
                                    placeholder="Masukkan Nama WP" required=""
                                    wire:model.live.debounce.300ms ='search'>
                            </div>
                        </div>
                        @foreach ($daftars as $d)
                            <div class="bg-white w-full px-4 py-4 rounded-lg">
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-gray-600">
                                            {{ $d->nama_wp }}
                                        </span>
                                        <span class="font-bold mt-2">
                                            {{ $d->lhp }} tanggal : {{ date('d M Y', strtotime($d->tgl_lhp)) }}
                                        </span>
                                        <span class="text-sm">
                                            SPPL disampaikan tanggal : {{ date('d M Y', strtotime($d->tgl_sppl)) }}
                                        </span>

                                        <span class="mt-4 font-semibold text-sm">
                                            {{ $d->jenis_rik }} - {{ $d->kode_rik }} ({{ $d->periode_1 }} s.d.
                                            {{ $d->periode_2 }})
                                        </span>
                                        @if ($d->status_konversi === 'TEPAT WAKTU')
                                            <span class="font-bold text-green-500">{{ $d->status_konversi }}</span>
                                        @else
                                            <span class="font-bold text-red-500">{{ $d->status_konversi }}</span>
                                        @endif
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <span class=" text-gray-700 text-sm text-right">
                                            Konversi LHP Total : {{ $d->nilai_konversi }}
                                        </span>
                                        <span class="text-right font-semibold">Kontribusi :
                                            {{ $d->kontribusi }}%</span>
                                        <span class="font-bold text-lg">Konversi Anda :
                                            {{ round($d->konversi_tertimbang, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

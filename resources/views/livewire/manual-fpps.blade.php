<div>
    <div class="flex space-x-4">
        <div class="w-1/2 bg-white shadow-md rounded-lg px-10 py-4">
            <div class="font-bold text-xl">
                Data Hasil Pemeriksaan
            </div>
            <div class="mt-4 flex flex-col">
                <span class="font-bold">Data Laporan</span>
                <table style="width: 100%" class="mt text-gray-700">
                    <tbody>
                        <tr>
                            <td style="width: 30%">LHP</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->lhp }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Tanggal LHP</td>
                            <td style="width: 2%">:</td>
                            <td>{{ date('d M Y', strtotime($np2->tgl_lhp)) }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Kode Pemeriksaan</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->kode_rik }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Jenis Pemeriksaan</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->jenis_rik }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Periode</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->periode_1 }} - {{ $np2->periode_2 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex flex-col">
                <span class="font-bold">Data Performa Penyelesaian Pemeriksan</span>
                <table style="width: 100%" class="mt text-gray-700">
                    <tbody>
                        <tr>
                            <td style="width: 30%">Ketepatan Waktu</td>
                            <td style="width: 2%">:</td>
                            <td
                                class="{{ $np2->status_konversi === 'TEPAT WAKTU' ? 'font-bold text-green-500' : 'font-bold text-red-500' }}">
                                {{ $np2->status_konversi }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Konversi</td>
                            <td style="width: 2%">:</td>
                            <td
                                class="{{ $np2->status_konversi === 'TEPAT WAKTU' ? 'font-bold text-green-500' : 'font-bold text-red-500' }}">
                                {{ $np2->nilai_konversi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-1/2 bg-white shadow-md rounded-lg px-10 py-4">
            <div class="font-bold text-xl">
                Data Hasil Pemeriksaan
            </div>
            <div class="mt-4">
                <table style="width: 100%" class="mt text-gray-700">
                    <tbody>
                        <tr>
                            <td style="width: 30%">Supervisor</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->spv }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Ketua Tim</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->kt }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Anggota 1</td>
                            <td style="width: 2%">:</td>
                            <td>{{ $np2->ang1 }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Anggota 2</td>
                            <td style="width: 2%">:</td>
                            <td>{{ !$np2->ang2 ? 'null' : $np2->ang2 }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Anggota 3</td>
                            <td style="width: 2%">:</td>
                            <td>{{ !$np2->ang3 ? 'null' : $np2->ang2 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="bg-white px-10 py-4 rounded-md shadow-lg">
            <div class="font-bold text-xl">
                Data Kontribusi
            </div>
            <form wire:submit="update">
                <div class="flex justify-between space-x-4 mt-4">
                    <div class="w-full">
                        <label>Ketua Tim</label>
                        <input type="text" value="{{ $k1->k1 }}"
                            class="bg-white border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-gray-300 w-full px-4 py-4">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="w-full mt-4 bg-green-700 text-white font-bold p-4 rounded-lg">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

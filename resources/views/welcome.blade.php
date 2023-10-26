<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-cursive bg-gray-100">
    <div class="container mx-auto mt-5">
        <header class="w-full p-4">
            <div class="text-center text-4xl font-bold">MONARIKSA</div>
            <div class="text-sm text-center text-gray-500">Version 1.0</div>
        </header>
        <nav class="pb-5 pt-3">
            <div class="w-full flex justify-center">
                <ul class="flex space-x-5 tracking-tighter">
                    <li>
                        <a href="#">Tunggakan</a>
                    </li>
                    <li>
                        <a href="#">Penyelesaian</a>
                    </li>
                    <li>
                        <a href="#">Performa Pemeriksaan</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="flex w-full">
            <aside class="w-1/4">
                <h4 class="mb-6 font-bold text-lg">Filter</h4>
            </aside>
            <div class="w-3/4">
                <section class="text-gray-800">
                    <h4 class="mb-6 font-bold text-2xl ">Daftar Tunggakan Pemeriksaan</h4>
                    <div class="space-y-4">
                        <div class="px-10 py-5 w-full shadow-md bg-white shadow-gray-200 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-bold text-xl">ASAHI SANGYO INDONESIA</div>
                                    <div class="text-sm text-gray-500">024147019056000</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Kode Rik : <span class="font-semibold">2182</span></div>
                                    <div class="text-sm text-gray-500">Periode : 022023 - 022023</div>
                                    <div class="text-sm text-gray-500 font-semibold">RUTIN LEBIH BAYAR</div>
                                </div>
                                <div>
                                    <div class="font-bold text-lg text-red-700">JT : 01/01/2023</div>
                                    <div class="text-sm text-orange-400 flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                        <p>
                                            100 Hari Lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full pt-4">
                                <div class="w-1/2">
                                    <h6 class="font-bold text-lg">Data SP2</h6>
                                    <div class="mt-2">
                                        <div class="text-sm text-gray-500">
                                            PRIN-00145/RIKSIS/KPP.0704/2023
                                        </div>
                                        <div class="text-sm text-gray-500">Tanggal : 02/10/2023</div>
                                        <div class="text-sm text-white flex">
                                            <p class="bg-green-500 rounded-lg px-5">Disampaikan Tanggal : 10/10/2023</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/2">
                                    <h6 class="font-bold text-lg">Data SPHP</h6>
                                    <div class="mt-2">
                                        <div class="text-sm text-gray-500">
                                            00393/RIKSIS/KPP.0704/2023
                                        </div>
                                        <div class="text-sm text-gray-500">Tanggal : 10/11/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 font-medium text-sm text-gray-500">
                                Tim Pemeriksa : TULUS SUPARTO, APRISAL SYAM, MUSTOFA ABDANI, FADEL RACHMAN
                            </div>
                        </div>
                        <div class="px-10 py-5 w-full shadow-md bg-white shadow-gray-200 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-bold text-xl">ASAHI SANGYO INDONESIA</div>
                                    <div class="text-sm text-gray-500">024147019056000</div>
                                </div>
                                <div>
                                    <div class="text-gray-500">Kode Rik : <span class="font-semibold">2182</span></div>
                                    <div class="text-sm text-gray-500">Periode : 022023 - 022023</div>
                                    <div class="text-sm text-gray-500 font-semibold">RUTIN LEBIH BAYAR</div>
                                </div>
                                <div>
                                    <div class="font-bold text-lg text-red-700">JT : 01/01/2023</div>
                                    <div class="text-sm text-orange-400 flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                        <p>
                                            100 Hari Lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full pt-4">
                                <div class="w-1/2">
                                    <h6 class="font-bold text-lg">Data SP2</h6>
                                    <div class="mt-2">
                                        <div class="text-sm text-gray-500">
                                            PRIN-00145/RIKSIS/KPP.0704/2023
                                        </div>
                                        <div class="text-sm text-gray-500">Tanggal : 02/10/2023</div>
                                        <div class="text-sm text-white flex">
                                            <p class="bg-green-500 rounded-lg px-5">Disampaikan Tanggal : 10/10/2023</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/2">
                                    <h6 class="font-bold text-lg">Data SPHP</h6>
                                    <div class="mt-2">
                                        <div class="text-sm text-gray-500">
                                            00393/RIKSIS/KPP.0704/2023
                                        </div>
                                        <div class="text-sm text-gray-500">Tanggal : 10/11/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 font-medium text-sm text-gray-500">
                                Tim Pemeriksa : TULUS SUPARTO, APRISAL SYAM, MUSTOFA ABDANI, FADEL RACHMAN
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
        <footer>
            <div class="mt-16 text-gray-600">
                <div class="">
                    <div class="flex justify-center">
                        Seksi Pemeriksaan, Penilaian dan Penagihan
                    </div>
                    <div class="flex justify-center font-bold text-2xl">
                        KPP Penanaman Modal Asing Tiga
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

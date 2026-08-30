<x-guest-layout>
    <h1 class="text-3x1 bg-lime-500">profile</h1>
    <p class="text-2x1">{{$dataProfile->profile_description}}</p>

    <p>
        {{
            $dataSaya['nama']
        }}
    </p>

    <div class="max-w-sm mx-auto mt-10 bg-white rounded-xl shadow-lg p-6 border border-gray-200">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
        Data Siswa
    </h2>

    <div class="space-y-3">
        <p>
            <span class="font-semibold text-gray-600">Nama:</span>
            {{ $dataSaya['nama'] }}
        </p>

        <p>
            <span class="font-semibold text-gray-600">Kelas:</span>
            {{ $dataSaya['kelas'] }}
        </p>

        <p>
            <span class="font-semibold text-gray-600">Alamat:</span>
            {{ $dataSaya['alamat'] }}
        </p>

        <p>
            <span class="font-semibold text-gray-600">Hobi:</span>
            {{ $dataSaya['hobi'] }}
        </p>
    </div>
</div>

<div class="min-h-screen bg-gradient-to-br from-slate-100 via-purple-50 to-pink-100 flex items-center justify-center p-6">

    <div class="w-full max-w-md overflow-hidden rounded-3xl bg-white shadow-2xl">

        {{-- Header --}}
        <div class="relative bg-gradient-to-r from-violet-600 via-purple-600 to-pink-500 p-8 text-white">
            <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-white/10"></div>
            <div class="absolute -bottom-12 -left-8 h-32 w-32 rounded-full bg-pink-300/20"></div>

            <div class="relative">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-white/20 text-2xl font-bold backdrop-blur">
                    IB
                </div>

                <p class="text-sm font-medium text-purple-100">
                    DATA SISWA
                </p>

                <h1 class="mt-1 text-3xl font-bold">
                    Profil Saya
                </h1>
            </div>
        </div>

        {{-- Content --}}
        <div class="p-6">

            {{-- Nama --}}
            <div class="mb-4 flex items-center gap-4 rounded-2xl bg-blue-50 p-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-500 text-xl text-white">
                    👤
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-blue-500">
                        Nama
                    </p>
                    <p class="text-lg font-bold text-slate-800">
                        {{ $dataSaya['nama'] }}
                    </p>
                </div>
            </div>

            {{-- Kelas --}}
            <div class="mb-4 flex items-center gap-4 rounded-2xl bg-purple-50 p-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-purple-500 text-xl text-white">
                    🎓
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-purple-500">
                        Kelas
                    </p>
                    <p class="text-lg font-bold text-slate-800">
                        {{ $dataSaya['kelas'] }}
                    </p>
                </div>
            </div>

            {{-- Alamat --}}
            <div class="mb-4 flex items-center gap-4 rounded-2xl bg-emerald-50 p-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-xl text-white">
                    📍
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-emerald-500">
                        Alamat
                    </p>
                    <p class="text-lg font-bold text-slate-800">
                         {{ $dataSaya['alamat'] }}
                    </p>
                </div>
            </div>

            {{-- Hobi --}}
            <div class="flex items-center gap-4 rounded-2xl bg-orange-50 p-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-xl text-white">
                    💻
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-orange-500">
                        Hobi
                    </p>
                    <p class="text-lg font-bold text-slate-800">
                         {{ $dataSaya['hobi'] }}
                    </p>
                </div>
            </div>

        </div>

        {{-- Footer --}}
        <div class="border-t border-slate-100 bg-slate-50 px-6 py-4 text-center">
            <p class="text-sm text-slate-500">
                Laravel + Blade + Tailwind CSS
            </p>
        </div>

    </div>

</div>

</x-guest-layout>

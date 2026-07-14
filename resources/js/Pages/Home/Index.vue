<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {
    Wheat,
    Beef,
    Mountain,
    Handshake,
    Phone,
    MapPin,
    House,
    MapPinned,
    ChevronUp,
    ChevronDown,
    Trees,
    Home,
    Users,
    User,
    UserStar,
    CheckCircle,
} from "lucide-vue-next";
import { ref, onMounted, onUnmounted } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";

import { Autoplay, Navigation, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
const showDukuhModal = ref(false);
const showRT = ref(false);

const openedRT = ref(null);

const toggleRT = (nomor) => {
    if (openedRT.value === nomor) {
        openedRT.value = null;
    } else {
        openedRT.value = nomor;
    }
};

const daftarRT = [
    {
        nomor: "RT 09",
        ketua: "Bpk. Gandung Purwanto",
        kk: 22,
        deskripsi:
            "Lokasi RT 09 berada di atas bukit dan dekat dengan masjid, sehingga memudahkan akses ke fasilitas umum",
        foto: "/images/rt/rt1.jpg",
        show: false,
    },
    {
        nomor: "RT 10",
        ketua: "Bpk. Jaka Triana",
        kk: 21,
        deskripsi:
            "Lokasi RT 10 dekat dengan balai dukuh, masjid, dan sawah tegalan, sehingga memudahkan akses ke fasilitas umum",
        foto: "images/RT 10.jpeg",
        show: false,
    },
    {
        nomor: "RT 11",
        ketua: "Bpk. Ali Bertus",
        kk: 24,
        deskripsi:
            "Lokasi RT 11 dekat dengan RT 10 dan sawah tegalan",
        foto: "images/RT 11.jpeg",
        show: false,
    },
    {
        nomor: "RT 12",
        ketua: "Bpk. Muncar",
        kk: 23,
        deskripsi:
            "Lokasi RT 12 dekat dengan warung kebutuhan sehari-hari, sehingga memudahkan akses ke kebutuhan pokok",
        foto: "images/RT 12.jpeg",
        show: false,
    },
];
const showTop = ref(false);

const handleScroll = () => {
    showTop.value = window.scrollY > 400;
};

const scrollTop = () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
const activePotensi = ref("pertanian");

const dokumentasi = [
    {
        foto: "images/Kerja Bakti Cool.jpeg",
        judul: "Kerja Bakti",
    },
    {
        foto: "images/Posyandu Anak.jpeg",
        judul: "Posyandu Anak",
    },
    {
        foto: "images/Posyandu Lansia.jpeg",
        judul: "Posyandu Lansia",
    },
    {
        foto: "images/Senam Bersama.jpeg",
        judul: "Senam Bersama",
    },
    {
        foto: "images/Kumpul Warga.jpeg",
        judul: "Kumpul Warga",
    },
    {
        foto: "images/Arisan Bapak-Bapak.jpeg",
        judul: "Arisan Bapak-Bapak",
    },
    {
        foto: "images/Kegiatan Ibu-Ibu PKK.jpeg",
        judul: "Kegiatan Ibu-Ibu PKK",
    },
];
</script>

<template>
    <MainLayout>
        <!-- PEMBUNGKUS SELURUH HALAMAN -->
        <div class="w-full overflow-x-hidden">
            <!-- HERO -->
            <section class="relative h-[45vh] sm:h-[55vh] md:h-[70vh]">
                <img
                    src="images/Balai Dukuh.jpeg"
                    class="w-full h-full object-cover"
                />

                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center"
                >
                    <div class="text-center text-white">
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight"
                        >
                            SELAMAT DATANG DI <br />
                            DUKUH PLOSO
                        </h1>
                        <p class="mt-3 text-base sm:text-lg md:text-xl">
                            Guyub Makarya, Maju Bebarengan
                        </p>
                    </div>
                </div>
            </section>

            <!-- Populasi Penduduk -->
            <section class="py-20 bg-green-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-4xl font-bold text-center text-green-700">
                        Populasi Penduduk
                    </h2>

                    <p class="text-center text-gray-600 mt-3 mb-12">
                        Data jumlah penduduk, kepala keluarga, dan rukun
                        tetangga di Dukuh Ploso
                    </p>

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5"
                    >
                        <!-- Dukuh -->
                        <div
                            @click="showDukuhModal = true"
                            class="group bg-white rounded-2xl shadow-lg p-5 md:p-6 text-center cursor-pointer hover:shadow-xl hover:-translate-y-2 hover:ring-2 hover:ring-green-300 active:scale-95 transition-all duration-300 select-none"
                        >
                            <UserStar
                                :size="50"
                                class="mx-auto text-purple-600 mb-4 transition-transform duration-300 group-hover:scale-110"
                            />

                            <h3 class="font-bold text-lg">Dukuh</h3>

                            <p class="text-green-700 font-semibold mt-2">
                                Sumardi Hadi Pramono
                            </p>

                            <div
                                class="inline-flex items-center gap-2 mt-4 bg-green-100 text-green-700 text-sm px-4 py-2 rounded-full"
                            >
                                👆
                                <span>Lihat Profil</span>
                            </div>
                        </div>
                        <!-- Penduduk -->
                        <div
                            class="bg-white rounded-2xl shadow-lg p-5 md:p-6 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300"
                        >
                            <Users
                                :size="50"
                                class="mx-auto text-blue-600 mb-4 w-10 h-10"
                            />

                            <h3 class="font-bold text-lg">Penduduk</h3>

                            <p class="text-3xl font-bold text-green-700 mt-3">
                                333
                            </p>

                            <p class="text-gray-500">Jiwa</p>
                        </div>

                        <!-- KK -->
                        <div
                            class="bg-white rounded-2xl shadow-lg p-5 md:p-6 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300"
                        >
                            <House
                                :size="50"
                                class="mx-auto text-orange-500 mb-4"
                            />

                            <h3 class="font-bold text-lg">Kepala Keluarga</h3>

                            <p class="text-3xl font-bold text-green-700 mt-3">
                                90
                            </p>

                            <p class="text-gray-500">KK</p>
                        </div>

                        <!-- RT -->
                        <div
                            @click="showRT = !showRT"
                            class="group bg-white rounded-2xl shadow-lg p-5 md:p-6 text-center cursor-pointer hover:shadow-xl hover:-translate-y-2 hover:ring-2 hover:ring-green-300 active:scale-95 transition-all duration-300 select-none"
                        >
                            <MapPinned
                                :size="50"
                                class="mx-auto text-red-600 mb-4"
                            />

                            <h3 class="font-bold text-lg">RT</h3>

                            <p class="text-3xl font-bold text-green-700 mt-3">
                                {{ daftarRT.length }}
                            </p>

                            <p class="text-gray-500">Rukun Tetangga</p>

                            <div
                                class="flex justify-center items-center mt-4 text-green-700 font-semibold gap-2"
                            >
                                <span>
                                    {{
                                        showRT
                                            ? "Sembunyikan Detail"
                                            : "Lihat Detail"
                                    }}
                                </span>

                                <ChevronUp v-if="showRT" :size="18" />

                                <ChevronDown v-else :size="18" />
                            </div>
                        </div>
                        <!-- RW -->
                        <div
                            class="bg-white rounded-2xl shadow-lg p-5 md:p-6 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300"
                        >
                            <User
                                :size="50"
                                class="mx-auto text-yellow-400 mb-4"
                            />

                            <h3 class="font-bold text-lg">RW</h3>

                            <p class="text-3xl font-bold text-green-700 mt-3">
                                5
                            </p>

                            <p class="text-gray-500">
                                Rukun Warga (Pak Suwaryanto)
                            </p>
                        </div>
                    </div>
                </div>
                <transition name="fade">
                    <div v-if="showRT" class="mt-10">
                        <h3
                            class="text-3xl font-bold text-center text-green-700 mb-8"
                        >
                            Profil Rukun Tetangga
                        </h3>

                        <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                        >
                            <div
                                v-for="rt in daftarRT"
                                :key="rt.nomor"
                                class="bg-white rounded-xl shadow-lg overflow-hidden"
                            >
                                <img
                                    :src="rt.foto"
                                    class="w-full h-52 object-cover"
                                />

                                <div class="p-5">
                                    <h4 class="font-bold text-xl">
                                        {{ rt.nomor }}
                                    </h4>

                                    <p class="text-gray-600">
                                        Ketua RT : {{ rt.ketua }}
                                    </p>

                                    <p
                                        class="text-green-700 font-semibold mt-1"
                                    >
                                        {{ rt.kk }} KK
                                    </p>

                                    <button
                                        @click.stop="toggleRT(rt.nomor)"
                                        class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition"
                                    >
                                        {{
                                            openedRT === rt.nomor
                                                ? "Tutup Profil"
                                                : "Lihat Profil"
                                        }}
                                    </button>
                                    <transition name="fade">
                                        <div
                                            v-if="openedRT === rt.nomor"
                                            class="mt-4 border-t pt-4"
                                        >
                                            <p class="text-gray-600">
                                                {{ rt.deskripsi }}
                                            </p>
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </section>
            <!-- SEJARAH DUKUH -->
            <section class="py-20 bg-gray-50" id="sejarah">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-4xl font-bold text-center text-green-700">
                        Sejarah Dukuh Ploso
                    </h2>

                    <p class="text-center text-gray-500 mt-3 max-w-3xl mx-auto">
                        Perjalanan panjang Dukuh Ploso dari pembukaan hutan
                        hingga menjadi wilayah yang berkembang seperti saat ini.
                    </p>

                    <div class="mt-16 relative">
                        <!-- Garis -->
                        <div
                            class="absolute left-1/2 top-0 bottom-0 w-1 bg-green-200 transform -translate-x-1/2"
                        ></div>

                        <!-- Timeline -->
                        <div class="space-y-14">
                            <div class="flex items-start md:items-center">
                                <!-- Kiri -->
                                <div
                                    class="w-[calc(50%-24px)] text-right pr-4 md:pr-10"
                                >
                                    <h3 class="font-bold text-lg md:text-xl">
                                        Tahun 1930-an
                                    </h3>

                                    <p
                                        class="text-gray-600 mt-2 text-sm md:text-base"
                                    >
                                        Mbah Pawirorejo menjadi kepala dukuh
                                        pada masa penjajahan Belanda.
                                    </p>
                                </div>

                                <!-- Icon -->
                                <div
                                    class="w-12 h-12 flex-shrink-0 rounded-full bg-green-600 text-white flex items-center justify-center z-10"
                                >
                                    🌳
                                </div>

                                <!-- Spacer -->
                                <div class="flex-1"></div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-1/2"></div>

                                <div
                                    class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center z-10"
                                >
                                    🪓
                                </div>

                                <div class="w-1/2 pl-10">
                                    <h3 class="font-bold text-xl">
                                        Pembukaan Hutan
                                    </h3>

                                    <p class="text-gray-600 mt-2">
                                        Masyarakat mulai membuka hutan untuk
                                        dijadikan permukiman dan lahan
                                        pertanian.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-1/2 text-right pr-10">
                                    <h3 class="font-bold text-xl">
                                        Nama Dukuh
                                    </h3>

                                    <p class="text-gray-600 mt-2">
                                        Nama Ploso diambil dari "Pohon Ploso"
                                        yang banyak tumbuh di wilayah tersebut.
                                    </p>
                                </div>

                                <div
                                    class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center z-10"
                                >
                                    🌲
                                </div>

                                <div class="w-1/2"></div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-1/2"></div>

                                <div
                                    class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center z-10"
                                >
                                    🏡
                                </div>

                                <div class="w-1/2 pl-10">
                                    <h3 class="font-bold text-xl">
                                        Dukuh Saat Ini
                                    </h3>

                                    <p class="text-gray-600 mt-2">
                                        Kepala dukuh saat ini adalah Pak Sumardi
                                        Hadi Pramono. Dukuh Ploso berkembang
                                        menjadi wilayah yang menjunjung tinggi
                                        gotong royong serta menjadi kawasan
                                        pertanian dan peternakan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- POTENSI DUKUH -->
            <section class="py-20 bg-white" id="potensi">
                <h2 class="text-4xl font-bold text-center text-green-700">
                    Potensi Dukuh Ploso
                </h2>

                <p class="text-center text-gray-500 mt-3 mb-14">
                    Berbagai potensi yang dimiliki Dukuh Ploso sebagai
                    usaha-usaha untuk meningkatkan kesejahteraan masyarakat dan
                    mendukung pembangunan masyarakat.
                </p>

                <div
                    class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10"
                >
                    <button
                        @click="activePotensi = 'pertanian'"
                        :class="
                            activePotensi === 'pertanian'
                                ? 'bg-green-600 text-white'
                                : 'bg-white'
                        "
                        class="rounded-xl shadow p-5 transition"
                    >
                        <Wheat class="mx-auto mb-2" />
                        Pertanian
                    </button>

                    <button
                        @click="activePotensi = 'peternakan'"
                        :class="
                            activePotensi === 'peternakan'
                                ? 'bg-green-600 text-white'
                                : 'bg-white'
                        "
                        class="rounded-xl shadow p-5 transition"
                    >
                        <Beef class="mx-auto mb-2" />
                        Peternakan
                    </button>

                    <button
                        @click="activePotensi = 'alam'"
                        :class="
                            activePotensi === 'alam'
                                ? 'bg-green-600 text-white'
                                : 'bg-white'
                        "
                        class="rounded-xl shadow p-5 transition"
                    >
                        <Mountain class="mx-auto mb-2" />
                        Alam
                    </button>

                    <button
                        @click="activePotensi = 'gotong'"
                        :class="
                            activePotensi === 'gotong'
                                ? 'bg-green-600 text-white'
                                : 'bg-white'
                        "
                        class="rounded-xl shadow p-5 transition"
                    >
                        <Handshake class="mx-auto mb-2" />
                        Gotong Royong
                    </button>
                </div>
                <!-- Panel Potensi -->
                <div class="bg-white rounded-2xl shadow-xl p-5 md:p-8">
                    <!-- ================= PERTANIAN ================= -->

                    <div v-if="activePotensi === 'pertanian'">
                        <h3 class="text-3xl font-bold text-green-700 mb-3">
                            🌾 Pertanian
                        </h3>

                        <p class="text-gray-600 mb-8">
                            Mayoritas masyarakat Dukuh Ploso bekerja sebagai
                            petani. Pola tanam masyarakat mengikuti pergantian
                            musim sehingga jenis tanaman yang dibudidayakan
                            berbeda pada musim hujan (Rendengan) dan musim
                            kemarau (Lemaringan). Beberapa komoditas seperti
                            singkong juga dapat ditanam bersamaan dengan padi
                            karena memiliki masa panen yang lebih panjang.
                        </p>

                        <!-- MUSIM -->

                        <div class="grid md:grid-cols-2 gap-5 mb-10">
                            <!-- Hujan -->

                            <div
                                class="bg-blue-50 border border-blue-200 rounded-xl p-5"
                            >
                                <h4
                                    class="text-xl font-bold text-blue-700 mb-2"
                                >
                                    🌧 Musim Rendengan (Hujan)
                                </h4>

                                <p class="text-sm text-blue-600 mb-4">
                                    November – April
                                </p>

                                <ul class="space-y-2">
                                    <li>🌾 Padi</li>
                                    <li>🌽 Jagung</li>
                                    <li>🥜 Kacang Tanah</li>
                                    <li>🫛 Kacang Hijau</li>
                                    <li>🥛 Kedelai</li>
                                    <li>🥬 Sayuran</li>
                                </ul>
                            </div>

                            <!-- Kemarau -->

                            <div
                                class="bg-yellow-50 border border-yellow-200 rounded-xl p-5"
                            >
                                <h4
                                    class="text-xl font-bold text-yellow-700 mb-2"
                                >
                                    ☀ Musim Lemaringan (Kemarau)
                                </h4>

                                <p class="text-sm text-yellow-700 mb-4">
                                    Mei – Juli
                                </p>

                                <ul class="space-y-2">
                                    <li>🥔 Singkong</li>
                                    <li>🥜 Kacang Tanah</li>
                                    <li>🫛 Kacang Hijau</li>
                                    <li>🥛 Kedelai</li>
                                    <li>🌶 Cabai</li>
                                    <li>🍠 Ubi Jalar</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Keterangan -->
                        <div
                            class="mt-6 mb-10 bg-green-50 border border-green-200 rounded-xl p-4"
                        >
                            <h5 class="font-semibold text-green-700 mb-2">
                                📌 Keterangan
                            </h5>

                            <p class="text-gray-700 text-sm leading-relaxed">
                                Beberapa komoditas seperti singkong, ubi jalar,
                                kacang tanah, kacang hijau, kedelai, dan tanaman
                                palawija lainnya dapat ditanam bersamaan
                                (tumpangsari) maupun disesuaikan dengan musim
                                tanam, terutama apabila memiliki masa
                                pertumbuhan atau masa panen yang lebih singkat
                                sehingga tidak mengganggu tanaman utama.
                            </p>
                        </div>
                        <!-- KALENDER PERTANIAN -->

                        <h4 class="font-bold text-xl mb-4">
                            📅 Kalender Musim Tanam
                        </h4>

                        <div class="overflow-x-auto rounded-xl">
                            <table
                                class="w-full border-collapse text-center text-xs sm:text-sm"
                            >
                                <thead>
                                    <tr class="bg-green-700 text-white">
                                        <th class="p-2 text-left">Tanaman</th>

                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>Mei</th>
                                        <th>Jun</th>
                                        <th>Jul</th>
                                        <th>Agu</th>
                                        <th>Sep</th>
                                        <th>Okt</th>
                                        <th>Nov</th>
                                        <th>Des</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- PADI -->

                                    <tr class="border-b">
                                        <td class="font-semibold text-left p-2">
                                            🌾 Padi
                                        </td>

                                        <td class="bg-green-500"></td>
                                        <td class="bg-green-500"></td>
                                        <td class="bg-green-500"></td>
                                        <td class="bg-green-500"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-green-500"></td>
                                        <td class="bg-green-500"></td>
                                        <td class="bg-green-500"></td>
                                    </tr>

                                    <!-- JAGUNG -->

                                    <tr class="border-b">
                                        <td class="font-semibold text-left p-2">
                                            🌽 Jagung
                                        </td>

                                        <td class="bg-lime-400"></td>
                                        <td class="bg-lime-400"></td>
                                        <td class="bg-lime-400"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-lime-400"></td>
                                        <td class="bg-lime-400"></td>
                                        <td class="bg-lime-400"></td>

                                        <td></td>
                                    </tr>

                                    <!-- SINGKONG -->

                                    <tr class="border-b">
                                        <td class="font-semibold text-left p-2">
                                            🥔 Singkong
                                        </td>

                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                        <td class="bg-yellow-400"></td>
                                    </tr>

                                    <!-- CABAI -->

                                    <tr>
                                        <td class="font-semibold text-left p-2">
                                            🌶 Cabai
                                        </td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-red-400"></td>
                                        <td class="bg-red-400"></td>
                                        <td class="bg-red-400"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <!-- Kacang Tanah -->

                                    <tr>
                                        <td class="font-semibold text-left p-2">
                                            🥜 Kacang Tanah
                                        </td>

                                        <td class="bg-amber-600"></td>
                                        <td class="bg-amber-600"></td>

                                        <td></td>
                                        <td></td>

                                        <td class="bg-amber-600"></td>
                                        <td class="bg-amber-600"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-amber-600"></td>
                                        <td class="bg-amber-600"></td>

                                        <td></td>
                                    </tr>
                                    <!-- Kacang Hijau -->

                                    <tr>
                                        <td class="font-semibold text-left p-2">
                                            🫛 Kacang Hijau
                                        </td>

                                        <td></td>

                                        <td class="bg-green-300"></td>
                                        <td class="bg-green-300"></td>

                                        <td></td>
                                        <td></td>

                                        <td class="bg-green-300"></td>
                                        <td class="bg-green-300"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-green-300"></td>
                                        <td class="bg-green-300"></td>
                                    </tr>
                                    <!-- Kedelai -->

                                    <tr>
                                        <td class="font-semibold text-left p-2">
                                            🥛 Kedelai
                                        </td>

                                        <td></td>

                                        <td class="bg-blue-100"></td>
                                        <td class="bg-blue-100"></td>

                                        <td></td>
                                        <td></td>

                                        <td class="bg-blue-100"></td>
                                        <td class="bg-blue-100"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-blue-100"></td>
                                        <td class="bg-blue-100"></td>
                                    </tr>
                                    <!-- Ubi Jalar -->

                                    <tr>
                                        <td class="font-semibold text-left p-2">
                                            🍠 Ubi Jalar
                                        </td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="bg-orange-300"></td>
                                        <td class="bg-orange-300"></td>
                                        <td class="bg-orange-300"></td>
                                        <td class="bg-orange-300"></td>
                                        <td class="bg-orange-300"></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Legenda Kalender Tanaman -->
                        <div class="flex flex-wrap gap-4 mt-5 text-sm">
                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-green-500"
                                ></span>
                                Padi
                            </div>

                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-lime-400"
                                ></span>
                                Jagung
                            </div>

                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-yellow-400"
                                ></span>
                                Singkong
                            </div>

                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded bg-red-400"></span>
                                Cabai
                            </div>

                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-orange-400"
                                ></span>
                                Kacang Tanah
                            </div>

                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-green-300"
                                ></span>
                                Kacang Hijau
                            </div>

                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-blue-100"
                                ></span>
                                Kedelai
                            </div>
                            <div class="flex items-center gap-2">
                                <span
                                    class="w-4 h-4 rounded bg-orange-300"
                                ></span>
                                Ubi Jalar
                            </div>
                        </div>

                        <!-- KOMODITAS -->

                        <h4 class="font-bold text-xl mt-10 mb-4">
                            🌱 Komoditas Unggulan
                        </h4>

                        <div class="flex flex-wrap gap-3">
                            <span class="bg-green-100 px-4 py-2 rounded-full">
                                🌾 Padi
                            </span>

                            <span class="bg-yellow-100 px-4 py-2 rounded-full">
                                🌽 Jagung
                            </span>

                            <span class="bg-orange-100 px-4 py-2 rounded-full">
                                🥔 Singkong
                            </span>

                            <span class="bg-red-100 px-4 py-2 rounded-full">
                                🌶 Cabai
                            </span>

                            <span class="bg-amber-100 px-4 py-2 rounded-full">
                                🥜 Kacang Tanah
                            </span>

                            <span class="bg-emerald-100 px-4 py-2 rounded-full">
                                🫛 Kacang Hijau
                            </span>

                            <span class="bg-blue-100 px-4 py-2 rounded-full">
                                🥛 Kedelai
                            </span>

                            <span class="bg-orange-300 px-4 py-2 rounded-full">
                                🍠 Ubi Jalar
                            </span>

                            <span class="bg-lime-100 px-4 py-2 rounded-full">
                                🥬 Sayuran
                            </span>
                        </div>
                    </div>

                    <!-- PETERNAKAN -->
                    <div v-if="activePotensi === 'peternakan'">
                        <h3 class="text-3xl font-bold text-red-700 mb-4">
                            🐄 Peternakan
                        </h3>

                        <p class="text-gray-600 mb-8">
                            Sebagian masyarakat memelihara hewan ternak untuk
                            tabungan (aset finansial) yang bisa dicairkan
                            sewaktu-waktu. Selain itu, hewan ternak juga bisa
                            menjadi sumber pangan bagi masyarakat.
                        </p>

                        <ul class="space-y-4">
                            <li class="flex gap-3">
                                <CheckCircle class="text-green-600" />
                                Sapi
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle class="text-green-600" />
                                Kambing
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle class="text-green-600" />
                                Ayam
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle class="text-green-600" />
                                Angsa
                            </li>
                            <li class="flex gap-3">
                                <CheckCircle class="text-green-600" />
                                DLL
                            </li>
                        </ul>
                    </div>

                    <!-- ALAM -->
                    <div v-if="activePotensi === 'alam'">
                        <h3 class="text-3xl font-bold text-green-700 mb-4">
                            🏔 Alam
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Dukuh Ploso memiliki udara yang sejuk dan
                            pemandangan alam yang indah-indah antara lain:
                        </p>
                        <ul class="space-y-4">
                            <li class="flex gap-3">
                                <Trees /> Sawah Irigasi & Sawah Tegalan/Kebun
                            </li>
                            <li class="flex gap-3">
                                <Mountain /> Pegunungan Perbukitan
                            </li>
                            <li class="flex gap-3">
                                <Home /> Permukiman Pedesaan
                            </li>
                        </ul>
                    </div>

                    <!-- Gotong Royong -->
                    <div v-if="activePotensi === 'gotong'">
                        <h3 class="text-3xl font-bold text-blue-700 mb-4">
                            🤝 Gotong Royong & Tradisi Masyarakat
                        </h3>

                        <p class="text-gray-600 mb-8">
                            Masyarakat Dukuh Ploso masih menjaga semangat gotong
                            royong, kebersamaan, serta melestarikan berbagai
                            adat istiadat yang diwariskan secara turun-temurun
                            sebagai wujud rasa syukur kepada Tuhan Yang Maha
                            Esa.
                        </p>

                        <div class="grid md:grid-cols-2 gap-5">
                            <!-- Gotong Royong -->
                            <div
                                class="bg-blue-50 border border-blue-200 rounded-xl p-5"
                            >
                                <h4
                                    class="font-bold text-lg text-blue-700 mb-4"
                                >
                                    🛠️ Kegiatan Gotong Royong
                                </h4>

                                <ul class="space-y-3 text-gray-700">
                                    <li>🤝 Musyawarah warga</li>
                                    <li>🧹 Kerja bakti lingkungan</li>
                                    <li>🚨 Siskamling</li>
                                    <li>🎉 Perayaan Hari Kemerdekaan RI</li>
                                    <li>
                                        🏡 Rewang / bantu-membantu saat hajatan,
                                        pernikahan, dan kegiatan sosial lainnya
                                    </li>
                                </ul>
                            </div>

                            <!-- Tradisi -->
                            <div
                                class="bg-green-50 border border-green-200 rounded-xl p-5"
                            >
                                <h4
                                    class="font-bold text-lg text-green-700 mb-4"
                                >
                                    🌿 Tradisi & Budaya
                                </h4>

                                <ul class="space-y-3 text-gray-700">
                                    <li>
                                        🌾 <b>Bersih Dusun (Rasulan)</b><br />
                                        <span class="text-sm text-gray-600">
                                            Ungkapan rasa syukur kepada Tuhan
                                            atas ketentraman hidup sekaligus doa
                                            agar musim tanam dan hasil panen
                                            diberikan keberkahan.
                                        </span>
                                    </li>

                                    <li>
                                        🐄 <b>Gumbrekan / Kenduri Ternak</b
                                        ><br />
                                        <span class="text-sm text-gray-600">
                                            Bentuk rasa syukur atas rezeki
                                            berupa hewan ternak yang menjadi
                                            tabungan dan investasi masyarakat.
                                        </span>
                                    </li>

                                    <li>
                                        🌾 <b>Kirim Duwo</b><br />
                                        <span class="text-sm text-gray-600">
                                            Tradisi setelah panen sebagai
                                            ungkapan terima kasih kepada Tuhan
                                            atas hasil pertanian yang melimpah.
                                        </span>
                                    </li>

                                    <li>
                                        🌙 <b>Suran</b><br />
                                        <span class="text-sm text-gray-600">
                                            Peringatan datangnya Tahun Baru
                                            Islam (1 Muharram).
                                        </span>
                                    </li>

                                    <li>
                                        🕌 <b>Muludan</b><br />
                                        <span class="text-sm text-gray-600">
                                            Memperingati kelahiran Nabi Muhammad
                                            SAW.
                                        </span>
                                    </li>

                                    <li>
                                        🤲 <b>Doa Bersama & Sholawatan</b><br />
                                        <span class="text-sm text-gray-600">
                                            Dilaksanakan pada berbagai
                                            kesempatan sebagai bentuk
                                            kebersamaan serta memohon
                                            keselamatan dan keberkahan.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- GALERI -->
            <section id="galeri" class="py-20 bg-white overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-4xl font-bold text-center text-green-700">
                        Dokumentasi Kegiatan
                    </h2>

                    <p class="text-center text-gray-600 mt-3 mb-12">
                        Berbagai kegiatan masyarakat Dukuh Ploso.
                    </p>

                    <Swiper
                        :modules="[Autoplay, Navigation, Pagination]"
                        :slides-per-view="1"
                        :space-between="25"
                        :loop="true"
                        :autoplay="{ delay: 3000 }"
                        :navigation="true"
                        :pagination="{ clickable: true }"
                        :breakpoints="{
                            640: {
                                slidesPerView: 1,
                            },
                            768: {
                                slidesPerView: 2,
                            },
                            1024: {
                                slidesPerView: 3,
                            },
                        }"
                    >
                        <SwiperSlide
                            v-for="item in dokumentasi"
                            :key="item.judul"
                        >
                            <div
                                class="rounded-xl overflow-hidden shadow-lg group"
                            >
                                <img
                                    :src="item.foto"
                                    class="w-full h-72 object-cover group-hover:scale-105 transition duration-500"
                                />

                                <div class="bg-white p-5">
                                    <h3 class="font-bold text-lg">
                                        {{ item.judul }}
                                    </h3>
                                </div>
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </section>
            <!-- KONTAK -->
            <section class="p-8 bg-gray-100">
                <h2 class="text-4xl font-bold text-center text-green-700 mb-8">
                    Hubungi Kami
                </h2>

                <div class="grid md:grid-cols-2 gap-6 w-full">
                    <!-- MAP -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d323.3053385715823!2d110.72009190721303!3d-8.067439704846572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc9dbe4b6fde3%3A0xb4011ecee263e528!2sBalai%20Dusun%20Ploso!5e1!3m2!1sen!2sid!4v1783238094107!5m2!1sen!2sid"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        class="w-full h-[350px] rounded-xl"
                    ></iframe>

                    <!-- INFO -->
                    <div class="space-y-6">
                        <h3 class="text-xl font-bold text-gray-800">
                            Informasi Lokasi
                        </h3>

                        <div class="space-y-4">
                            <!-- Dukuh -->
                            <div class="flex items-center gap-3">
                                <MapPin
                                    :size="22"
                                    class="text-red-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">Dukuh</p>
                                    <p class="text-gray-600">Ploso</p>
                                </div>
                            </div>
                            <!-- Kalurahan -->
                            <div class="flex items-center gap-3">
                                <MapPin
                                    :size="22"
                                    class="text-red-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">Kalurahan</p>
                                    <p class="text-gray-600">Petir</p>
                                </div>
                            </div>

                            <!-- Kecamatan -->
                            <div class="flex items-center gap-3">
                                <MapPin
                                    :size="22"
                                    class="text-red-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">
                                        Kapanewon/Kecamatan
                                    </p>
                                    <p class="text-gray-600">Rongkop</p>
                                </div>
                            </div>

                            <!-- Kabupaten -->
                            <div class="flex items-center gap-3">
                                <MapPin
                                    :size="22"
                                    class="text-red-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">Kabupaten</p>
                                    <p class="text-gray-600">Gunungkidul</p>
                                </div>
                            </div>

                            <!-- Provinsi -->
                            <div class="flex items-center gap-3">
                                <MapPin
                                    :size="22"
                                    class="text-red-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">Provinsi</p>
                                    <p class="text-gray-600">
                                        Daerah Istimewa Yogyakarta
                                    </p>
                                </div>
                            </div>

                            <!-- Telepon -->
                            <div class="flex items-center gap-3 pt-3 border-t">
                                <Phone
                                    :size="22"
                                    class="text-blue-600 flex-shrink-0"
                                />

                                <div>
                                    <p class="font-semibold">Telepon</p>
                                    <p class="text-gray-600">
                                        0823-2614-4210 (Pak Sumardi Dukuh)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </MainLayout>
    <!-- Tombol Scroll ke Atas -->
    <button
        v-if="showTop"
        @click="scrollTop"
        class="fixed bottom-5 right-5 bg-green-700 text-white p-4 rounded-full shadow-xl hover:bg-green-800 transition"
    >
        ↑
    </button>
    <!-- Modal Profil Dukuh -->
    <div
        v-if="showDukuhModal"
        class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4"
    >
        <div
            class="bg-white rounded-2xl shadow-2xl max-w-md w-full relative overflow-hidden"
        >
            <!-- Tombol Close -->
            <button
                @click="showDukuhModal = false"
                class="absolute top-3 right-4 text-2xl hover:text-red-600"
            >
                ✕
            </button>

            <img
                src="images/Fotbar w Pak Dukuh.jpeg"
                class="w-full h-72 object-cover"
            />

            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-700">
                    Sumardi Hadi Pramono
                </h2>

                <p class="text-gray-600 mt-2">Kepala Dukuh Ploso</p>

                <hr class="my-4" />

                <p class="text-gray-700 leading-relaxed">
                    Menjabat sebagai Kepala Dukuh Ploso dan memimpin
                    penyelenggaraan pemerintahan serta pelayanan masyarakat di
                    wilayah Dukuh Ploso.
                </p>
            </div>
        </div>
    </div>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: all 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
    transform: translateY(-10px);
}
</style>

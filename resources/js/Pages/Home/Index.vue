<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {
    Wheat,
    Beef,
    Mountain,
    Handshake,
    Phone,
    MapPin,
} from "lucide-vue-next";
import { ref } from "vue";
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
            "Mayoritas masyarakat bekerja sebagai petani padi dan peternak kambing.",
        foto: "/images/rt/rt1.jpg",
        show: false,
    },
    {
        nomor: "RT 10",
        ketua: "Bpk. Jaka Triana",
        kk: 21,
        deskripsi:
            "Mayoritas masyarakat bekerja sebagai petani padi dan peternak kambing.",
        foto: "/images/rt/rt2.jpg",
        show: false,
    },
    {
        nomor: "RT 11",
        ketua: "Bpk. Ali Bertus",
        kk: 24,
        deskripsi:
            "Mayoritas masyarakat bekerja sebagai petani padi dan peternak kambing.",
        foto: "/images/rt/rt3.jpg",
        show: false,
    },
    {
        nomor: "RT 12",
        ketua: "Bpk. Muncar",
        kk: 23,
        deskripsi:
            "Mayoritas masyarakat bekerja sebagai petani padi dan peternak kambing.",
        foto: "/images/rt/rt4.jpg",
        show: false,
    },
];
</script>

<template>
    <MainLayout>
        <!-- HERO -->
        <section class="relative h-[500px]">
            <img
                src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
                class="w-full h-full object-cover"
            />

            <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center"
            >
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-5xl font-bold">
                        SELAMAT DATANG DI <br />
                        DUKUH PLOSO
                    </h1>
                    <p class="mt-2">Guyub Makarya, Maju Bebarengan</p>
                </div>
            </div>
        </section>

        <!-- Populasi Penduduk -->
        <section class="py-20 bg-green-50">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-green-700">
                    Populasi Penduduk
                </h2>

                <p class="text-center text-gray-600 mt-3 mb-12">
                    Data jumlah penduduk, kepala keluarga, dan rukun tetangga di
                    Dukuh Ploso
                </p>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
                >
                    <!-- Penduduk -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    >
                        <Users :size="50" class="mx-auto text-blue-600 mb-4" />

                        <h3 class="font-bold text-lg">Penduduk</h3>

                        <p class="text-3xl font-bold text-green-700 mt-3">
                            331
                        </p>

                        <p class="text-gray-500">Jiwa</p>
                    </div>

                    <!-- KK -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    >
                        <House
                            :size="50"
                            class="mx-auto text-orange-500 mb-4"
                        />

                        <h3 class="font-bold text-lg">Kepala Keluarga</h3>

                        <p class="text-3xl font-bold text-green-700 mt-3">90</p>

                        <p class="text-gray-500">KK</p>
                    </div>

                    <!-- RT -->
                    <div
                        @click="showRT = !showRT"
                        class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition duration-300 cursor-pointer"
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
                                    showRT ? "Sembunyikan Detail" : "Lihat Detail"
                                }}
                            </span>

                            <ChevronUp v-if="showRT" :size="18" />

                            <ChevronDown v-else :size="18" />
                        </div>
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

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
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

                                <p class="text-green-700 font-semibold mt-1">
                                    {{ rt.kk }} KK
                                </p>

                                <button
                                    @click.stop="console.log(rt.nomor)"
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
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-green-700">
                    Sejarah Dukuh Ploso
                </h2>

                <p class="text-center text-gray-500 mt-3 max-w-3xl mx-auto">
                    Perjalanan panjang Dukuh Ploso dari pembukaan hutan hingga
                    menjadi wilayah yang berkembang seperti saat ini.
                </p>

                <div class="mt-16 relative">
                    <!-- Garis -->
                    <div
                        class="absolute left-1/2 top-0 bottom-0 w-1 bg-green-200 transform -translate-x-1/2"
                    ></div>

                    <!-- Timeline -->
                    <div class="space-y-14">
                        <div class="flex items-center">
                            <div class="w-1/2 text-right pr-10">
                                <h3 class="font-bold text-xl">Tahun 1930-an</h3>

                                <p class="text-gray-600 mt-2">
                                    Mbah Pawirorejo menjadi kepala dukuh pada
                                    masa penjajahan Belanda.
                                </p>
                            </div>

                            <div
                                class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center z-10"
                            >
                                🌳
                            </div>

                            <div class="w-1/2"></div>
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
                                    dijadikan permukiman dan lahan pertanian.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-1/2 text-right pr-10">
                                <h3 class="font-bold text-xl">Nama Dukuh</h3>

                                <p class="text-gray-600 mt-2">
                                    Nama Ploso diambil dari "Pohon Ploso" yang
                                    banyak tumbuh di wilayah tersebut.
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
                                    Hadi Pramono. Dukuh Ploso berkembang menjadi
                                    wilayah yang menjunjung tinggi gotong royong
                                    serta menjadi kawasan pertanian dan
                                    peternakan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- POTENSI DUKUH -->
        <section class="py-20 bg-white" id="potensi">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-green-700">
                    Potensi Dukuh Ploso
                </h2>

                <p class="text-center text-gray-500 mt-3 mb-14">
                    Berbagai potensi yang dimiliki Dukuh Ploso sebagai
                    usaha-usaha untuk meningkatkan kesejahteraan masyarakat dan
                    mendukung pembangunan masyarakat.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition"
                    >
                        <div class="text-5xl mb-5">
                            <Wheat
                                :size="50"
                                class="mx-auto text-yellow-600 mb-4"
                            />
                        </div>

                        <h3 class="font-bold text-xl mb-3">Pertanian</h3>

                        <p class="text-gray-600">
                            Mayoritas masyarakat bekerja sebagai petani dengan
                            berbagai hasil pertanian seperti padi, jagung, umbi-umbian, dan sayuran.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition"
                    >
                        <div class="text-5xl mb-5">
                            <Beef
                                :size="50"
                                class="mx-auto text-red-800 mb-4"
                            />
                        </div>

                        <h3 class="font-bold text-xl mb-3">Peternakan</h3>

                        <p class="text-gray-600">
                            Sebagian Masyarakat juga memiliki hewan ternak
                            seperti ayam, sapi, kambing, angsa dan lain-lain.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition"
                    >
                        <div class="text-5xl mb-5">
                            <Mountain
                                :size="48"
                                class="mx-auto text-green-500 mb-4"
                            />
                        </div>

                        <h3 class="font-bold text-xl mb-3">Alam</h3>

                        <p class="text-gray-600">
                            Dikelilingi pemandangan pegunungan dan hamparan
                            sawah dan perkebunan yang membuat suasana menjadi asri dan sejuk.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition"
                    >
                        <div class="text-5xl mb-5">
                            <Handshake
                                :size="48"
                                class="mx-auto text-blue-600 mb-4"
                            />
                        </div>

                        <h3 class="font-bold text-xl mb-3">Gotong Royong</h3>

                        <p class="text-gray-600">
                            Nilai kebersamaan dan gotong royong masih menjadi
                            budaya yang terus dijaga oleh masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALERI -->
        <section class="p-8 bg-gray-100" id="galeri">
            <h2 class="text-4xl font-bold text-center text-green-700 mb-8">
                Galeri Dukuh Ploso
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div v-for="i in 6" :key="i" class="relative group">
                    <img
                        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                        class="rounded-lg w-full h-[150px] object-cover"
                    />

                    <div
                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white rounded-lg"
                    >
                        Dokumentasi Padukuhan
                    </div>
                </div>
            </div>
        </section>

        <!-- KONTAK -->
        <section class="p-8 bg-gray-100">
            <h2 class="text-4xl font-bold text-center text-green-700 mb-8">
                Hubungi Kami
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- MAP -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d323.3053385715823!2d110.72009190721303!3d-8.067439704846572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc9dbe4b6fde3%3A0xb4011ecee263e528!2sBalai%20Dusun%20Ploso!5e1!3m2!1sen!2sid!4v1783238094107!5m2!1sen!2sid"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin"
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
                                <p class="font-semibold">Kapanewon/Kecamatan</p>
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
    </MainLayout>
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

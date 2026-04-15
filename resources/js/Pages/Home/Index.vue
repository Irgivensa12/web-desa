<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

// sementara dummy data (nanti diganti dari database)
const pengumuman = [
    {
        id: 1,
        judul: "Musyawarah Desa",
        isi: "Musrenbangdes 2024",
        tanggal: "15 Des 2023", 
    },
    {
        id: 2,
        judul: "Gotong Royong",
        isi: "Kebersihan Dusun",
        tanggal: "20 Des 2023",
    },
    {
        id: 3,
        judul: "Pesta Rakyat",
        isi: "Pasar Kuliner Desa",
        tanggal: "30 Des 2023",
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
                        DESA DESAAN
                    </h1>
                    <p class="mt-2">Kearifan Lokal, Masa Depan Cerah</p>

                    <button
                        class="mt-4 bg-green-500 px-6 py-2 rounded-full hover:bg-green-600"
                    >
                        Jelajahi Desa
                    </button>
                </div>
            </div>
        </section>

        <!-- TENTANG DESA -->
        <section class="p-8 bg-white">
            <h2 class="text-2xl font-bold text-center mb-6">TENTANG DESA</h2>

            <div class="grid md:grid-cols-2 gap-6 items-center">
                <img
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                    class="rounded-lg shadow"
                />

                <div>
                    <h3 class="text-xl font-bold mb-2">
                        PROFIL DESA DESAAN
                    </h3>
                    <p class="text-gray-600">
                        Terletak di lembah pegunungan yang asri, Desa Desaan
                        adalah komunitas yang ramah, menjunjung tinggi nilai
                        gotong royong, budaya lokal, dan berinovasi untuk
                        kesejahteraan bersama.
                    </p>

                    <button
                        class="mt-4 bg-green-500 text-white px-4 py-2 rounded"
                    >
                        Read More
                    </button>
                </div>
            </div>
        </section>

        <!-- GALERI -->
        <section class="p-8 bg-gray-100">
            <h2 class="text-2xl font-bold text-center mb-6">GALERI DESA</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div v-for="i in 6" :key="i" class="relative group">
                    <img
                        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                        class="rounded-lg w-full h-[150px] object-cover"
                    />

                    <div
                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white rounded-lg"
                    >
                        Kegiatan Desa
                    </div>
                </div>
            </div>
        </section>

        <!-- PENGUMUMAN -->
        <section class="p-8 bg-white">
            <h2 class="text-2xl font-bold text-center mb-6">
                PENGUMUMAN & KEGIATAN
            </h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div
                    v-for="item in pengumuman"
                    :key="item.id"
                    class="p-4 shadow rounded-lg bg-gray-50"
                >
                    <h3 class="font-bold">{{ item.judul }}</h3>
                    <p class="text-gray-600 text-sm">{{ item.isi }}</p>
                    <p class="text-xs mt-2 text-gray-400">{{ item.tanggal }}</p>
                </div>
            </div>
        </section>

        <!-- KONTAK -->
        <section class="p-8 bg-gray-100">
            <h2 class="text-2xl font-bold text-center mb-6">HUBUNGI KAMI</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- MAP -->
                <iframe
                    class="w-full h-[300px] rounded-lg"
                    src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
                >
                </iframe>

                <!-- INFO -->
                <div class="space-y-4">
                    <p><strong>Alamat:</strong> Desa Desaan</p>
                    <p><strong>Telepon:</strong> 0812-3456-7890</p>
                    <p><strong>Email:</strong> desa@email.com</p>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

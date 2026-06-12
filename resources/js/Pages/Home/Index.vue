<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
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
                    <p class="mt-2">Kearifan Lokal, Masa Depan Cerah</p>

                    <button
                        class="mt-4 bg-green-500 px-6 py-2 rounded-full hover:bg-green-600"
                    >
                        Jelajahi Desa
                    </button>
                </div>
            </div>
        </section>

        <!-- TENTANG DUKUH -->
        <section class="p-8 bg-white">
            <h2 class="text-2xl font-bold text-center mb-6">TENTANG DUKUH</h2>

            <div class="grid md:grid-cols-2 gap-6 items-center">
                <img
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                    class="rounded-lg shadow"
                />

                <div>
                    <h3 class="text-xl font-bold mb-2">PROFIL DUKUH PLOSO</h3>
                    <p class="text-gray-600">
                        Terletak di lembah pegunungan yang asri, Dukuh Ploso
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

        <!-- PETA WILAYAH -->
        <section class="p-8 bg-gray-100">
            <h2 class="text-2xl font-bold text-center mb-8">
                PETA WILAYAH DESA PETIR
            </h2>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <img
                    src="/images/peta-petir.jpg"
                    alt="Peta Desa Petir"
                    class="w-full rounded-lg shadow-lg"
                />

                <div>
                    <h3 class="text-xl font-bold mb-3">Letak Administratif</h3>

                    <p class="text-gray-600 mb-4">
                        Desa Petir merupakan salah satu desa di Kecamatan
                        Rongkop, Kabupaten Gunungkidul, Daerah Istimewa
                        Yogyakarta.
                    </p>

                    <ul class="space-y-2 text-gray-700">
                        <li>📍 Kecamatan : Rongkop</li>
                        <li>📍 Kabupaten : Gunungkidul</li>
                        <li>📍 Provinsi : DI Yogyakarta</li>
                        <li>📍 Dusun : Ploso, Dadapan, Watumengku, dll.</li>
                    </ul>
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
                        Kegiatan Dukuh
                    </div>
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
                    <p><strong>Alamat:</strong>Dukuh Ploso</p>
                    <p><strong>Telepon:</strong> 0812-3456-7890</p>
                    <p><strong>Email:</strong> desa@email.com</p>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

<script setup>
import { ref } from "vue";

const showProfileMenu = ref(false);

const showModal = ref(false); 
const modalTitle = ref("");
const modalImage = ref("");

const openImage = (title, image) => {
    modalTitle.value = title;
    modalImage.value = image;
    showModal.value = true;
    showProfileMenu.value = false;
};
</script>

<template>
    <!-- Membuat navbar tetap di atas saat di scroll -->
    <nav  class="sticky top-0 z-50 bg-green-700 text-white px-6 py-4 flex justify-between shadow-lg"> 
        <img
            src="images/Logo KKN 114.png"
            alt="KKN 114"
            class="h-12 w-auto mr-3"
        />

        <div class="flex items-center space-x-6">
            <a href="/" class="hover:text-green-600"> Beranda </a>

            <!-- Dropdown Profil Desa -->
            <div class="relative">
                <button
                    @click="showProfileMenu = !showProfileMenu"
                    class="text-white font-semibold flex items-center gap-1"
                >
                    Profil Desa ▼
                </button>

                <div
                    v-if="showProfileMenu"
                    class="absolute left-0 mt-2 w-64 bg-yellow-500 rounded-xl shadow-xl overflow-hidden z-50"
                >
                    <!-- Peta Administrasi -->
                    <button
                        @click="
                            openImage(
                                'Peta Administrasi Desa Petir',
                                'images/peta administasi.png',
                            )
                        "
                        class="w-full text-left px-5 py-3 hover:bg-gray-400"
                    >
                        🗺️ Peta Administrasi Desa
                    </button>

                    <!-- Peta Pemukiman -->
                    <button
                        @click="
                            openImage(
                                'Peta Pemukiman Dukuh Ploso',
                                'images/peta pemukiman.png',
                            )
                        "
                        class="w-full text-left px-5 py-3 hover:bg-gray-400"
                    >
                        🏘️ Peta Pemukiman
                    </button>

                    <!-- Struktur Organisasi -->
                    <button
                        @click="
                            openImage(
                                'Struktur Organisasi Dukuh Ploso',
                                'images/Struktur Organisasi Dukuh Ploso fix.png',
                            )
                        "
                        class="w-full text-left px-5 py-3 hover:bg-gray-400"
                    >
                        👥 Struktur Organisasi
                    </button>
                </div>
            </div>

            <a href="/#sejarah" class="hover:text-green-600"> Sejarah Dukuh</a>
            <a href="/#potensi" class="hover:text-green-600"> Potensi Dukuh </a>
            <a href="/#galeri" class="hover:text-green-600"> Galeri Dukuh </a>
        </div>
    </nav>

    <!-- Modal  Peta Administrasi, Peta Pemukiman, & Struktur Organisasi -->
    <div
        v-if="showModal"
        class="fixed inset-0 bg-black/70 flex justify-center items-center z-50"
    >
        <div
            class="bg-white rounded-2xl p-6 max-w-5xl w-[90%] relative shadow-2xl"
        >
            <button
                @click="showModal = false"
                class="absolute top-4 right-4 text-2xl hover:text-red-600"
            >
                ✕
            </button>

            <h2 class="text-2xl font-bold text-center text-green-700 mb-5">
                {{ modalTitle }}
            </h2>

            <img
                :src="modalImage"
                :alt="modalTitle"
                class="w-full max-h-[75vh] object-contain rounded-lg"
            />
        </div>
    </div>
</template>

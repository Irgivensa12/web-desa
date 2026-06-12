<script setup>
import { ref } from "vue";

const showProfileMenu = ref(false);
</script>

<template>
    <nav class="bg-green-700 text-white px-6 py-4 flex justify-between">
        <h1 class="font-bold">Dukuh Ploso</h1>

        <div class="flex items-center space-x-6">
            <a href="/" class="hover:text-green-600"> Beranda </a>

            <!-- Dropdown Profil Desa -->
            <div class="relative">
                <button
                    @click="showProfileMenu = !showProfileMenu"
                    class="text-white font-semibold"
                >
                    Profil Desa ▼
                </button>

                <div
                    v-if="showProfileMenu"
                    class="absolute left-0 mt-2 w-56 bg-red-500 rounded-lg shadow-lg z-50"
                >
                    <a
                        href="/monografi"
                        class="block px-4 py-2 hover:bg-red-600 text-white"
                    >
                        Monografi Desa
                    </a>

                    <a
                        href="/struktur"
                        class="block px-4 py-2 hover:bg-red-600 text-white"
                    >
                        Struktur Organisasi
                    </a>

                    <a
                        href="/sejarah"
                        class="block px-4 py-2 hover:bg-red-600 text-white"
                    >
                        Sejarah Desa
                    </a>
                </div>
            </div>

            <a href="/login" class="hover:text-green-600"> Login Admin </a>
        </div>
    </nav>
</template>

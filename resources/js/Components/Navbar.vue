<script setup>
import { ref } from "vue";
import { Menu, X, ChevronDown } from "lucide-vue-next";

const showProfileMenu = ref(false);
const showMobileMenu = ref(false);
const showModal = ref(false);
const modalTitle = ref("");
const modalImage = ref("");

const openImage = (title, image) => {
    modalTitle.value = title;
    modalImage.value = image;

    showModal.value = true;

    // tutup semua menu
    showProfileMenu.value = false;
    showMobileMenu.value = false;
};
</script>

<template>
    <!-- Membuat navbar tetap di atas saat di scroll -->
    <nav class="sticky top-0 z-50 bg-green-700 text-white shadow-lg">
        <div
            class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-5 lg:px-6 py-3 gap-3"
        >
            <!-- LOGO -->

            <div class="flex items-center min-w-0">
                <img
                    src="/images/Logo Dukuh Ploso 2.png"
                    class="h-8 sm:h-10 md:h-12 w-auto rounded-full border-2 border-white shadow-lg"
                />

                <div class="ml-2 min-w-0">
                    <h1
                        class="font-bold text-base sm:text-lg md:text-xl leading-tight truncate"
                    >
                        Dukuh Ploso
                    </h1>

                    <p class="hidden sm:block text-xs text-green-100 truncate">
                        Desa Petir • Rongkop
                    </p>
                </div>
            </div>

            <!-- MENU DESKTOP -->

            <div class="hidden md:flex items-center gap-6 lg:gap-8">
                <a href="/" class="hover:text-yellow-300 transition">
                    Beranda
                </a>

                <!-- Dropdown -->

                <div class="relative">
                    <button
                        @click="showProfileMenu = !showProfileMenu"
                        class="flex items-center gap-1 hover:text-yellow-300"
                    >
                        Profil Desa

                        <ChevronDown :size="18" />
                    </button>

                    <!-- Dropdown Desktop -->
                    <div
                        v-if="showProfileMenu"
                        class="absolute mt-3 right-0 md:left-0 w-64 bg-white rounded-xl shadow-xl overflow-hidden text-gray-800"
                    >
                        <button
                            @click="
                                openImage(
                                    'Peta Administrasi Desa Petir',
                                    'images/peta administasi.png',
                                )
                            "
                            class="block w-full text-left px-5 py-3 hover:bg-green-100"
                        >
                            🗺️ Peta Administrasi
                        </button>

                        <button
                            @click="
                                openImage(
                                    'Peta Pemukiman Dukuh Ploso',
                                    'images/Peta Pemukiman Dukuh Ploso.png',
                                )
                            "
                            class="block w-full text-left px-5 py-3 hover:bg-green-100"
                        >
                            🏘️ Peta Pemukiman
                        </button>

                        <button
                            @click="
                                openImage(
                                    'Struktur Organisasi Dukuh Ploso',
                                    'images/Struktur Organisasi Dukuh Ploso.png',
                                )
                            "
                            class="block w-full text-left px-5 py-3 hover:bg-green-100"
                        >
                            👥 Struktur Organisasi
                        </button>
                    </div>
                </div>

                <a
                    href="/#sejarah"
                    @click="showMobileMenu = false"
                    class="hover:text-yellow-300"
                >
                    Sejarah
                </a>

                <a
                    href="/#potensi"
                    @click="showMobileMenu = false"
                    class="hover:text-yellow-300"
                >
                    Potensi
                </a>

                <a
                    href="/#galeri"
                    @click="showMobileMenu = false"
                    class="hover:text-yellow-300"
                >
                    Galeri
                </a>
            </div>

            <!-- HAMBURGER -->

            <button
                @click="showMobileMenu = !showMobileMenu"
                class="md:hidden p-2 rounded-lg hover:bg-green-600 transition flex-shrink-0"
            >
                <Menu v-if="!showMobileMenu" :size="28" class="text-white" />

                <X v-else :size="30" />
            </button>
        </div>
    </nav>
    <transition name="fade">
        <div
            v-if="showMobileMenu"
            class="md:hidden w-full bg-green-700 border-t border-green-600 shadow-lg text-white"
        >
            <a
                href="/"
                @click="showMobileMenu = false"
                class="block px-4 md:px-6 py-3 md:py-4 border-b border-green-600 hover:bg-green-600 transition"
            >
                Beranda
            </a>

            <!-- Dropdown -->

            <button
                @click="showProfileMenu = !showProfileMenu"
                class="w-full flex items-center justify-between px-4 py-3 border-b border-green-600 hover:bg-green-600 transition"
            >
                <span>Profil Desa</span>

                <ChevronDown
                    :size="18"
                    :class="[
                        'transition-transform duration-200',
                        showProfileMenu ? 'rotate-180' : '',
                    ]"
                />
            </button>

            <!-- Mobile Menu -->
            <div
                v-if="showProfileMenu"
                class="bg-white text-gray-800 rounded-b-lg overflow-hidden"
            >
                <button
                    @click="
                        openImage(
                            'Peta Administrasi Desa Petir',
                            'images/peta administasi.png',
                        )
                    "
                    class="block w-full text-left px-6 py-3 hover:bg-green-100 transition"
                >
                    🗺️ Peta Administrasi
                </button>

                <button
                    @click="
                        openImage(
                            'Peta Pemukiman Dukuh Ploso',
                            'images/Peta Pemukiman Dukuh Ploso.png',
                        )
                    "
                    class="block w-full text-left px-6 py-3 hover:bg-green-100 transition"
                >
                    🏘️ Peta Pemukiman
                </button>

                <button
                    @click="
                        openImage(
                            'Struktur Organisasi Dukuh Ploso',
                            'images/Struktur Organisasi Dukuh Ploso.png',
                        )
                    "
                    class="block w-full text-left px-6 py-3 hover:bg-green-100 transition"
                >
                    👥 Struktur Organisasi
                </button>
            </div>

            <a
                href="/#sejarah"
                class="block px-4 md:px-6 py-3 md:py-4 border-b border-green-600"
            >
                Sejarah
            </a>

            <a
                href="/#potensi"
                class="block px-4 md:px-6 py-3 md:py-4 border-b border-green-600"
            >
                Potensi
            </a>

            <a
                href="/#galeri"
                class="block px-4 md:px-6 py-3 md:py-4 border-b border-green-600"
            >
                Galeri
            </a>
        </div>
    </transition>

    <!-- Modal  Peta Administrasi, Peta Pemukiman, & Struktur Organisasi -->
    <div
        v-if="showModal"
        class="fixed inset-0 bg-black/70 flex justify-center items-center z-50"
    >
        <div
            class="bg-white rounded-2xl p-6 max-w-5xl w-[90%] overflow-auto relative shadow-2xl"
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

            <div class="overflow-auto max-h-[80vh]">
                <img
                    :src="modalImage"
                    :alt="modalTitle"
                    class="min-w-full object-contain rounded-lg cursor-zoom-in"
                />
            </div>
        </div>
    </div>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: all 0.25s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
    transform: translateY(-10px);
}
img {
    touch-action: pinch-zoom;
}
</style>

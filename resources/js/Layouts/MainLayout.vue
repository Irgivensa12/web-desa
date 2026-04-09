<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-50">
        <!-- Navbar -->
        <Navbar />

        <!-- Content -->
        <main class="flex-1">
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>

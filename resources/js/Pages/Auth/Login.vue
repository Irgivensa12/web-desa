<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};

const showPassword = ref(false);
</script>

<template>
    <GuestLayout>
        <Head title="Login Admin" />

        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold text-green-700">
                Login Admin Dukuh Ploso
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Silakan masuk untuk mengelola website dukuh
            </p>
        </div>

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <!-- Email -->
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500"
                    v-model="form.email"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <div class="relative mt-1">
                    <TextInput
                        id="password"
                        :type="showPassword ? 'text' : 'password'"
                        class="block w-full rounded-lg border-gray-300 pr-12 focus:border-green-500 focus:ring-green-500"
                        v-model="form.password"
                        required
                    />

                    <!-- Tombol Mata -->
                    <button
                        type="button"
                        @click="showPassword = !showPassword"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 hover:text-green-600"
                    >
                        <span v-if="showPassword"> 🙈 </span>

                        <span v-else> 👁️ </span>
                    </button>
                </div>

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <!-- Button -->
            <button
                type="submit"
                :disabled="form.processing"
                class="mt-6 w-full rounded-lg bg-green-600 py-3 font-semibold text-white hover:bg-green-700 transition"
            >
                Masuk
            </button>
        </form>
    </GuestLayout>
</template>

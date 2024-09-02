<script setup>

</script>

<template>
    <div v-if="success" class="mx-2 text-white px-6 py-4 border-0 rounded relative mb-4 bg-emerald-500">
        <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"></i>
        </span>
        <span class="inline-block align-middle mr-8">
        <h2>Berhasil: {{success}}</h2>
        </span>
        <div class="w-full block align-middle mr-8">
        <div>
            <div v-if="success > 0">
            </div>
        </div>
        </div>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
    <div v-if="failures" class="mx-2 text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
        <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"></i>
        </span>
        <span class="inline-block align-middle mr-8">
        <h2>Gagal : {{ failures.message }}</h2>
        </span>
        <div class="w-full block align-middle mr-8">
        <div>
            <div v-if="failures.errors">
            <ul>
                <li v-for="failure in failures.errors" :key="failure.id">{{ failure }}</li>
            </ul>
            </div>
        </div>
        </div>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
</template>

<script setup>
 import { defineProps, ref } from 'vue';
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';
  
  const props = defineProps({
        failures:Object,
        success:Object
  });
  
</script>
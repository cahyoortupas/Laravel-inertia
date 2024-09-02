<template>
    <Link
        :href="href"
        class="bg-yellow-400 text-zinc-800 active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" 
    >
        <slot />
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps(['href', 'active']);
</script>
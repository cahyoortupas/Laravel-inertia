<template>
  <div v-if="links.length > 3">
    <div class="flex flex-wrap mb-10 bg-zinc-300 p-5">
      <template v-for="(link, key) in links">
        <div v-if="link.url === null" :key="key"
             class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-zinc-400 bg-zinc-300 border border-zinc-400 rounded" v-html="link.label" />
        <Link v-else :key="key + 1"
              class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border border-zinc-400 rounded hover:bg-zinc-400 focus:border-indigo-500 focus:text-indigo-500"
              :class="{ 'bg-red-900 text-white': link.active }" :href="`${link.url}${filter}`" v-html="link.label" />
      </template>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  links: Array,
  filter:String
});
</script>

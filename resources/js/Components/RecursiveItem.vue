<template>
    <ul>
      <li v-for="kegiatan in kegiatan" :key="kegiatan.id">
        {{ kegiatan.code_path }} {{ kegiatan.nama }}
        <RecursiveItem v-if="kegiatan.children" :kegiatan="kegiatan.children" />
      </li>
    </ul>
  </template>
  
<script setup>
const props = defineProps({
  kegiatan: {
      type: Array,
      required: true
  }
})
  </script>
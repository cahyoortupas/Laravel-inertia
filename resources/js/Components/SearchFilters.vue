<template>
    <div class="flex flex-wrap bg-red-800">
      <div class="w-1/4 px-4 pt-2">
        <div class="relative w-full mb-3">
          <select v-model="filters.kecamatan" @change="getkelurahan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            <option value="">-- Pilih kecamatan --</option>
            <option v-for="item in datakecamatan" :value="item.kode" :key="item.kode">{{ item.nama }}</option>
          </select>
        </div>
      </div>
      <div class="w-1/4 px-4 pt-2">
        <div class="relative w-full mb-3">
          <select v-model="filters.kelurahan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            <option value="">-- Pilih kelurahan --</option>
            <option v-for="item in datakelurahan" :value="item.kode_full" :key="item.kode_full">{{ item.nama }}</option>
          </select>
        </div>
      </div>
      <div class="w-1/4 px-4 pt-2">
        <div class="relative w-full mb-3">
          <input type="text" v-model="filters.nomor" placeholder="Nomor" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
        </div>
      </div>
      <div class="w-1/4 px-4 pt-2">
        <div class="relative w-full mb-3 mt-2">
          <ActionButton @click="applyFilters">Cari</ActionButton>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, watch } from 'vue';
  import { router } from '@inertiajs/vue3';
  import ActionButton from '@/Components/ActionButton.vue';
  
  const props = defineProps({
    datakecamatan: Object,
    datakelurahan: Object,
    filters: Object
  });
  
  const emit = defineEmits(['update-kelurahan', 'apply-filters']);
  
  function getkelurahan(){
    axios.get('/get_kelurahan?kode=' + props.filters.kecamatan)
      .then(response => {
        emit('update-kelurahan', response.data.data);
      })
      .catch(error => {
        console.error('Error fetching kelurahan:', error);
      });
  }
  
  function applyFilters() {
    emit('apply-filters');
  }
  </script>
  
<template>
    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Mata Anggaran </label>
          <select v-model='form.mak' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            <option v-for="item in mak" :value="item.id">{{ item.kode }} - {{ item.nama }}</option>
          </select>
        </div>
      </div>
    </div>
    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"> Item </h6>
    <div class="flex flex-wrap">
      <div class="w-full lg:w-3/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Deskripsi </label>
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Qty </label>
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Satuan </label>
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Harga </label>
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Total </label>
        </div>
      </div>
      <div class="w-full lg:w-1/12 px-4">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"></label>
        </div>
      </div>
    </div> 
    <div v-for="(inputData, index) in form.inputForms" :key="index" class="flex flex-wrap">
      <div class="w-full lg:w-3/12 px-1">
        <div class="relative w-full mb-3">
          <input type="text" v-model="inputData.item" placeholder='deskripsi item' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-1">
        <div class="relative w-full mb-3">
          <input type="number" v-model="inputData.qty" @keyup="calculate(index)" placeholder='kuantiti' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-1">
        <div class="relative w-full mb-3">
          <input type="text" v-model="inputData.satuan" placeholder='satuan' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-1">
        <div class="relative w-full mb-3">
          <input type="number" v-model="inputData.harga" @keyup="calculate(index)" placeholder='harga' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        </div>
      </div>
      <div class="w-full lg:w-2/12 px-1">
        <div class="relative w-full mb-3">
          <div class='text-right py-3'>{{inputData.total}}</div>
        </div>
      </div>
      <div class="w-full lg:w-1/12 px-2">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> </label>
          <a href="javascript:void(0)" v-if="index === 0" @click="addInputForm" class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">+</a>
          <a href="javascript:void(0)" v-else @click="deleteInputForm(index)" class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">x</a>
        </div>
      </div>
    </div>  
  </template>
  
<script setup>
import { useForm } from '@inertiajs/vue3';
const props = defineProps({
  mak: Object
});

const form = useForm({
    inputForms:[{ item: '', qty: '', satuan: '', harga: '', total: '' }],
    mak:1,
   
});

function addInputForm() {
  form.inputForms.push({ item: '', qty: '', satuan: '', harga: '', total: '' });
}

function deleteInputForm(index) {
  form.inputForms.splice(index, 1);
}

function calculate(index) {
  const inputData = form.inputForms[index];
  inputData.total = (inputData.qty * inputData.harga).toLocaleString('en-US', { maximumFractionDigits: 0 });
}
  </script>
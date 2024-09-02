<template>
  <Head :title='title' />

  <AuthenticatedLayout>
    <div class="w-full px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-6 py-6 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-2 max-w-full flex-grow flex-1">
              <h6 class="text-blueGray-700 text-xl font-bold">Form {{ title }}</h6>
            </div>
            <ActionButton :href=url> Kembali </ActionButton>
          </div>
          <hr class="mt-6 border-b-1 border-blueGray-300">
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-gray-50">
          <form @submit.prevent="submit">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"> Input user baru </h6>
            <div class="flex flex-wrap">
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Nama </label>
                  <input v-model='form.nama' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nama user">
                </div>
              </div>
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Email </label>
                  <input type='email' v-model='form.email' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="email (untuk login) ">
                </div>
              </div>
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Password </label>
                  <input type='password' v-model='form.password' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="password user">
                </div>
              </div>
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Konfirmasi Password </label>
                  <input type='password' v-model='form.password_confirmation' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="konfirmasi password ">
                </div>
              </div>
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> Level User </label>
                  <select v-model='form.level' class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    <option value="" disabled>-- Level User --</option>
                    <option value="1">Admin</option>
                    <option value="2">Loket</option>
                    <option value="3">User Android saja</option>
                  </select>
                </div>
              </div>
            </div>
            <hr class="mt-6 border-b-1 border-blueGray-300">
            <div class="flex flex-wrap">
              <div class="w-full px-4">
                <div class="relative w-full mb-3">
                  <Alert :failures='failures' :success='success' />
                </div>
              </div>
              <div class="w-full px-4 py-4">
                <div class="relative w-full mb-3">
                  <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Simpan
                  </PrimaryButton>
                </div>
              </div>
            </div> 
          </form>
        </div>
      </div>
    </div>

  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ActionButton from "@/Components/ActionButton.vue";
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';
import { router } from '@inertiajs/vue3';
import Alert from '@/Components/Alert.vue';

const kelurahan = ref(0);
const success = ref(null);
const submitButton = ref(false);
const successData = ref(null);
const failures = ref(null);

const props = defineProps({
  title: String,
  url:String,
})

const form = useForm({
    nama:'',
    level:2,
    email:'',
    password:'',
    password_confirmation:''
});


function submit() {
  axios.post('/users', form, {
      headers:{
          'Content-type': 'multipart/form-data'
      }
  })
  .then(response => {
    success.value = response.data.message;
    setTimeout(() => {
      router.get(`/users/`)
    }, 2000); 
  })
  .catch(error => {
    success.value = null;
    successData.value = null;
    if (error.response) {
        failures.value = error.response.data;
    } else if (error.request) {
        failures.value = 'No response received from the server';
    } else {
        failures.value = 'Error occurred while sending the request';
    }
  });
}

</script>

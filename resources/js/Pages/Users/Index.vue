<template>
  <Head :title="title" />

  <AuthenticatedLayout>
    <div class="w-full px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-2 py-3 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-slate-700">
                Manajemen {{ title }} 
              </h3>
            </div>
          </div>
        </div>
        

        <div class="text-white px-6 py-4 border-0 relative bg-red-900">
          <span class="inline-block align-middle">
              Tabel {{ title }}
          </span>
          <span class="float-right">
              <ActionButton :href="url+'/add'"> Tambah data</ActionButton>
          </span>
        </div>

        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-6 text-center align-middle bg-zinc-800 border border-solid py-3 text-xs uppercase whitespace-nowrap font-bold text-left text-white border-slate-100">
                  No
                </th>
                <th class="px-6 text-center align-middle bg-zinc-800 border border-solid py-3 text-xs uppercase whitespace-nowrap font-bold text-left text-white border-slate-100">
                  Nama
                </th>
                <th class="px-6 text-center align-middle bg-zinc-800 border border-solid py-3 text-xs uppercase whitespace-nowrap font-bold text-left text-white border-slate-100">
                  Email
                </th>
                <th class="px-6 text-center align-middle bg-zinc-800 border border-solid py-3 text-xs uppercase whitespace-nowrap font-bold text-white border-slate-100">
                  Jabatan
                </th>
                <th class="px-6 text-center align-middle bg-zinc-800 border border-solid py-3 text-xs uppercase whitespace-nowrap font-bold text-white border-slate-100">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(user,index) in users.data" :key="user.id">
                <td class="px-6 border align-middle text-xs whitespace-nowrap p-4 text-center">
                  {{ calculateRowNumber(index) }}
                </td>
                <td class="px-6 border align-middle text-xs whitespace-nowrap p-4">
                  {{ user.name }}
                </td>
                <td class="px-6 border align-middle text-xs whitespace-nowrap p-4">
                  {{ user.email }}
                </td>
                <td class="px-6 border align-middle text-xs whitespace-nowrap p-4">
                  <span v-if='user.level ==1'>Admin</span>
                  <span v-else-if='user.level ==2'>Loket</span>
                  <span v-else-if='user.level ==3'>User Android</span>
                </td>
                <td class="text-center border px-6 align-middle text-xs whitespace-nowrap p-4">
                  <ActionButtonCollection :href=url :target=user.id :action=action />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <pagination :links="users.links" />
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ActionButton from '@/Components/ActionButton.vue';
import ActionButtonCollection from '@/Components/ActionButtonCollection.vue';
import Pagination from '@/Components/Pagination.vue'
import { Head } from '@inertiajs/vue3';

const props = defineProps({
  title:String,
  users: Object,
  url:String
})

const action =['edit','delete'];

function calculateRowNumber(index) {
  return (props.users.current_page - 1) * props.users.per_page + index + 1;
}
</script>

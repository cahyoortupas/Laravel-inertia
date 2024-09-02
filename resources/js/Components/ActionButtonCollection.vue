<template>
    <div class="flex flex-row justify-center">
      <div v-for="option in action">
          <Link v-if="option === 'edit'"
          :href="url+'/'+option+'/'+id" title="edit"
          class="text-sm py-2 px-4 font-normal bg-blue-300 text-white"
        >
          <i class="fas fa-edit text-sm"></i>
          </Link>
          <Link v-else-if="option === 'edit_detail'"
          :href="url+'/edit/'+berkas+'/'+id+'/'+url+'/'+param" title="edit"
          class="text-sm py-2 px-4 font-normal bg-blue-300 text-white"
        >
          <i class="fas fa-edit text-sm"></i>
          </Link>
          <Link v-else-if="option === 'delete'"
          @click="deleteItem(id,berkas)" title="hapus item"
          class="text-sm py-2 px-4 font-normal bg-red-500 text-white"
        >
          <i class="fas fa-trash text-sm"></i>
          </Link>
          <Link v-else-if="option === 'delete_original'"
          @click="deleted(id)" title="hapus berkas"
          class="text-sm py-2 px-4 font-normal bg-red-500 text-white"
        >
          <i class="fas fa-trash text-sm"></i>
          </Link>
          <Link v-else-if="option === 'pulihkan'"
          @click="pulihkanItem(id,berkas)" title="ajukan kembali"
          class="text-sm py-2 px-4 font-normal bg-blue-500 text-white"
        >
          <i class="fas fa-paper-plane text-sm"></i>
          </Link>
          <Link v-else
          :href="'/'+url+'/'+option+'/'+berkas+'/'+id+'/'+url+'/'+param" :title="option"
          class="text-sm py-2 px-4 font-normal bg-red-800 text-white"
        >
          <i class="fas fa-file text-sm"></i>
          </Link>
      </div>
    </div>
  </template>
  <script>
  import { Link } from '@inertiajs/vue3';

  export default {
    props: {
        target: String,
        action:Array,
        href:String,
        berkas:String,
        param:String
      },
    data() {
      return {
        id:this.target,
        action:this.action,
        url:this.href,
        berkas:this.berkas,
        param:this.param
      };
    },
    methods:{
      async deleteItem(id,berkas) {
        if (confirm('Apakah Anda yakin ingin menghapus berkas ini?')) {
          try {
            await axios.delete(`${this.$props.href}/${berkas}/${id}`).then(response => {
                this.success = 'Berkas berhasil dihapus';
                setTimeout(() => {
                  this.$inertia.visit(`${this.$props.href}`)
              }, 2000); 
            });
            
          } catch (error) {
            console.error('Terjadi kesalahan saat menghapus berkas:', error);
          }
        }
      },
      async pulihkanItem(id,berkas) {
        if (confirm('Apakah Anda yakin ingin mengajukan kembali berkas ini?')) {
          try {
            await axios.post(`/${this.$props.href}/pulihkan/${berkas}/${id}`).then(response => {
                this.success = 'Item berhasil dipulihkan';
                setTimeout(() => {
                  this.$inertia.visit(`/${this.$props.href}/pending`)
              }, 2000); 
            });
            
          } catch (error) {
            console.error('Terjadi kesalahan saat menghapus item:', error);
          }
        }
      },
      async deleted(id) {
        if (confirm('Apakah Anda yakin ingin menghapus berkas ini?')) {
          try {
            await axios.delete(`${this.$props.href}/${id}`).then(response => {
                this.success = 'Berkas berhasil dihapus';
                setTimeout(() => {
                  this.$inertia.visit(`${this.$props.href}`)
              }, 2000); 
            });
            
          } catch (error) {
            console.error('Terjadi kesalahan saat menghapus berkas:', error);
          }
        }
      },
    },
    components: {
      Link
    },
  };
  </script>
  
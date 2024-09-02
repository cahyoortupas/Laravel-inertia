<template>
  <div>
    <a
      class="text-blueGray-500 py-1 px-3"
      href="#pablo"
      ref="btnDropdownRef"
      v-on:click="toggleDropdown($event)"
    >
      <i class="fas fa-ellipsis-v"></i>
    </a>
    <div
      ref="popoverDropdownRef"
      class="bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
      v-bind:class="{
        hidden: !dropdownPopoverShow,
        block: dropdownPopoverShow,
      }"
    >
    
    <div v-for="option in action">
      <Link :href="url+'/'+option+'/'+id"
        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
        {{ option }}
      </Link>
    </div>
      
    </div>
  </div>
</template>
<script>
import { createPopper } from "@popperjs/core";
import { Link } from '@inertiajs/vue3';

export default {
  components:{
    Link,
  },
  props: {
      target: String,
      action:Array,
      url:String
    },
  data() {
    return {
      dropdownPopoverShow: false,
      id:this.target,
      action:this.action,
      url:this.url
    };
  },
  methods: {
    toggleDropdown: function (event) {
      event.preventDefault();
      if (this.dropdownPopoverShow) {
        this.dropdownPopoverShow = false;
      } else {
        this.dropdownPopoverShow = true;
        createPopper(this.$refs.btnDropdownRef, this.$refs.popoverDropdownRef, {
          placement: "bottom-start",
        });
      }
    }
  },
};
</script>

<template>
  <Head title="Log in" />

  <GuestLayout>
    <div class="px-4 w-full lg:w-4/12">
      <div class="flex relative flex-col mb-20 w-full min-w-0 break-words rounded-lg border-0 shadow-lg bg-slate-300">
        <div class="px-6 py-6 mb-0 rounded-t">
          <div class="mb-3 text-center">
            <img class='w-6/12 center m-auto mb-3 align-middle' src="">
            <h1 class="text-xl font-bold text-red-900">
              SAMSUELBTUEL.com 
            </h1>
          </div>

          <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
          </div>
          <hr class="mt-2 border-b-1 border-slate-300" />
        </div>
        <div class="flex-auto px-4 py-5 pt-0 lg:px-10">

          <form @submit.prevent="submit">
            <div class="relative mb-3 w-full">
              <InputLabel for="email" value="Email" />
              <TextInput id="email" type="email" v-model="form.email" required autofocus autocomplete="username" />
              <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="relative mb-3 w-full">
              <InputLabel for="password" value="Password" />
              <TextInput id="password" type="password" v-model="form.password" required autocomplete="current-password" />
              <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div>
              <label class="inline-flex items-center cursor-pointer">
                <Checkbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm font-semibold text-slate-600">
                  Remember me
                </span>
              </label>
            </div>

            <div class="mt-6 text-center">
              <PrimaryButton class="w-full" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
              </PrimaryButton>

              <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-gray-600 underline hover:text-gray-900">
                Forgot your password?
              </Link>
            </div>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: '',
  password: '',
  remember: false
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>

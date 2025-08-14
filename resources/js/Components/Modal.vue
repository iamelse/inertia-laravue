<template>
  <div v-if="show" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
      <slot />
      <div class="mt-4 flex justify-end gap-2">
        <Button variant="secondary" @click="$emit('close')">Batal</Button>
        <Button variant="primary" @click="$emit('confirm')">Simpan</Button>
      </div>
    </div>
  </div>
</template>

<script setup>
import Button from './Button.vue'

defineProps({
  show: Boolean
})
</script>
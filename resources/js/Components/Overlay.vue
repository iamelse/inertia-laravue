<template>
  <div
    v-if="show"
    class="fixed w-full h-screen z-50 bg-gray-900/50 lg:hidden"
    @click="$emit('close')"
  ></div>
</template>

<script setup>
defineProps({
  show: {
    type: Boolean,
    default: false
  }
})

defineEmits(['close'])
</script>
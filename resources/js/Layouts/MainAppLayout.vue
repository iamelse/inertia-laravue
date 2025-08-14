<template>
  <div
    class="flex h-screen overflow-hidden"
    :class="{ 'dark bg-gray-900': darkMode }"
  >
    <!-- ===== Sidebar Start ===== -->
    <Sidebar
      :sidebarToggle="sidebarToggle"
      @toggleSidebar="sidebarToggle = !sidebarToggle"
    />
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

      <!-- ===== Header Start ===== -->
      <Header
        :darkMode="darkMode"
        @toggleDark="toggleDarkMode"
      />
      <!-- ===== Header End ===== -->

      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="mx-auto max-w-full md:p-6 p-4">
          <!-- Slot untuk konten tambahan -->
          <slot />
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
</template>

<script setup>
import { ref, watch } from 'vue'
import Sidebar from '@/Components/Sidebar.vue'
import Header from '@/Components/Header.vue'

const darkMode = ref(JSON.parse(localStorage.getItem('darkMode')) || false)
const sidebarToggle = ref(false)

watch(darkMode, (val) => {
  localStorage.setItem('darkMode', JSON.stringify(val))
})

function toggleDarkMode() {
  darkMode.value = !darkMode.value
}
</script>

<template>
  <AppLayout>
    <div class="grid grid-cols-12 gap-4 md:gap-6">
      <div class="col-span-12 space-y-6 xl:col-span-7">
        <MetricGroup01 />
        <Chart01 />
      </div>
      <div class="col-span-12 xl:col-span-5">
        <Chart02 />
      </div>

      <div class="col-span-12">
        <Chart03 />
      </div>

      <div class="col-span-12 xl:col-span-5">
        <Map01 />
      </div>

      <div class="col-span-12 xl:col-span-7">
        <Table01 />
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/MainAppLayout.vue'
</script>
<template>
  <MainAppLayout>
    <!-- Judul Halaman -->
    <h1 class="text-lg font-semibold text-gray-900 mb-4">Daftar Produk</h1>

    <!-- Card Table -->
    <div class="bg-white rounded-xl shadow overflow-hidden">
      <!-- Header Card -->
      <div class="flex items-center justify-between px-4 py-3 border-b bg-gray-50">
        <h2 class="text-gray-800 font-medium">Produk</h2>
        <button
          @click="showModal = true"
          class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300"
        >
          <span class="text-lg font-bold">+</span>
          Tambah Produk
        </button>
      </div>

      <!-- Table -->
      <table class="w-full text-sm text-left">
        <thead>
          <tr class="bg-gray-100 text-gray-700 text-xs uppercase">
            <th class="px-4 py-3">Nama Produk</th>
            <th class="px-4 py-3">Varian</th>
            <th class="px-4 py-3">Tipe Produk</th>
            <th class="px-4 py-3">Kategori</th>
            <th class="px-4 py-3">Harga Jual</th>
            <th class="px-4 py-3">Waktu Dibuat</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3"></th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <tr v-for="(item, index) in produk" :key="index" class="hover:bg-gray-50">
            <td class="px-4 py-3 flex items-center gap-3">
              <img :src="item.image" alt="" class="w-10 h-10 rounded-lg object-cover" />
              <div>
                <div class="font-medium text-gray-900">{{ item.nama }}</div>
                <div class="text-xs text-gray-500">{{ item.kode }}</div>
              </div>
            </td>
            <td class="px-4 py-3">{{ item.varian }}</td>
            <td class="px-4 py-3">{{ item.tipe }}</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-gray-100 text-gray-700 rounded-full">
                {{ item.kategori }}
              </span>
            </td>
            <td class="px-4 py-3">{{ item.harga }}</td>
            <td class="px-4 py-3">{{ item.tanggal }}</td>
            <td class="px-4 py-3">
              <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" v-model="item.status" class="sr-only peer" />
                <div
                  class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:bg-blue-600 relative transition-colors"
                >
                  <span
                    class="absolute left-0.5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-4"
                  ></span>
                </div>
              </label>
            </td>
            <td class="px-4 py-3 text-right">
              <div class="relative" @click.stop>
                <button
                  @click="toggleMenu(index)"
                  class="p-2 rounded hover:bg-gray-200"
                >
                  ⋮
                </button>
                <div
                  v-if="menuIndex === index"
                  class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg z-10"
                >
                  <button
                    class="w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-gray-50"
                    @click="hapusProduk(item)"
                  >
                    🗑 Hapus Produk
                  </button>
                  <button
                    class="w-full px-4 py-2 text-left text-sm text-blue-600 hover:bg-gray-50"
                    @click="editProduk(item)"
                  >
                    ✏️ Edit Produk
                  </button>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal -->
    <Modal :show="showModal" @close="showModal = false" @confirm="simpanProduk">
      <h2 class="text-lg font-semibold">Tambah Produk</h2>
      <Input label="Nama Produk" v-model="form.nama" />
    </Modal>
  </MainAppLayout>
</template>

<script setup>
import { ref, reactive } from 'vue'
import MainAppLayout from '@/Layouts/MainAppLayout.vue'
import Modal from '@/Components/Modal.vue'
import Input from '@/Components/Input.vue'

const showModal = ref(false)
const menuIndex = ref(null)
const form = reactive({ nama: '' })

const produk = ref([
  {
    nama: 'Sound Effect',
    kode: 'SND-EFCT',
    varian: 1,
    tipe: 'Digital',
    kategori: 'Audio',
    harga: 'Rp 18,000 - Rp 32,000',
    tanggal: '27 Mei 2025',
    status: true,
    image: 'https://dummyimage.com/300'
  },
  {
    nama: 'Durian Super',
    kode: 'DNR-SPR97',
    varian: 1,
    tipe: 'Fisik',
    kategori: 'Buah Berduri',
    harga: 'Rp 18,000 - Rp 32,000',
    tanggal: '27 Mei 2025',
    status: true,
    image: 'https://dummyimage.com/300'
  }
])

function simpanProduk() {
  produk.value.push({
    ...form,
    kode: 'NEW',
    varian: 1,
    tipe: 'Fisik',
    kategori: 'Lainnya',
    harga: 'Rp 0',
    tanggal: new Date().toLocaleDateString(),
    status: true,
    image: '/img/default.png'
  })
  showModal.value = false
}

function editProduk(item) {
  console.log('Edit', item)
}

function hapusProduk(item) {
  produk.value = produk.value.filter(p => p !== item)
}

function toggleMenu(index) {
  menuIndex.value = menuIndex.value === index ? null : index
}
</script>

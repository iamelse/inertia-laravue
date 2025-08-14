<template>
  <aside
    :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
  >
    <!-- SIDEBAR HEADER -->
    <div
      :class="sidebarToggle ? 'justify-center' : 'justify-between'"
      class="flex items-center gap-2 pt-8 pb-7 sidebar-header"
    >
      <a href="index.html">
        <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
          <img class="dark:hidden" src="https://dummyimage.com/35" alt="Logo" />
          <img
            class="hidden dark:block"
            src="./images/logo/logo-dark.svg"
            alt="Logo"
          />
        </span>

        <img
          class="logo-icon"
          :class="sidebarToggle ? 'lg:block' : 'hidden'"
          src="./images/logo/logo-icon.svg"
          alt="Logo"
        />
      </a>

      <!-- Hamburger Toggle BTN -->
      <button
        :class="sidebarToggle
          ? 'lg:bg-transparent dark:lg:bg-transparent bg-gray-100 dark:bg-gray-800'
          : ''"
        class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg border-gray-200 text-gray-500 lg:h-11 lg:w-11 lg:border dark:border-gray-800 dark:text-gray-400"
        @click.stop="toggleSidebar"
      >
        <!-- Hamburger Icon -->
        <svg
          class="hidden fill-current lg:block"
          width="16"
          height="12"
          viewBox="0 0 16 12"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M0.583252 1C0.583252 0.585788 0.919038 0.25 1.33325 0.25H14.6666C15.0808 0.25 15.4166 0.585786 15.4166 1C15.4166 1.41421 15.0808 1.75 14.6666 1.75L1.33325 1.75C0.919038 1.75 0.583252 1.41422 0.583252 1ZM0.583252 11C0.583252 10.5858 0.919038 10.25 1.33325 10.25L14.6666 10.25C15.0808 10.25 15.4166 10.5858 15.4166 11C15.4166 11.4142 15.0808 11.75 14.6666 11.75L1.33325 11.75C0.919038 11.75 0.583252 11.4142 0.583252 11ZM1.33325 5.25C0.919038 5.25 0.583252 5.58579 0.583252 6C0.583252 6.41421 0.919038 6.75 1.33325 6.75L7.99992 6.75C8.41413 6.75 8.74992 6.41421 8.74992 6C8.74992 5.58579 8.41413 5.25 7.99992 5.25L1.33325 5.25Z"
          />
        </svg>

        <!-- Mobile Hamburger -->
        <svg
          :class="sidebarToggle ? 'hidden' : 'block lg:hidden'"
          class="fill-current lg:hidden"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M3.25 6C3.25 5.58579 3.58579 5.25 4 5.25L20 5.25C20.4142 5.25 20.75 5.58579 20.75 6C20.75 6.41421 20.4142 6.75 20 6.75L4 6.75C3.58579 6.75 3.25 6.41422 3.25 6ZM3.25 18C3.25 17.5858 3.58579 17.25 4 17.25L20 17.25C20.4142 17.25 20.75 17.5858 20.75 18C20.75 18.4142 20.4142 18.75 20 18.75L4 18.75C3.58579 18.75 3.25 18.4142 3.25 18ZM4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75L12 12.75C12.4142 12.75 12.75 12.4142 12.75 12C12.75 11.5858 12.4142 11.25 12 11.25L4 11.25Z"
          />
        </svg>

        <!-- Cross Icon -->
        <svg
          :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
          class="fill-current"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M6.21967 7.28131C5.92678 6.98841 5.92678 6.51354 6.21967 6.22065C6.51256 5.92775 6.98744 5.92775 7.28033 6.22065L11.999 10.9393L16.7176 6.22078C17.0105 5.92789 17.4854 5.92788 17.7782 6.22078C18.0711 6.51367 18.0711 6.98855 17.7782 7.28144L13.0597 12L17.7782 16.7186C18.0711 17.0115 18.0711 17.4863 17.7782 17.7792C17.4854 18.0721 17.0105 18.0721 16.7176 17.7792L11.999 13.0607L7.28033 17.7794C6.98744 18.0722 6.51256 18.0722 6.21967 17.7794C5.92678 17.4865 5.92678 17.0116 6.21967 16.7187L10.9384 12L6.21967 7.28131Z"
          />
        </svg>
      </button>
    </div>
    <!-- END SIDEBAR HEADER -->

    <div
      class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
    >
      <nav>
        <div>
          <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
            <span
              class="menu-group-title"
              :class="sidebarToggle ? 'lg:hidden' : ''"
            >
              MENU
            </span>

            <svg
              :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
              class="mx-auto fill-current menu-group-icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
              />
            </svg>
          </h3>

          <ul class="flex flex-col gap-4 mb-6">
            <!-- Menu Item Dashboard -->
            <li>
              <a
                href="#"
                @click.prevent="toggleMenu('Dashboard')"
                class="menu-item group"
                :class="isMenuActive('Dashboard')
                  ? 'menu-item-active'
                  : 'menu-item-inactive'"
              >
                <svg
                  :class="isMenuActive('Dashboard')
                    ? 'menu-item-icon-active'
                    : 'menu-item-icon-inactive'"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                  />
                </svg>

                <span
                  class="menu-item-text"
                  :class="sidebarToggle ? 'lg:hidden' : ''"
                >
                  Dashboard
                </span>

                <svg
                  class="menu-item-arrow"
                  :class="[
                    selected === 'Dashboard'
                      ? 'menu-item-arrow-active'
                      : 'menu-item-arrow-inactive',
                    sidebarToggle ? 'lg:hidden' : ''
                  ]"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>

              <!-- Dropdown Menu -->
              <div
                class="overflow-hidden transform translate"
                :class="selected === 'Dashboard' ? 'block' : 'hidden'"
              >
                <ul
                  :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                  class="flex flex-col gap-1 mt-2 pl-9 menu-dropdown"
                >
                  <li>
                    <a
                      href="calendar.html"
                      @click="selectMenu('Calendar')"
                      class="menu-item group"
                      :class="selected === 'Calendar' && page === 'calendar'
                        ? 'menu-item-active'
                        : 'menu-item-inactive'"
                    >
                      <svg
                        :class="selected === 'Calendar' && page === 'calendar'
                          ? 'menu-item-icon-active'
                          : 'menu-item-icon-inactive'"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8 2C8.41421 2 8.75 2.33579 8.75 2.75V3.75H15.25V2.75C15.25 2.33579 15.5858 2 16 2C16.4142 2 16.75 2.33579 16.75 2.75V3.75H18.5C19.7426 3.75 20.75 4.75736 20.75 6V9V19C20.75 20.2426 19.7426 21.25 18.5 21.25H5.5C4.25736 21.25 3.25 20.2426 3.25 19V9V6C3.25 4.75736 4.25736 3.75 5.5 3.75H7.25V2.75C7.25 2.33579 7.58579 2 8 2ZM8 5.25H5.5C5.08579 5.25 4.75 5.58579 4.75 6V8.25H19.25V6C19.25 5.58579 18.9142 5.25 18.5 5.25H16H8ZM19.25 9.75H4.75V19C4.75 19.4142 5.08579 19.75 5.5 19.75H18.5C18.9142 19.75 19.25 19.4142 19.25 19V9.75Z"
                        />
                      </svg>

                      <span
                        class="menu-item-text"
                        :class="sidebarToggle ? 'lg:hidden' : ''"
                      >
                        Calendar
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Dropdown Menu -->
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </aside>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const props = defineProps({
  sidebarToggle: { type: Boolean, default: false },
  page: { type: String, default: '' }
})

const selected = ref('Dashboard')

onMounted(() => {
  const savedSelection = localStorage.getItem('sidebar-selected')
  if (savedSelection) {
    selected.value = savedSelection
  }
})

const toggleMenu = (menuName) => {
  selected.value = selected.value === menuName ? '' : menuName
  localStorage.setItem('sidebar-selected', selected.value)
}

const selectMenu = (menuName) => {
  selected.value = menuName
  localStorage.setItem('sidebar-selected', selected.value)
}

const isMenuActive = (menuName) => {
  if (menuName === 'Dashboard') {
    return (
      selected.value === 'Dashboard' ||
      ['ecommerce', 'analytics', 'marketing', 'crm', 'stocks'].includes(
        props.page
      )
    )
  }
  return selected.value === menuName
}
</script>

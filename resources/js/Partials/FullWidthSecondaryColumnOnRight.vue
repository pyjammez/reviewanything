<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-white">
    <body class="h-full overflow-hidden">
    ```
  -->
  <div class="h-full flex">
    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:flex-shrink-0">
      <div class="flex flex-col w-32">
        <CategoryNav />
      </div>
    </div>
    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
      <div class="flex-1 relative z-0 flex overflow-hidden">
        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
          <!-- Start main area-->
          <div class="absolute inset-0 py-6">
            <div class="rounded-lg bg-white overflow-hidden shadow">
            list  
            </div>
          </div>
          <!-- End main area -->
        </main>
        <aside class="hidden relative xl:flex xl:flex-col flex-shrink-0 w-96  overflow-y-auto">
          <!-- Start secondary column (hidden on smaller screens) -->
          <div class="absolute inset-0 py-6 sm:px-6 lg:px-8">
            <div class="h-full rounded-lg bg-white overflow-hidden shadow">ads and top 10 lists</div>
          </div>
          <!-- End secondary column -->
        </aside>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'
import CategoryNav from '@/Partials/CategoryNav.vue'
import { Dialog, DialogOverlay, TransitionChild, TransitionRoot } from '@headlessui/vue'
import {
  CalendarIcon,
  HomeIcon,
  MapIcon,
  MenuIcon,
  SearchCircleIcon,
  SpeakerphoneIcon,
  UserGroupIcon,
  XIcon,
} from '@heroicons/vue/outline'


export default {
  components: {
    Dialog,
    DialogOverlay,
    TransitionChild,
    TransitionRoot,
    MenuIcon,
    XIcon,
    CategoryNav,
  },
  setup() {
    const sidebarOpen = ref(false)

    return {
      sidebarOpen,
      CategoryNav,
    }
  },
}
</script>
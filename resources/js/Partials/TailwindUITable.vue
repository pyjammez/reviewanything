<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="flex flex-col mt-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th v-for="header in headers" :key="header.label" scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ header.label }}
                </th>
                <th scope="col" class="relative">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <slot name="data"></slot>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <Pagination class="mt-6" :links="links" />
</template>

<script>
import Pagination from '@/Shared/Pagination'
import { defineComponent } from 'vue'

export default defineComponent({
  components: {
      Pagination,
  },
  props: {
      headers: Array,
      links: Array,
  },
});
</script>
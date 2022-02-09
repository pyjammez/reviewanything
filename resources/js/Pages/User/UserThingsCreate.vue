<template>
  <app-layout title="Create Thing">  
    <template #header>
      <Breadcrumbs name="UserThingsCreate" />
    </template>

    <OneColumn>
      <!-- The filters and buttons may be unique for each page -->
      <FormPageHeader>
          <template #title>Create a Thing</template>
          
          <p class="mt-1 text-sm text-gray-500">
            A sentence or two of documentation will look nicer here. Perhaps some pointers to consider, or links to find help.
          </p>
      </FormPageHeader>
      
      <div class="my-6 p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <form class="">
          <div class="space-y-8 divide-y divide-gray-200">
            <div>
              <div class="sm:col-span-6 max-w-sm">
                <label for="name" class="block text-sm font-medium text-gray-700">
                  Name
                </label>
                <div class="mt-1">
                  <input type="text" name="name" id="name" autocomplete="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                </div>
              </div>

              <div class="sm:col-span-6 mt-5">
                <label for="thing" class="block text-sm font-medium text-gray-700">
                  What category is it?
                </label>
                <div class="mt-1">
                  <fieldset>
                    <legend class="sr-only">Category</legend>
                    <div class="space-y-1">
                      <div v-for="plan in categories" :key="plan.name" class="relative flex items-start">
                        <div class="flex items-center h-5">
                          <input :id="plan.name" :aria-describedby="`${plan.id}-description`" name="plan" type="radio" :checked="plan.id === 'small'" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                        </div>
                        <div class="ml-3 text-sm">
                          <label :for="plan.name" class="font-medium text-gray-700 mr-2">{{ plan.name }}</label>
                          <span :id="`${plan.name}-description`" class="text-gray-500">{{ plan.description }}</span>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>

              <div class="sm:col-span-6 mt-5">
                <label for="about" class="block text-sm font-medium text-gray-700">
                  Write a description about this thing...
                </label>
                <div class="mt-1">
                  <textarea id="about" name="about" rows="13" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md" />
                </div>
                <p class="mt-2 text-sm text-gray-500"></p>
              </div>

              <div class="sm:col-span-6 mt-5">
                <label for="cover-photo" class="block text-sm font-medium text-gray-700">
                  Photos
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload files</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="pt-5">
            <div class="flex justify-end">
              <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cancel
              </button>
              <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </OneColumn>
  </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import OneColumn from '@/Layouts/OneColumn.vue'
import Breadcrumbs from '@/Partials/Breadcrumbs.vue'
import FormPageHeader from '@/Partials/FormPageHeader.vue'

const categories = [
  { name: 'Products', description: "Things you can buy. Coke, a chihauhau, a LazyBoy chair."},
  { name: 'Places', description: "Locations that aren't represented by a business. Parks, beaches, cities, states, countries."},
  { name: 'People', description: "People or characters who have or still do exist. Donald Trump, Mickey mouse."},
  { name: 'Websites', description: 'Websites like facebook, google, usatoday.'},
  { name: 'Businesses', description: 'Businesses you can shop at. Subway, Walmart, Johns Pizza'},
  { name: 'Objects', description: "Objects that you can't buy or usually don't. A sequoia tree, pet rock, emerald stone."},
  { name: 'Concepts', description: "Concepts and theories. Catholicism, Big bang theory, math."}
];

console.log(categories);

export default defineComponent({
  components: {
    AppLayout,
    OneColumn,
    Breadcrumbs,
    FormPageHeader,
    Link,
  },
  data() {
    return {
      categories: categories,
    }
  },
});
</script>


<template>
  <app-layout title="Create Organization">
    <template #header>
      <Breadcrumbs name="AdminOrganizationsCreate" />
    </template>

    <OneColumn>
      <!-- The filters and buttons may be unique for each page -->
      <FormPageHeader>
        <template #title>Create an Organization</template>
        
        <p class="mt-1 text-sm text-gray-500">
          A sentence or two of documentation will look nicer here.
          Perhaps some pointers to consider, or links to find help.
        </p>
      </FormPageHeader>
<!---
            <form @submit.prevent="store">
              <div class="flex flex-wrap -mb-8 -mr-6 p-8">
                <text-input v-model="form.name" :error="form.errors.name" class="pb-8 pr-6 w-full lg:w-1/2" label="Name" />
                <text-input v-model="form.email" :error="form.errors.email" class="pb-8 pr-6 w-full lg:w-1/2" label="Email" />
                <text-input v-model="form.phone" :error="form.errors.phone" class="pb-8 pr-6 w-full lg:w-1/2" label="Phone" />
                <text-input v-model="form.address" :error="form.errors.address" class="pb-8 pr-6 w-full lg:w-1/2" label="Address" />
                <text-input v-model="form.city" :error="form.errors.city" class="pb-8 pr-6 w-full lg:w-1/2" label="City" />
                <text-input v-model="form.region" :error="form.errors.region" class="pb-8 pr-6 w-full lg:w-1/2" label="Province/State" />
                <select-input v-model="form.country" :error="form.errors.country" class="pb-8 pr-6 w-full lg:w-1/2" label="Country">
                  <option :value="null" />
                  <option value="CA">Canada</option>
                  <option value="US">United States</option>
                </select-input>
                <text-input v-model="form.postal_code" :error="form.errors.postal_code" class="pb-8 pr-6 w-full lg:w-1/2" label="Postal code" />
              </div>
              <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
                <loading-button :loading="form.processing" class="btn-indigo" type="submit">Create Organization</loading-button>
              </div>
            </form>
-->
            <div class="my-6 mt-6 p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <form class="">
                <div class="space-y-8 divide-y divide-gray-200">
                  <div>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                          Name of Organization
                        </label>
                        <div class="mt-1">
                          <input type="text" name="name" id="name" autocomplete="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-6">
                        <label for="photo" class="block text-sm font-medium text-gray-700">
                          Logo
                        </label>
                        <div class="mt-1 flex items-center">
                          <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                              <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                          </span>
                          <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Change
                          </button>
                        </div>
                      </div>

                      <div class="sm:col-span-6">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700">
                          Cover photo
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                              <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                              <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
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

                  <div class="pt-8">
                    <div>
                      <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Contact Information
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">
                        Some more documentation here like what we use the address for. I don't know yet.
                      </p>
                    </div>
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">


                      <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium text-gray-700">
                          Phone
                        </label>
                        <div class="mt-1">
                          <input type="text" name="phone" id="phone" autocomplete="phone" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                          Email address
                        </label>
                        <div class="mt-1">
                          <input id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">
                          Country
                        </label>
                        <div class="mt-1">
                          <select id="country" name="country" autocomplete="country-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-6">
                        <label for="street-address" class="block text-sm font-medium text-gray-700">
                          Street address
                        </label>
                        <div class="mt-1">
                          <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label for="city" class="block text-sm font-medium text-gray-700">
                          City
                        </label>
                        <div class="mt-1">
                          <input type="text" name="city" id="city" autocomplete="address-level2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">
                          State / Province
                        </label>
                        <div class="mt-1">
                          <input type="text" name="region" id="region" autocomplete="address-level1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium text-gray-700">
                          ZIP / Postal code
                        </label>
                        <div class="mt-1">
                          <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
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
import TextInput from '@/Shared/TextInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'

export default defineComponent({
  components: {
      AppLayout,
      OneColumn,
      Breadcrumbs,
      FormPageHeader,
      Link,
      LoadingButton,
      SelectInput,
      TextInput,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        name: null,
        email: null,
        phone: null,
        address: null,
        city: null,
        region: null,
        country: null,
        postal_code: null,
      }),
    }
  },
  methods: {
    store() {
      this.form.post('/admin/organizations')
    },
  },
});
</script>
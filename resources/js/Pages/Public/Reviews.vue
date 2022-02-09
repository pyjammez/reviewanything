<template>
    <app-layout title="Home">
        <three-column>
          <template #left>
            <CategoryNav />
          </template>

          <template #middle>
            <main class="lg:col-span-9 xl:col-span-6">
              <FilterItems />
              <WithSecondaryNavAndTertiaryColumn />
            </main>
          </template>

          <template #right>
            <div class="mb-4">
              <TrendingThings />
            </div>

            <TopReviewers />
          </template>
      </three-column>                      
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import WithSecondaryNavAndTertiaryColumn from '@/Partials/WithSecondaryNavAndTertiaryColumn.vue'
import ThreeColumn from '@/Layouts/ThreeColumn.vue'
import CategoryNav from '@/Partials/CategoryNav.vue'
import TrendingThings from '@/Partials/TrendingThings.vue'
import TopReviewers from '@/Partials/TopReviewers.vue'
import FilterItems from '@/Partials/FilterItems.vue'

export default {
    components: {
        AppLayout,
        WithSecondaryNavAndTertiaryColumn,
        ThreeColumn,
        CategoryNav,
        TrendingThings,
        TopReviewers,
        FilterItems,
    },
    setup() {
        return {
          
        }
    },
}
</script>
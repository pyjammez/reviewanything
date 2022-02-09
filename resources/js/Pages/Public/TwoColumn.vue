<template>
    <app-layout title="Two Column">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Two Column Layout
            </h2>
        </template>

        <two-column>
            <template #left>
                <div class="bg-white p-6 shadow rounded-lg">
                    Left Column
                </div>
            </template>

            <template #right>
                <div class="bg-white p-6 shadow rounded-lg">
                    Right Column
                </div>
            </template>
        </two-column>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import TwoColumn from '@/Layouts/TwoColumn.vue'

    export default defineComponent({
        components: {
            AppLayout,
            TwoColumn,
        },
    })
</script>

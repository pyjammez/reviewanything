<template>
    <app-layout title="Three Column">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Three Column Layout
            </h2>
        </template>

        <three-column>
            <template #left>
                Left Column
            </template>

            <template #middle>
                <div class="h-full bg-white p-6 shadow rounded-lg">
                    Middle Column
                </div>
            </template>

            <template #right>
                <div class="h-full bg-white p-6 shadow rounded-lg">
                    Right Column
                </div>
            </template>
        </three-column>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import ThreeColumn from '@/Layouts/ThreeColumn.vue'

    export default defineComponent({
        components: {
            AppLayout,
            ThreeColumn,
        },
    })
</script>

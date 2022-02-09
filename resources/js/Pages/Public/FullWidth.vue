<template>
    <app-layout title="Full Width">  
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Full Width Layout
            </h2>
        </template>

        <FullWidth>
            <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Content goes here...
            </div>
        </FullWidth>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import FullWidth from '@/Layouts/FullWidth.vue'

    export default defineComponent({
        components: {
            AppLayout,
            FullWidth,
        },
    })
</script>

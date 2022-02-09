<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reviews
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <FullWidthSecondaryColumnOnRight />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import FullWidthSecondaryColumnOnRight from '@/Partials/FullWidthSecondaryColumnOnRight.vue'
    

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            FullWidthSecondaryColumnOnRight,
        },
    })
</script>

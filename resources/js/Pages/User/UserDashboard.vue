<template>
    <app-layout title="User Dashboard">
        <template #header>
            <Breadcrumbs name="UserDashboard" />
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <SimpleStats />

                <div class="my-6 p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    graphics, stats, news, info for users
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import SimpleStats from '@/Partials/SimpleStats.vue'
    import Breadcrumbs from '@/Partials/Breadcrumbs.vue'

    export default defineComponent({
        components: {
            AppLayout,
            SimpleStats,
            Breadcrumbs,
        },
    })
</script>

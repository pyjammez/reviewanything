<template> 
    <main class="max-w-3xl py-6 mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                <slot name="left"></slot>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <slot name="right"></slot>
            </div>
        </div>
    </main>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
        },

        components: {
        },

        data() {
            return {
            }
        },

        methods: {
        }
    })
</script>
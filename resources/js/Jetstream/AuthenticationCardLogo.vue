<template>
    <div class="shrink-0 flex items-left">
        <Link :href="route('home')">
            <small>REVIEW</small><br /><strong>ANYTHING</strong>
        </Link>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>

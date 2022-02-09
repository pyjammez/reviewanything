<template>  
    <div class="flex-1 flex flex-col min-h-0 ">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        <nav class="flex-1" aria-label="Sidebar">
                <div class="pr-2 space-y-1">
                    <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? ' text-gray-900 font-bold' : 'text-gray-600 hover:text-gray-900', 'group flex items-center pr-2 py-2 text-sm font-medium rounded-md']">
                        {{ item.name }}
                    </a>
                </div>
            </nav>
        </div>
    </div>
</template>


<script>
    const navigation = [
        { name: 'All', href: '#', current: true },
        { name: 'Products', href: '#', current: false },
        { name: 'Places', href: '#', current: false },
        { name: 'People', href: '#', current: false },
        { name: 'Websites', href: '#', current: false },
        { name: 'Businesses', href: '#', current: false },
        { name: 'Objects', href: '#', current: false },
        { name: 'Concepts', href: '#', current: false },
    ]

    export default {
        setup() {
            return {
                navigation,
            }
        },
    }
</script>
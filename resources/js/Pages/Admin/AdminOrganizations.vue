<template>
    <app-layout title="Admin Organizations">
        <template #header>
            <Breadcrumbs name="AdminOrganizations" />
        </template>

        <OneColumn>
            <!-- The filters and buttons may be unique for each page -->
            <ListPageHeader>
                <search-filter v-model="form.search" class="mr-4 w-full max-w-md" @reset="reset">
                    <!-- no categories added yet. not sure if we need them -->
                </search-filter>

                <Link :href="route('admin.organizations.create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <span>Create</span> <span class="hidden md:inline">Organization</span>
                </Link>
            </ListPageHeader>

            <TailwindUITable :headers="headers" :links="data.links">
                <template #data>
                    <!-- The table list layout stays the same throughout the site but the rows differ -->
                    <tr v-for="row in data.data" :key="row.id">
                        <td>
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 mr-4" v-if="row.image">
                                    <img class="h-10 w-10" :src="row.image" alt="" />
                                </div>
                                <Link :href="route('admin.organizations.show', [row.id])">{{ row.name }}</Link>
                            </div>
                        </td>
                        <td><Link :href="route('admin.users.edit', [row.id])">{{ row.user.first_name }} {{ row.user.last_name }}</Link></td>
                        <td>{{ row.created_at }}</td>
                        <td><Link :href="route('admin.organizations.edit', [row.id])">Edit</Link></td>
                    </tr>
                    
                    <!-- We may customize this by adding a guide on how to write a review when there are no reviews. -->
                    <tr v-if="data.data.length === 0">
                        <td class="border-t px-6 py-4" colspan="4">No results.</td>
                    </tr>
                </template>
            </TailwindUITable>
        </OneColumn>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import OneColumn from '@/Layouts/OneColumn.vue'
    import Breadcrumbs from '@/Partials/Breadcrumbs.vue'
    import ListPageHeader from '@/Partials/ListPageHeader.vue'
    import TailwindUITable from '@/Partials/TailwindUITable.vue'
    import TableThumbnail from '@/Partials/TableThumbnail.vue'
    import SearchFilter from '@/Shared/SearchFilter'
    import Pagination from '@/Shared/Pagination'
    import pickBy from 'lodash/pickBy'
    import throttle from 'lodash/throttle'
    import mapValues from 'lodash/mapValues'

    export default defineComponent({
        components: {
            AppLayout,
            OneColumn,
            Breadcrumbs,
            ListPageHeader,
            SearchFilter,
            TailwindUITable,
            TableThumbnail,
            Link,
            Pagination,
        },
        props: {
            data: Object,
            filters: Object,
        },
        data() {
            window.data = this.data;
            return {
                headers: [
                    {label: "Name"},
                    {label: "Creator"},
                    {label: "Created"},
                ],
                form: {
                    search: this.filters.search,
                },
            }
        },
        watch: {
            form: {
                deep: true,
                handler: throttle(function () {
                    this.$inertia.get('/admin/organizations', pickBy(this.form), { preserveState: true })
                }, 150),
            },
        },
        methods: {
            reset() {
                this.form = mapValues(this.form, () => null)
            },
        },
    })
</script>
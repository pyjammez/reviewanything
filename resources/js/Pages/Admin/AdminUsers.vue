<template>
    <app-layout title="Admin Users">
        <template #header>
            <Breadcrumbs name="AdminUsers" />
        </template>

        <OneColumn>
            <!-- The filters and buttons may be unique for each page -->
            <ListPageHeader>
                <search-filter v-model="form.search" class="mr-4 w-full max-w-md" @reset="reset">
                    <label class="block text-gray-700">Role:</label>
                    <select v-model="form.role" class="form-select mt-1 w-full">
                        <option :value="null" />
                        <option value="user">User</option>
                        <option value="owner">Owner</option>
                    </select>

                    <!-- this isn't working for some reason -->
                    <label class="block mt-4 text-gray-700">Trashed:</label>
                    <select v-model="form.trashed" class="form-select mt-1 w-full">
                        <option :value="null" />
                        <option value="with">With Trashed</option>
                        <option value="only">Only Trashed</option>
                    </select>
                </search-filter>
            </ListPageHeader>

            <TailwindUITable :headers="headers" :links="data.links">
                <template #data>
                    <!-- The table list layout stays the same throughout the site but the rows differ -->
                    <tr v-for="row in data.data" :key="row.id">
                        <td>
                            <div class="flex items-center">
                                <TableThumbnail :src="row.profile_photo_url" />
                                <Link :href="route('admin.users.show', [row.id])">{{ row.first_name }} {{ row.last_name }}</Link>
                            </div>
                        </td>
                        <td>{{ row.email }}</td>
                        <td>{{ row.owner }}</td>
                        <td>{{ row.created_at }}</td>
                        <td><Link :href="route('admin.users.edit', [row.id])">Edit</Link></td>
                    </tr>
                    
                    <!-- We may customize this by adding a guide on how to create a thing when there are no things. -->
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
                    {label: "Email"},
                    {label: "Role"},
                    {label: "Created"},
                ],
                form: {
                    search: this.filters.search,
                    role: this.filters.role,
                    trashed: this.filters.trashed,
                },
            }
        },
        watch: {
            form: {
                deep: true,
                handler: throttle(function () {
                    this.$inertia.get('/admin/users', pickBy(this.form), { preserveState: true })
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
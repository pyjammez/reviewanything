<template>
  <nav class="flex" aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
      <li>
        <div>
          <Link :href="route('home')" class="text-gray-400 hover:text-gray-500">
            <HomeIcon class="flex-shrink-0 h-5 w-5" aria-hidden="true" />
            <span class="sr-only">Home</span>
          </Link>
        </div>
      </li>
      <li v-for="page in path" :key="page.name">
        <div class="flex items-center">
          <ChevronRightIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
          <Link :href="page.href" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" :aria-current="page.current ? 'page' : undefined">
            {{ page.name }}
          </Link>
        </div>
      </li>
    </ol>
  </nav>
</template>

<script>
import { ChevronRightIcon, HomeIcon } from '@heroicons/vue/solid'
import { Head, Link } from '@inertiajs/inertia-vue3'

const AdminRoute = { name: 'Admin', href: '/admin/dashboard', current: false };
const UserRoute = { name: 'User', href: '/user/dashboard', current: false };
const ProfileRoute = { name: 'Profile', href: '/profile', current: false };

const breadcrumbs = {
  AdminDashboard: [AdminRoute, { name: 'Dashboard', href: '/admin/dashboard', current: true }],
  AdminReviews: [AdminRoute, { name: 'Reviews', href: '/admin/reviews', current: true }],
  AdminThings: [AdminRoute, { name: 'Things', href: '/admin/things', current: true }],
  AdminOrganizations: [AdminRoute, { name: 'Organizations', href: '/admin/organizations', current: true }],
  AdminOrganizationsCreate: [AdminRoute, { name: 'Organizations', href: '/admin/organizations', current: false}, { name: 'Create', href: '/admin/organizations/create', current: true }],
  AdminUsers: [AdminRoute, { name: 'Users', href: '/admin/users', current: true }],
  UserDashboard: [UserRoute, { name: "Dashboard", href: "/user/dashboard", current: true }],
  UserThings: [UserRoute, { name: "Things", href: "/user/things", current: true }],
  UserThingsCreate: [UserRoute, { name: "Things", href: "/user/things", current: false }, { name: 'Create', href: '/user/things/create', current: true}],
  UserReviews: [UserRoute, { name: "Reviews", href: "/user/reviews", current: true }],
  UserReviewsCreate: [UserRoute, { name: "Reviews", href: "/user/reviews", current: false }, { name: 'Create', href: '/user/reviews/create', current: true}],
  UserProfile: [UserRoute, { name: "Profile", href: "/user/profile", current: true }],
};

export default {
  props: {
      name: String,
  },
  components: {
    ChevronRightIcon,
    HomeIcon,
    Link,
  },
  data() {
      return {
          path: breadcrumbs[this.name]
      }
  },
}
</script>
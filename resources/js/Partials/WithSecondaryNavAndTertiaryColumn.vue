<template>

          <div class="mt-4">
            <ul role="list" class="space-y-4">
              <li v-for="question in questions" :key="question.id" class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                <article :aria-labelledby="'question-title-' + question.id">
                  <div>
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" :src="question.author.imageUrl" alt="" />
                      </div>
                      <div class="min-w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900">
                          <a :href="question.author.href" class="hover:underline">{{ question.author.name }}</a>
                        </p>
                        <p class="text-sm text-gray-500">
                          <a :href="question.href" class="hover:underline">
                            <time :datetime="question.datetime">{{ question.date }}</time>
                          </a>
                        </p>
                      </div>
                      <div class="flex-shrink-0 self-center flex">
                        <Menu as="div" class="relative inline-block text-left">
                          <div>
                            <MenuButton class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600">
                              <span class="sr-only">Open options</span>
                              <DotsVerticalIcon class="h-5 w-5" aria-hidden="true" />
                            </MenuButton>
                          </div>

                          <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                            <MenuItems class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                              <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'flex px-4 py-2 text-sm']">
                                    <StarIcon class="mr-3 h-5 w-5 text-gray-400" aria-hidden="true" />
                                    <span>Add to favorites</span>
                                  </a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'flex px-4 py-2 text-sm']">
                                    <CodeIcon class="mr-3 h-5 w-5 text-gray-400" aria-hidden="true" />
                                    <span>Embed</span>
                                  </a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'flex px-4 py-2 text-sm']">
                                    <FlagIcon class="mr-3 h-5 w-5 text-gray-400" aria-hidden="true" />
                                    <span>Report content</span>
                                  </a>
                                </MenuItem>
                              </div>
                            </MenuItems>
                          </transition>
                        </Menu>
                      </div>
                    </div>
                    <h2 :id="'question-title-' + question.id" class="mt-4 text-base font-medium text-gray-900">
                      {{ question.title }}
                    </h2>
                  </div>
                  <div class="mt-2 text-sm text-gray-700 space-y-4" v-html="question.body" />
                  <div class="mt-6 flex justify-between space-x-8">
                    <div class="flex space-x-6">
                      <span class="inline-flex items-center text-sm">
                        <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                          <ThumbUpIcon class="h-5 w-5" aria-hidden="true" />
                          <span class="font-medium text-gray-900">{{ question.likes }}</span>
                          <span class="sr-only">likes</span>
                        </button>
                      </span>
                      <span class="inline-flex items-center text-sm">
                        <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                          <ChatAltIcon class="h-5 w-5" aria-hidden="true" />
                          <span class="font-medium text-gray-900">{{ question.replies }}</span>
                          <span class="sr-only">replies</span>
                        </button>
                      </span>
                      <span class="inline-flex items-center text-sm">
                        <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                          <EyeIcon class="h-5 w-5" aria-hidden="true" />
                          <span class="font-medium text-gray-900">{{ question.views }}</span>
                          <span class="sr-only">views</span>
                        </button>
                      </span>
                    </div>
                    <div class="flex text-sm">
                      <span class="inline-flex items-center text-sm">
                        <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                          <ShareIcon class="h-5 w-5" aria-hidden="true" />
                          <span class="font-medium text-gray-900">Share</span>
                        </button>
                      </span>
                    </div>
                  </div>
                </article>
              </li>
            </ul>
          </div>
</template>

<script>
import { Menu, MenuButton, MenuItem, MenuItems, Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'


import {
  ChatAltIcon,
  CodeIcon,
  DotsVerticalIcon,
  EyeIcon,
  FlagIcon,
  PlusSmIcon,
  SearchIcon,
  ShareIcon,
  StarIcon,
  ThumbUpIcon,
} from '@heroicons/vue/solid'

import { BellIcon, FireIcon, HomeIcon, MenuIcon, TrendingUpIcon, UserGroupIcon, XIcon } from '@heroicons/vue/outline'

const questions = [
  {
    id: '81614',
    likes: '29',
    replies: '11',
    views: '2.7k',
    author: {
      name: 'Dries Vincent',
      imageUrl:
        'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      href: '#',
    },
    date: 'December 9 at 11:43 AM',
    datetime: '2020-12-09T11:43:00',
    href: '#',
    title: 'What would you have done differently if you ran Jurassic Park?',
    body: `
      <p>Jurassic Park was an incredible idea and a magnificent feat of engineering, but poor protocols and a disregard for human safety killed what could have otherwise been one of the best businesses of our generation.</p>
      <p>Ultimately, I think that if you wanted to run the park successfully and keep visitors safe, the most important thing to prioritize would be&hellip;</p>
    `,
  },
  {
    id: '81614',
    likes: '29',
    replies: '11',
    views: '2.7k',
    author: {
      name: 'Dries Vincent',
      imageUrl:
        'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      href: '#',
    },
    date: 'December 9 at 11:43 AM',
    datetime: '2020-12-09T11:43:00',
    href: '#',
    title: 'What would you have done differently if you ran Jurassic Park?',
    body: `
      <p>Jurassic Park was an incredible idea and a magnificent feat of engineering, but poor protocols and a disregard for human safety killed what could have otherwise been one of the best businesses of our generation.</p>
      <p>Ultimately, I think that if you wanted to run the park successfully and keep visitors safe, the most important thing to prioritize would be&hellip;</p>
    `,
  },
  // More questions...
];

export default {
  components: {
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    Popover,
    PopoverButton,
    PopoverPanel,
    BellIcon,
    ChatAltIcon,
    CodeIcon,
    DotsVerticalIcon,
    EyeIcon,
    FlagIcon,
    MenuIcon,
    PlusSmIcon,
    SearchIcon,
    ShareIcon,
    StarIcon,
    ThumbUpIcon,
    XIcon,
  },
  setup() {
    return {
      questions,
    }
  },
}
</script>
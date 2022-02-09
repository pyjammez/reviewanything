<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                About
            </h2>
        </template>

        <div class="py-6">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                  <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">About</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                  </div>
                  <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                      <li v-for="person in people" :key="person.name">
                        <div class="flex items-center space-x-4 lg:space-x-6">
                          <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" :src="person.imageUrl" alt="" />
                          <div class="font-medium text-lg leading-6 space-y-1">
                            <h3>{{ person.name }}</h3>
                            <p class="text-indigo-600">{{ person.role }}</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-6 bg-gray-50 pt-12 sm:pt-16 sm:rounded-lg">
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                  <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Trusted by developers from over 80 planets
                  </h2>
                  <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.
                  </p>
                </div>
              </div>
              <div class="mt-10 pb-12 bg-white sm:pb-16">
                <div class="relative">
                  <div class="absolute inset-0 h-1/2 bg-gray-50" />
                  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                      <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                            Pepperoni
                          </dt>
                          <dd class="order-1 text-5xl font-extrabold text-indigo-600">
                            100%
                          </dd>
                        </div>
                        <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                            Delivery
                          </dt>
                          <dd class="order-1 text-5xl font-extrabold text-indigo-600">
                            24/7
                          </dd>
                        </div>
                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                            Calories
                          </dt>
                          <dd class="order-1 text-5xl font-extrabold text-indigo-600">
                            100k
                          </dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="mt-6 bg-gray-50 sm:rounded-lg">
              <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
                    <title id="svg-workcation">Workcation</title>
                    <defs>
                      <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                      </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                  </svg>

                  <div class="relative">
                    <img class="mx-auto h-8" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600-mark-gray-800-and-indigo-600-text.svg" alt="Workcation" />
                    <blockquote class="mt-10">
                      <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                        <p>
                          &ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.&rdquo;
                        </p>
                      </div>
                      <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                          <div class="md:flex-shrink-0">
                            <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                          </div>
                          <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                            <div class="text-base font-medium text-gray-900">Judith Black</div>

                            <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M11 0h3L9 20H6l5-20z" />
                            </svg>

                            <div class="text-base font-medium text-gray-500">CEO, Workcation</div>
                          </div>
                        </div>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </section>
            </div>


            <div class="mt-6 sm:rounded-lg">
              <div class="bg-white">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                  <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div>
                      <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Used by the world's most average companies
                      </h2>
                      <p class="mt-3 max-w-3xl text-lg text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue.
                      </p>
                      <div class="mt-8 sm:flex">
                        <div class="rounded-md shadow">
                          <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Create Account
                          </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                          <a href="#" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                            Contact Us
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation" />
                      </div>
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage" />
                      </div>
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple" />
                      </div>
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel" />
                      </div>
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit" />
                      </div>
                      <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-6 p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-gray-900 text-center">
                  Frequently asked questions
                </h2>
                <div class="mt-12">
                  <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
                    <div v-for="item in faqs" :key="item.id">
                      <dt class="text-lg leading-6 font-medium text-gray-900">
                        {{ item.question }}
                      </dt>
                      <dd class="mt-2 text-base text-gray-500">
                        {{ item.answer }}
                      </dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    const people = [
      {
        name: 'Leslie Alexander',
        role: 'Co-Founder / CEO',
        imageUrl:
          'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Leslie Alexander',
        role: 'Co-Founder / CEO',
        imageUrl:
          'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Leslie Alexander',
        role: 'Co-Founder / CEO',
        imageUrl:
          'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Leslie Alexander',
        role: 'Co-Founder / CEO',
        imageUrl:
          'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      // More people...
    ]

    const faqs = [
      {
        id: 1,
        question: "What's the best thing about Switzerland?",
        answer:
          "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
      },
      {
        id: 2,
        question: 'How do you make holy water?',
        answer:
          'You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
      },
      {
        id: 3,
        question: 'Why do you never see elephants hiding in trees?',
        answer:
          "Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
      },
      {
        id: 4,
        question: 'What do you call someone with no body and no nose?',
        answer: 'Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
      },
      {
        id: 5,
        question: "Why can't you hear a pterodactyl go to the bathroom?",
        answer:
          'Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
      },
      {
        id: 6,
        question: 'Why did the invisible man turn down the job offer?',
        answer:
          "He couldn't see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
      },
    ]

    export default defineComponent({
        components: {
            AppLayout,
        },
        data() {
          return {
            people: people,
            faqs: faqs,
          }
        }
    })
</script>

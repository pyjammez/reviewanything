<template>
    <div class="flex-shrink-0 h-10 w-10 mr-4" v-if="src">
        <img class="h-10 w-10" :src="src" alt="" />
    </div>
</template>

<script>
export default {
  components: {
  },
  props: {
    src: String,
  },
}
</script>
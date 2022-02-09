<template>  
    <label class="block text-gray-700">Category:</label>
    
    <select class="form-select mt-1 w-full" :value="modelValue" @change="$emit('update:modelValue', $event.target.value)">
        <option :value="null"></option>
        <option value="product">Products</option>
        <option value="place">Places</option>
        <option value="person">People</option>
        <option value="website">Websites</option>
        <option value="business">Businesses</option>
        <option value="object">Objects</option>
        <option value="concept">Concepts</option>
    </select>
</template>

<script>
export default {
  components: {
  },
  props: {
    modelValue: String,
  },
  emits: ['update:modelValue', 'reset'],
}
</script>
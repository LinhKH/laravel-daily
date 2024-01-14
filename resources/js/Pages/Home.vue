<template>
    <!-- <Layout> -->
        Home
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
    <!-- </Layout> -->
</template>
<script>
    import Layout from '@/Components/Layout.vue';
    export default {
        layout: Layout
    }
</script>

<script setup>
// import Layout from '@/Components/Layout.vue';
import { ref } from 'vue';

const count = ref(0);
</script>
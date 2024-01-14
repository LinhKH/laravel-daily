<template>
    <Layout>
        Home
        <button @click="count++">+</button>
        {{ count }}
        <button @click="count--">-</button>
    </Layout>
</template>

<script setup>
import Layout from '@/Components/Layout.vue';
import { ref } from 'vue';

const count = ref(0);
</script>
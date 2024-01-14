<template>
    <Link preserve-scroll :href="href" :class="{ 'active': $page.component == component }">{{ name }}</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps(['href', 'component', 'name']);
</script>

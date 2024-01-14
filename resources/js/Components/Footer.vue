<template>
    <div style="margin-top: 1000px;">
        <Link href="/home" name="Home" component="Home"></Link>
        <Link href="/about" name="About" component="About"></Link>
    </div>
</template>

<script setup>
import Link from '@/Components/Link.vue';

</script>

<style>
    .active {
        text-decoration: underline;
        color: red;
    }
</style>
<template>
    <header>
        <span>My App</span>
        <button>Login</button>
    </header>
    <slot></slot>
    <Footer />
</template>
<script setup>
import Footer from '@/Components/Footer.vue';
</script>
<style>
    
</style>
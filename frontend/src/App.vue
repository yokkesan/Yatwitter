<template>
<router-view />
</template>

<script setup>
import { usePage } from '@inertiajs/inertia-vue3';

const page = usePage();
</script>

<style scoped>
.app-wrapper {
  display: flex;
}
</style>

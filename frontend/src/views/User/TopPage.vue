<template>
  <div class="user-layout">
    <SideNav />
    <main class="main-content">
      <img src="@/components/Icons/svg/TopLogo.svg" alt="YATwitter_Logo" class="toplogo" />
      <h1>YATwitter トップページ</h1>
      <p>一般ユーザー用のタイムラインです</p>
    </main>
  </div>
</template>

<script setup>
import SideNav from '@/components/Layout/UserLayout/SideNav.vue';
</script>

<style scoped>
.user-layout {
  display: flex;
}
.main-content {
  flex: 1;
  padding: 1rem;
}
</style>
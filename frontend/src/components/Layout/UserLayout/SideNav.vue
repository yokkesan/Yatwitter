<template>
  <nav class="user-sidenav">
    <ul>
      <li><a href="#">ホーム</a></li>
      <li><a href="#">プロフィール</a></li>
      <li><a href="#">設定</a></li>
    </ul>
  </nav>
</template>

<script setup>
// 必要があれば props や emits を追加
</script>

<style scoped>
.user-sidenav {
  width: 200px;
  background-color: #f4f4f4;
  padding: 1rem;
}
.user-sidenav ul {
  list-style: none;
  padding: 0;
}
.user-sidenav li {
  margin-bottom: 0.5rem;
}
.user-sidenav a {
  text-decoration: none;
  color: #333;
}
</style>
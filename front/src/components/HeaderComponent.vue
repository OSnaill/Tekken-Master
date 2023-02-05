<template>
  <header>
    <h1>Tekken <span>Academy</span></h1>
    <router-link to="/">Character List</router-link>
  </header>
</template>
<script>
export default {
  data() {},
};
</script>
<style lang="scss">
header {
  background-color: var(--night-blue);
  color: var(--sky-blue);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  h1 span {
    color: var(--crimson-red);
  }
  a {
    color: white;
    text-decoration: none;
  }
  a:hover {
    color: var(--crimson-red);
  }
}
</style>

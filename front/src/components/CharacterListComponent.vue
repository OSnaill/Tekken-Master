<template>
  <section>
    <button>
      <img src="./../assets/logo.png" alt="image personnage" />
      <h3>Vue Js</h3>
      <p>Javascript / Front</p>
      <br />
      <p>Intermediate</p>
    </button>
  </section>
</template>
<script>
export default {
  data() {},
};
</script>
<style lang="scss">
section {
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
  button {
    padding: 20px;
    background-color: var(--night-blue);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    img {
      max-width: 75px;
    }
  }
  button:hover {
    scale: 1.1;
    transition-duration: 0.1s;
  }
  p {
    color: var(--sky-blue);
  }
}
</style>

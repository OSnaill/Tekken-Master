<template>
  <HeaderComponent />
  <router-view />
</template>
<script>
import HeaderComponent from "./components/HeaderComponent";
export default {
  components: {
    HeaderComponent,
  },
};
</script>
<style>
@font-face {
  font-family: "Roboto";
  src: url(./fonts/Roboto-Regular.ttf);
}
@font-face {
  font-family: "Varela";
  src: url(./fonts/Varela.ttf);
}
:root {
  --night-blue: #0d1c30;
  --crimson-red: #dd1d5b;
  --sky-blue: #e8ffff;
}

h1 {
  font-family: "Roboto";
  font-size: 1.7em;
}
h2 {
  font-family: "Roboto";
  font-size: 1.4em;
  color: var(--crimson-red);
  font-weight: bold;
  padding: 20px;
}
h3 {
  font-family: "Roboto";
  font-size: 1.1em;
  color: #dd1d5b;
}
p,
a {
  font-family: "Varela";
}
a {
  color: var(--crimson-red);
}
</style>

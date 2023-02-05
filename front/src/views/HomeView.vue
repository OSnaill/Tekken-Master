<template>
  <main>
    <aside>
      <h2>Filters</h2>
      <section></section>
    </aside>
    <article>
      <div class="character-list-head">
        <h2>Character List</h2>
        <input type="text" placeholder="Search a Character" />
      </div>
      <CharacterListComponent />
    </article>
  </main>
</template>
<script>
import CharacterListComponent from "./../components/CharacterListComponent";
export default {
  components: {
    CharacterListComponent,
  },
};
</script>
<style lang="scss">
main {
  padding: 20px;
  margin: auto;
  width: 1300px;
  display: flex;
  aside {
    padding: 20px;
    width: 25%;
  }
  article {
    padding: 20px;
    width: 75%;
  }
  .character-list-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    input {
      height: 25px;
      width: 400px;
      padding: 5px;
    }
  }
}
</style>

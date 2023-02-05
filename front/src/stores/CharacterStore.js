import { defineStore } from "pinia";
import axios from "axios";
export const useCharactersStore = defineStore("characters", {
  state: () => ({
    characters: [],
  }),
  getters: {
    getCharacters() {
      return this.state.characters;
    },
  },
  actions: {
    async fetchCharacters() {
      try {
        const data = await axios.get("http://localhost:8000/api/characters");
        this.characters = data.data;
        console.log(this.characters);
      } catch (error) {
        alert(error);
        console.log(error);
      }
    },
  },
});

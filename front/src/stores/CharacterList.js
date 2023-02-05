import { defineStore } from "pinia";
import axios, { Axios } from "axios";
export const useCharacterList = defineStore('characters', {
  state: () => ({
    characters: [],
  }),
  getters: {
    getCharacters(){
        return state.characters
    }
  },
  actions: {
    async fetchCharacters() {
        try {
            const data = await axios.get("http://localhost:8000/api/characters")
        }
    }
  }
})
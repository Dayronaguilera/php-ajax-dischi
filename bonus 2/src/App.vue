<template>
  <div id="app">
    <Header />
    <Main @select="searchGenre" :inputSearch="inputSearch" :albums="filteredAlbums" /> <!--in questo casa mandiamo il nostro array nel main -->
    
  </div>
</template>

<script>
import axios from 'axios'; //importiamo axios per poter fare le chiamate API
import Header from '@/components/Header.vue'; //importiamo header
import Main from '@/components/Main.vue'; //importiamo main

export default {
  name: 'App',
  components: {
    Header,
    Main, 
  },
   data() {
    return { //mettiamo return cosi ci restituisce un array da poter richiamare altrove
      albums:[], //creiamo un array che si popolera con la nostra chiamata api
      inputSearch: ''
    }
  },
  created() { //facciamo la nostra chiamata Api
    axios.get('http://localhost/php-ajax-dischi/backend/api.php').then((result) => {
      this.albums = result.data.response //(element).data.(array che ci serve)
      this.searchGenre('')
    })
  },
  computed: {
    filteredAlbums() {

      // elements è una lista di elementi in cui deve cercare "search"
      function searchIn(search, elements) {
        let exists = false;
        elements.forEach((element) => {
          if(element.includes(search)) {
            exists = true;
          }
        });
        return exists;
      }
      if(this.inputSearch.length === 0) {
        return this.albums
      } 
      return this.albums.filter((element) => {

        return searchIn(this.inputSearch,[element.genre])

      })
    }  
  },
  methods: {
    searchGenre(selectString) {
      this.inputSearch = selectString
    }
    
  }
}
</script>

<style lang="scss">

</style>
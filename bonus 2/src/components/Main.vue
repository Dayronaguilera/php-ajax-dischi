<template>
    <div class="bg-container">
        <div class="container">
            <div class="input-group">
                <select v-model="selectString" class="form-select btn-outline-secondary" value="" aria-label="Example select with button addon">
                    <option selected>Seleziona il tuo genere</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                </select>
                <button @click="$emit('select', selectString)" class="btn btn-outline-secondary" type="button">Button</button>
            </div>
            <div class="row">
                <!-- richiamiamo il componets (card) importato precedentemente -->
                <!-- con un v-for andiamo a ciclare l'arry del quale siamo in ascolto -->
                <Card class="album-cont" v-for="(album,index) in albums" :key='index' 
                :poster='album.poster'
                :title='album.title'
                :author='album.author'
                :year='album.year'
                :inputSearch="inputSearch"
                />
                
                <!-- inseriamo tutti gli oggetti di cui abbiamo bisogno per il leyout -->
            </div>
        </div>
    </div>
     
</template>


<script>
import Card from '@/components/Card.vue'; //importiamo il nostro components (card) nel main 

export default {
    name: 'Main',
        data() {
            return {
                selectString: ''
            }
        },
    components: {
        Card
    },
    props:{ //ci mettiamo in ascolto di app.vue
        albums: Array, //e chiediamo di inviarci un array della chiamata API
        inputSearch: String
    }
}
</script>

<!-- defianiamo lo style valido solo per il main -->

<style lang="scss" scoped>
.bg-container{
    background: #1e2d3b;
    padding: 50px;
    .input-group{
        width: 30%;
        margin-left: 10px;
        select{
            background-color: transparent;
        }
    }
    
    .row{
        .album-cont{
            
            width: calc(100% / 5);
            padding: 20px;
           
        }
    }
}
    
</style>

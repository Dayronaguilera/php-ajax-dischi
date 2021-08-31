<template>
    <div class="card-container">
        <div class="contanier">
            <img :src="poster" :alt="`image of ${title}`" />
            <div class="title"><h5>{{title}}</h5></div>
            <span class="author">{{author}}</span>
            <span class="year">{{year}}</span>
        </div>
    </div>    
</template>


<script>
export default {
    name: 'Card',
    props:{ // ci mettiamo in ascolto e chiediamo di inviarci l'oggento con la proprieta
        poster: String,
        title: String,
        author: String,
        year: String,
    },
}
</script>

<style lang="scss" scoped>
    .card-container{
        text-align: center;
        color:white;
        .contanier{
            background: #2e3a46;
            padding: 20px;
            height: 100%;
            img{
                width: 100%;
            }
            .title{
                padding: 15px;
                line-height: 20px;
                h5{
                    font-size: 25px;
                    
                }
            }
            .author{
                color: #808080;
            }
            .year{
                color: #808080;
                display: block;
            }

        }
    }
    
</style>

<template>
     <div class="bg-container">
         <div class="img-container">
             <img src="../assets/spotify-logo.png" alt="Spotify logo">
         </div>
     </div>
</template>


<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
    .bg-container{
        background:#2e3a46 ;
        .img-container{
            width: 60px;
            padding: 10px 0;
            img{
                width: 100%;
            }
        }
    }
</style>

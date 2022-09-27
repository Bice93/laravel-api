<template>
  <main>
    <div class="container">
        <div class="row">
            <h1>Posts:</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
    </div>
  </main>
</template>

<script>
import PostCard from './PostCard.vue';
import axios from 'axios';
export default {

    components: {
        PostCard
    },

    data: function() {
        return{
            posts : [],
        }
    },

    methods: {
        getPosts(postPage = 1){
            axios.get('api/posts', {
                page: postPage,
            }).then((response) => {
                console.log(response.data.result);
                this.posts = response.data.result.data;
            }).catch((error) =>{
                console.error(error);
            })
        }
    },

    created(){
        this.getPosts();
    },
}
</script>

<style>

</style>
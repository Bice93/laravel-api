<template>
  <main>
    <div class="container">
        <div class="row">
            <h1>Lista dei post:</h1>
        </div>
        <div class="col-6 offset-md-3">
            <ul>
                <li v-for="post in posts" :key="post.id">
                    {{ post.title }}
                </li>
            </ul>
        </div>
    </div>
  </main>
</template>

<script>
import axios from 'axios';
export default {

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
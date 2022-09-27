<template>
  <div class="col mb-4">
    <div class="card p-3">
      <img :src="post.post_image" class="card-img-top" :alt="post.title" />
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">
          Written by: {{ post.user.name }} | {{ post.post_date }}
        </h6>
        <p class="card-text">
          {{ post.post_content }}
        </p>
      </div>
      <div class="card-footer text-muted">
        <span v-for="tag in post.tags" :key="tag.id"> #{{ tag.name }} </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["post"],
};
</script>

<style>
</style>
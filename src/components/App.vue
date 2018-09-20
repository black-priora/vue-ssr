<template>
  <div id="app">
    app
    <router-view></router-view>
    <router-link :to="{ name: 'about' }">About</router-link>
    <router-link :to="{ name: 'contact' }">Contact</router-link>
  </div>
</template>
<script>
  export default {
  }
</script>

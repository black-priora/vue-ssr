<template>
  <div id="app">
    <div v-for='l in list' v-bind:key='l.id'>
      <div @click='click'>{{ l.name }}</div>
      <div>{{ l.notice }}</div>
    </div>
    <div @click='click'>@@</div>
    <router-view></router-view>
    <router-link :to="{ name: 'about' }">About</router-link>
    <router-link :to="{ name: 'contact' }">Contact</router-link>
  </div>
</template>
<script>
  export default {
    // props: ['list'],
    //
    data: () => ({
      list: []
    }),

    methods: {
      click() {
        alert(1)
      }
    },

    created() {
      try {
        var XMLHttpRequest = PHP.XMLHttpRequest;
        var ajax = new XMLHttpRequest();

        ajax.open('GET', 'http://abn-corp.it-effects.ru/api/news/', false);


        ajax.onreadystatechange = function () {
          print(1)
        }

        ajax.send({})

        // this.data = []

        if (ajax.status === 200) {
          this.list = (JSON.parse(ajax.responseText)).data.list;
        }
      } catch (e) {}
    },

    // mounted () {
    //     this.$http.get('http://abn-corp.it-effects.ru/api/news/')
    //       .then(res => {
    //         this.list = res.data.data.list
    //       })
    // }
  }
</script>

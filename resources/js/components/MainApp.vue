<template>
   
    <div id="main" class="container">
         <Header/>

       <router-view></router-view>
    </div>
</template>

<script>
    import Header from './Header';

    export default {
        name: 'main-app',
        components: { Header }
    }
</script>
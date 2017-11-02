<template>
    <div class="notification">
        <h4>Example Component</h4>
        <p>Adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet, consectetur adipiscing elit</p>
    </div>
</template>

<script>
    export default {

        mounted() {
            this.initExample();
        },

        data() {
            return {
                // 
            }
        },

        methods: {
            initExample(){
                console.log('Component mounted.');
            }
        }
    }
</script>

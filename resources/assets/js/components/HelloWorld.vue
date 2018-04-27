<template>
    <div>
        <h4>
            Hello, World!
        </h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quisquam enim alias ullam at quam quod hic dolores recusandae. Voluptates libero amet in excepturi. Aperiam beatae quis at quaerat, voluptatibus!
        </p>
    </div>
</template>

<script>
export default {
    mounted() {
        this.helloWorld();
    },
    data() {
        return {
            //
        }
    },
    methods: {
        helloWorld(){
            console.log('Hello, World!');
        }
    }
}
</script>

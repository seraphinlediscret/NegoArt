<template>
     <div>Bonjour {{name}}</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return{
                'name': 'Yohann'
            }

        },
    }
</script>

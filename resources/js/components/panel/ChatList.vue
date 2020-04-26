<template>
    <div>
        <div class="row">
            hi
        </div>
    </div>
</template>

<script>
    import client from '@/client'
    export default {
        name: "chat-list",
        props: ['user_id'],
        components: {

        },
        data() {
            return {
            }
        },
        mounted(){
            this.getList();
        },
        methods: {
            getList(){

            }
        }
    }
</script>


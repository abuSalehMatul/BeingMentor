<template>
    <modal :customClass="'sm'">
        <template v-slot:header>
            <h4 class="col-md-12 col-sm-12 c-grey-900 p-20">
                It Seems a New Issue that you want to discuss. Please Tell us About It.
            </h4>
        </template>
        <template v-slot:body>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                <textarea class="form-control" v-model="description">
                </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-info" value="Submit The issue!" @click.prevent="emitData">Submit</button>
                </div>

            </div>
        </template>
    </modal>
</template>
<script>
    import client from '@/client'
    import modal from '@comp/lib/Modal'
    import {EventBus} from "@/event-bus"

    export default {
        name: 'ticket-form',
        components: {
            modal
        },
        data() {
            return {
                description: ''
            }
        },
        methods: {
            emitData(){
                this.$emit('updateTicket', this.description);
            }
        }
    }
</script>

<template>
    <div class="w-25" v-if="person">
        <div class="mb-3">
            <input type="text" v-model="person.name" placeholder="Name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="person.age" placeholder="Age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="person.job" placeholder="Job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled"
               @click.prevent="$store.dispatch('update', {id: person.id, name: person.name,age: person.age,job: person.job})"
                   type="submit" value="Update" class="btn btn-warning">
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        name: "Edit",

        mounted() {
            this.$store.dispatch('getPerson', this.$route.params.id)
        },

        methods: {

        },

        computed: {
            ...mapGetters({
                isDisabled: "isDisabled",
                person: "person",
            })
        }

    }
</script>

<style scoped>

</style>

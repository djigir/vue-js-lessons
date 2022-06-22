<template>
    <div class="w-25">
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
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('store', {name: person.name, age: person.age, job: person.job})" type="submit" value="Add" class="btn btn-success">
        </div>
    </div>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        name: "Create",

        mounted() {
            this.$store.commit('setPerson', {name: null, age: null, job: null})
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

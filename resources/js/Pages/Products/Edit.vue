<template>
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit Product</h3>
        </div>
        <form class="card-body" @submit.prevent="form.put('/products/' + product.id)">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       class="form-control"
                       name="name" id="name"
                       v-model="form.name"
                >
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text"
                       class="form-control"
                       name="description" id="description"
                       v-model="form.description"
                >
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number"
                       step="0.01"
                       class="form-control"
                       name="price" id="price"
                       v-model="form.price"
                >
            </div>
            <button type="submit" class="btn btn-dark bg-dark my-2">Save</button>
        </form>
    </div>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3'



</script>

<script>
import Layout from "@/Layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";

export default {
    name: "Create",
    layout: Layout,
    props: {
        product: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'put',
                name: this.product.name,
                description: this.product.description,
                price: this.product.price,
            }),
        }
    },
}
</script>

<style scoped>

</style>

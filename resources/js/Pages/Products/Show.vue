<template>
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Product details</h3>
        </div>
        <div class="card-body">
            <p><b>Name: </b>{{ product.name }}</p>
            <p><b>Description: </b>{{ product.description }}</p>
            <p><b>Price: </b>{{ product.price }}</p>
        </div>
    </div>
</template>

<script>
import Layout from "@/Layouts/AdminLayout.vue";

export default {
    name: "Show",
    layout: Layout,
    props: {
        product: Object
    }
}
</script>

<style scoped>

</style>

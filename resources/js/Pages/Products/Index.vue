<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Products</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <Link href="/products/create" class="btn btn-dark mb-4">Add Product</Link>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products.data" :key="product.id">
                    <td>{{ product.id }}</td>
                    <td>
                        <Link :href="'products/'+ product.id">
                            {{ product.name }}
                        </Link>
                    </td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.price }}</td>
                    <td>
                        <Link :href="'products/' + product.id + '/edit'">
                            <i class="fa fa-edit"></i></Link>
                    </td>
                    <td>
                        <Link :href="'products/' + product.id" method="delete" as="button">
                            <i class="fa fa-trash"></i>
                        </Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right d-flex">
                <li class="page-item">
                    <Component v-for="link in products.links"
                               :is="link.url ? 'Link' : 'span'"
                               :href="link.url"
                               class="page-link d-inline"
                               v-html="link.label"
                    >
                    </Component>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

import Layout from "@/Layouts/AdminLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",
    layout: Layout,
    components: {Link},
    props: {
        products: Object
    }
}
</script>

<style scoped>

</style>

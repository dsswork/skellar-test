<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <Link href="/" class="brand-link mx-4">
            <span class="brand-text font-weight-light">Test Task</span>
        </Link>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <Link href="/products" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </aside>
</template>

<script>

import {Link} from "@inertiajs/vue3";
export default {
    name: "Sidebar",
    components: {Link}
}
</script>

<style scoped>

</style>

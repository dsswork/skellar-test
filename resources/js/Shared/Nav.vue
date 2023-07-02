<template>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <Link class="nav-link" href="/logout" method="post" as="button">
                    <i class="fas fa-sign-out-alt"></i>
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import {Link} from "@inertiajs/vue3";
export default {
    name: "Nav",
    components: {Link}
}
</script>

<style scoped>

</style>

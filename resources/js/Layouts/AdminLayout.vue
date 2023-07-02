<template>
    <div class="wrapper">
        <Nav/>

        <Sidebar/>

        <div class="content-wrapper p-2">
            <slot/>
        </div>


        <Footer/>
    </div>
</template>

<script>
import Sidebar from "@/Shared/Sidebar.vue";
import Nav from "@/Shared/Nav.vue";
import Footer from "@/Shared/Footer.vue";

export default {
    name: "AdminLayout",
    components: {Nav, Sidebar, Footer}
}
</script>

<style scoped>

</style>

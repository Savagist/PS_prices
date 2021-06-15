<template>
    <div>
        <Carousel></Carousel>
        <Catalog></Catalog>
    </div>
</template>

<script>
import Product from "@/components/product/Product";
import Carousel from "@/components/Carousel";
import Catalog from "../components/Catalog";
export default {
    name: 'Home',
    components: {
        Catalog,
        Carousel,
        Product
    },
    data() {
        return {
            items: []
        }
    },
    created() {
        this.$http.get('/products/list')
            .then((response) => this.items = response.data)
    }
}
</script>


<template>
  <div class="product col border border-3 border-info m-1 rounded text-center pb-2">
    <router-link :to="{name: 'ProductInfo',  params: {id: item.id}}">
    <img class="border border-2 border-dark figure-img img-fluid rounded mt-1" :src="item.image" alt="">
    <h4>{{item.gameName}}</h4>
    <h5 class="price">{{item.price}}</h5>
    <img class="figure-img img-fluid" :src="item.place" alt="">
    <button type="button" class="btn btn-info">Купить</button>
    </router-link>
  </div>
</template>


<script>
import ProductInfo from "@/views/ProductInfo";

export default {
  name: "Product",
  components: {ProductInfo},
  props: ['item'],
  methods: {
    addToCart(event) {
      const data = {
          count: 1,
          productId: this.item.id
      }

      this.$http.post(' /cart/add', data)
        .then((response) => {
            alert('Товар добавлен!')
        })

      event.target.classList.remove('btn-danger')
      event.target.classList.add('btn-warning')

      setTimeout(() => {
        event.target.classList.remove('btn-warning')
        event.target.classList.add('btn-danger')
      }, 2000)
    }
  }
}
</script>

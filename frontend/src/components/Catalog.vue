<template>
  <div class="main container border border-5">
    <div class="row">
      <div class="border-end border-5  col-2">
        <h3 class="">Категории</h3>
        <span>Жанр</span>
        <select class="form-select mt-2 mb-2">
          <option selected>Все игры</option>
          <option value="USA">Экшен</option>
          <option value="USA">Приключения</option>
          <option value="USA">Симулятор</option>
          <option value="USA">Стратегия</option>
          <option value="USA">Спорт</option>
          <option value="USA">Гонки</option>
          <option value="USA">Казуальная</option>
          <option value="USA">Приключения</option>
        </select>
        <span>Цена</span>
        <select class="form-select mt-2 mb-2">
          <option selected> - </option>
          <option value="USA">По убыванию</option>
          <option value="USA">По возрастанию</option>
        </select>
        <span>Акции и скидки</span>
        <select class="form-select mt-2 mb-2">
          <option selected>-</option>
          <option value="USA">Лучшая цена</option>
          <option value="USA">Лучшие предложения</option>
        </select>
      </div>
      <div class="main-page  col-10">
        <div  id="main-list" class="btn-group m-2" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-info" for="btnradio1">Лидеры продаж</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-info" for="btnradio2">Новинки</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-info" for="btnradio3">Ожидаемые</label>
        </div>
        <div class="main-product row">
          <Product v-for="item in items" :item="item" ></Product>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Product from "@/components/product/Product";
export default {
  name: "Catalog",
  components: {Product},
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

<template>
  <div class="main container ps-0 row ms-5 pe-0 border border-5">
    <div class="product_main row mt-2 ms-0">
      <img class="border border-dark product_image col-4 p-0" src="/image/game.jpg" alt="">
      <div class="col-8">
        <h2 class="text-center">Marvel Человек-Паук: Майлз Моралес. Расширенная Версия</h2>
        <h6 class="about text-start">Издание «MARVEL Человек-Паук: Майлз Моралес. Расширенная версия» позволит вам
          узнать всю удивительную историю знаменитого метателя паутины. Этот невероятный набор включает игру
          «MARVEL Человек-Паук. Обновленная версия», в том числе все три главы дополнения «MARVEL Человек-Паук:
          Город, который никогда не спит» — обновленные и улучшенные для консоли PS5™.

          Издание «Расширенная версия» содержит:
          - «MARVEL Человек-Паук: Майлз Моралес» (для PS4™ и PS5™)
          - «MARVEL Человек-Паук. Обновленная версия» (для PS5™)

          Если у вас уже есть версия «MARVEL Человек-Паук: Майлз Моралес» для PS4™, вы можете получить ее цифровую
          версию для PS5™ без каких-либо дополнительных затрат – вам не придется снова покупать этот продукт.
          Владельцы диска с игрой для PS4™ должны вставлять его в PS5™ каждый раз, когда они хотят загрузить или
          воспроизвести цифровую версию игры для PS5™. Владельцы дисков с играми для PS4™, купившие консоль PS5™
          без дисковода, не смогут получить версию игры PS5™ без дополнительной платы.


          Автономная однопользовательская версия
          Доступна автономная игра


          Загрузка осуществляется в соответствии с Условиями обслуживания PlayStation Network, Условиями
          использования программ и любыми другими применимыми дополнительными документами. Если вы не согласны
          выполнять условия, не загружайте материалы. Дополнительная информация приведена в Условиях обслуживания.
        </h6>
      </div>
      <div class="border border-info product_about row p-0 m-2">
        <h4 class="text-center">Характеристики</h4>
        <div class="col-4">
          <p>Жанр: <b>Приключения</b></p>
          <p>Возрастное ограничение: <b>18+</b></p>
          <p>Язык: <b>Русский</b></p>
        </div>
        <div class="col-4 text-center">
          <h5>Платформа</h5>
          <div  class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-info" for="btnradio1">PS4/PS5</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-info" for="btnradio2">PS5</label>
          </div>
        </div>
        <div class="col-4 text-center">
          <h5 >Платформа</h5>
          <div  class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
            <label class="btn btn-outline-info" for="btnradio1">Стандартное</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
            <label class="btn btn-outline-info" for="btnradio2">Расширенное</label>
          </div>
        </div>
      </div>
      <p>Цена: <b class="price">5.499 RUB</b></p>
      <button type="button" class="btn btn-info btn-lg me-0 mb-2">Добавить в корзину</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductInfo",
  data() {
    return {
      item: null
    }
  },
  created() {
    const id = this.$route.params.id
    this.$http.get('/api/products/list/' + id)
      .then((response) => this.item = response.data)
  },

  methods: {
    addToCart(event) {
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

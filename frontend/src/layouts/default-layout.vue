<template>
  <section>
    <header>
      <div class="row  p-2 m-0">
        <div  class="col-1">
          <router-link :to="{name: 'Home'}"><img id="logo" src="/image/logo.png" alt=""></router-link>
        </div>
        <div  class="col-2" id="type">
          <select class="form-select">
            <option selected>Все платформы</option>
            <option value="1">PC</option>
            <option value="2">PS</option>
            <option value="4">Xbox</option>
            <option value="3">Nintendo Switch</option>
          </select>
        </div>
        <div  id="find" class="input-group col">
          <input type="search" class="form-control" placeholder="Поиск игр">
          <button class="btn btn-primary" type="button" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>
        </div>
        <div class="region col-2">
          <select class="form-select">
            <option selected>Россия</option>
            <option value="USA">USA</option>
          </select>
        </div>
        <div class="login col-1" >
          <router-link :to="{name: 'Login'}" type="button" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
              <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"></path>
              <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
            </svg>
            Вход
          </router-link>
        </div>
      </div>
    </header>
    <main>
      <div class="mb-2">
        <slot />
      </div>
    </main>
    <footer class="row container-fluid">
      <div class="page-text_content col-6">
        <h1 class="page-text__title">Что такое Game Shop?</h1>
        <p>В нашем интернет-магазине вы сможете гарантированно приобрести ключи к играм от Steam, Uplay, Battle.net и прочих популярных игровых платформ. Наш магазин делает все для того, чтобы ваши покупки проходили быстро, с максимальным удобством и безопасностью, а цены оставались максимально доступными.</p>
        <p>Для покупки достаточно лишь указать электронный адрес при оформлении заказа и выбрать удобный способ оплаты. После этого Вам на почту придет пароль доступа в личный кабинет, в котором Вы получите ключ активации.</p>
      </div>
      <div class="col-6 mt-2 text-end">
        © 2021 GAMESHOP
        <p>Все права защищены. Полное или частичное копирование материалов сайта без согласования с администрацией запрещено!</p>
        <p>Все названия игр, компаний, торговых марок, логотипы и игровые материалы являются собственностью соответствующих владельцев.</p>
        Обратная связь: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
      </svg> @Thisavage <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg> /thisavage
      </div>

    </footer>
  </section>
</template>

<script>
import Cart from "@/components/Cart";
import Home from "@/views/Home";
export default {
  name: "default-layout",
    components: {Cart, Home}
}
</script>

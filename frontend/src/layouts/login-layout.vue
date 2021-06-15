<template>
  <section>
    <header>
      <div class="p-3 header-login">
        <a href="#">Лидеры продаж</a>
        <a href="#">Новинки</a>
        <a href="#">Ожидаемые</a>
      </div>
    </header>
    <main>
      <slot/>
    </main>
    <footer id="footer-login">
      <div class="footer text-center">
        © 2021 GAMESHOP
      </div>
    </footer>
  </section>
</template>

<script>
export default {
  name: "login-layout"
}
</script>

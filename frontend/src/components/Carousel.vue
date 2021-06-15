<template>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/image/ac.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Assassin's Creed Valhalla</h5>
          <p>Вам предстоит пройти путь к славе, сыграв за легендарного викинга. Нападайте на врагов, развивайте селение и усиливайте влияние.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/wd.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Watch Dogs:Legion</h5>
          <p>Пресса сказала свое слово! Узнайте подробности в нашем трейлере. Спасите Лондон, сыграв за кого угодно, будь то бабушка или шпион. Игра Watch Dogs: Legion уже доступна!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/batman.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Batman Arkham Knight</h5>
          <p>В игре BATMAN: Рыцарь Аркхема – бурном финале серии, действие разворачивается в Аркхеме, Бэтмен противостоит самой жестокой угрозе городу, который он поклялся защищать. Также включены задания из набора «Кошмар Пугала» (только для PlayStation®). Готэм попал под действие токсина Пугала – в мгновение ока весь огромный город превратился в настоящий кошмар…</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</template>

<script>
export default {
  name: "Carousel",
    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js' )
        document.head.appendChild(recaptchaScript)
    }
}

</script>

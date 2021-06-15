<template>
  <div id="login-singup" class=" border border-5 rounded-2">
    <div class=" logo-l">
      <img id="logo-login" class="ms-4 pt-2 " src="/image/logo.png" alt="">
      <h1 class="row m-2">GAME_SHOP</h1>
    </div>
    <div class="input-group mb-3 p-2">
      <span class="input-group-text">Логин</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3 p-2">
      <span class="input-group-text">Пароль</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div id="button-login"><button type="button" class="btn btn-info">Войти</button></div>
    <div  id="main-list-login" class="btn-group m-2" role="group" aria-label="Basic radio toggle button group">
      <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
      <label class="btn btn-outline-info" for="btnradio1">Вход</label>
      <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
      <router-link :to="{name: 'Check_in'}" class="btn btn-outline-info" for="btnradio2">Регистрация</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      email: '',
      password: '',
      errorsEmail: '',
      errorsPassword: ''
    }
  },
  methods: {
    login(event) {
      this.errorsEmail = ''
      this.errorsPassword = ''

      if (this.email.trim().length === 0) {
        this.errorsEmail = 'Пожалуйста заполните Email.'
      }
      if (this.password.trim().length === 0) {
        this.errorsPassword = 'Пожалуйста заполните Пароль.'
      }

      if (this.errorsEmail.length === 0 && this.errorsPassword.length === 0) {
        alert('Отправили запрос.')
      }

      event.preventDefault()
    }
  }
}
</script>

<template>
  <div class="login">
    <div class="container">
      <div class="title">Login</div>
      <div class="content">
        <form @submit.prevent="login">
          <FormGroup>
            <template v-slot:label>
              <label>Username:</label>
            </template>
            <template v-slot:component>
              <input name="component" />
            </template>
          </FormGroup>
          <FormGroup>
            <template v-slot:label>
              <label>Password:</label>
            </template>
            <template v-slot:component>
              <input type="password" name="component" />
            </template>
          </FormGroup>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import FormGroup from "./../components/FormGroup.vue";
export default {
  methods: {
    login: function () {
      alert();
    },
  },
  components: {
    FormGroup,
  },
};
</script>

<style lang="scss">
@import "./Login.scss";
</style>

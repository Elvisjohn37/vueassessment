<template>
  <div class="home">
    <section>
      <div class="search">
        <form @submit.prevent="search">
          <div class="title">Welcome</div>
          <FormGroup class="search-component">
            <template v-slot:label>
              <label>Product name:</label>
            </template>
            <template v-slot:component>
              <input name="component" />
            </template>
          </FormGroup>
          <FormGroup class="search-component">
            <template v-slot:label>
              <label>product Type:</label>
            </template>
            <template v-slot:component>
              <select name="component">
                <option>Games</option>
                <option>Books</option>
                <option>Foods</option>
              </select>
            </template>
          </FormGroup>
          <button type="submit">Search</button>
        </form>
      </div>
    </section>
    <section>
      <div class="result">
        <div class="label">Results</div>
      </div>
    </section>
    <section>
      <div class="basket">
        <div class="label">Cart</div>
      </div>
    </section>
  </div>
</template>

<script>
import FormGroup from "./../components/FormGroup.vue";
export default {
  methods: {
    search: () => {
      alert("search");
    },
  },
  components: {
    FormGroup,
  },
};
</script>

<style lang="scss">
@import "./Home.scss";
</style>

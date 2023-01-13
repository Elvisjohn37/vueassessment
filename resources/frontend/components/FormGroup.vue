<template>
  <div class="form-group">
    <slot class="label" name="label"></slot>
    <slot class="component" :type="type" name="component"></slot>
  </div>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: "text",
    },
  },
};
</script>

<style lang="scss">
@import "./FormGroup.scss";
</style>

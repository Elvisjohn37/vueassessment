import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import vueJsx from "@vitejs/plugin-vue-jsx";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/frontend/scss/index.css",
        "resources/frontend/index.js",
      ],
      refresh: true,
    }),
    vue(),
    vueJsx(),
  ],
});

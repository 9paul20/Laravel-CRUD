require("./bootstrap");
window.Vue = require("vue");

import Vue from "vue";
import VueRouter from "vue-router";

import { routes } from "./routes";

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    linkExactActiveClass: "active",
    // linkActiveClass: "active-route",
    mode: "history",
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 };
    },
});

Vue.component(
    "example-item",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router: router,
});

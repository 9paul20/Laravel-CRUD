require("./bootstrap");
window.Vue = require("vue");

import Axios from "axios";
import Vue from "vue";
import VueAxios from "vue-axios";
import VueRouter from "vue-router";
Vue.use(VueRouter);
import Vuetify from "vuetify";

import "vuetify/dist/vuetify.min.css";
Vue.use(Vuetify);

import { routes } from "./routes";

// Vue.use(VueRouter, Vuetify);
// Vue.use(Axios, VueAxios);

const router = new VueRouter({
    routes,
    // linkExactActiveClass: "active",
    // linkActiveClass: "active-route",
    // mode: "history",
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
    router,
    vuetify: new Vuetify(),
});

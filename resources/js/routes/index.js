import Index from "../views/index.vue";

export const routes = [
    {
        path: "/",
        name: "Index",
        component: () => import(/* webpackChunkName: "about" */ '../views/index.vue'),
    },
    // {
    //     path: "*",
    //     component: notFound,
    // },
];

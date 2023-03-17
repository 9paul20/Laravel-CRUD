export const routes = [
    {
        path: "/",
        name: "Index",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/index.vue"),
    },
    {
        path: "/example",
        name: "Example",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/ExampleGPT.vue"),
    },
    {
        path: "/about",
        name: "About",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
    },
    {
        path: "/table",
        name: "Table",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/TableView.vue"),
    },
    // {
    //     path: "*",
    //     component: notFound,
    // },
];

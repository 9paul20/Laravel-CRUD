export const routes = [
    {
        path: "/",
        name: "Index",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/index.vue"),
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
    },{
        path: "/table_two",
        name: "Table 2",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/TableTwoView.vue"),
    },
    {
        path: "/403",
        name: "403",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/403View.vue"),
    },
    {
        path: "*",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/404View.vue"),
    },
];

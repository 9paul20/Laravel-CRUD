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
        path: "/dashboard",
        name: "Dashboard",
        component: () =>
            import(
                /* webpackChunkName: "about" */ "../views/DashboardView.vue"
            ),
    },
    {
        path: "/table",
        name: "Table",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/TableView.vue"),
    },
    {
        path: "*",
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/404View.vue"),
    },
];

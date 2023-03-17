<template>
    <v-app>
        <v-navigation-drawer app v-model="drawer" :mini-variant.sync="mini">
            <v-list dense>
                <v-list-item-group>
                    <v-list-item v-for="(item, i) in items" :key="i" router :to="item.to" exact>
                        <v-list-item-icon>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar app color="primary" dark>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>{{ title }}</v-toolbar-title>
        </v-app-bar>
        <v-main>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-main>
        <v-footer app>
            <span>&copy; 2022 - My Company</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            drawer: false,
            mini: false,
            title: 'Dashboard',
            items: [
                {
                    title: 'Home',
                    icon: 'mdi-home',
                    to: '/',
                },
                {
                    title: 'Settings',
                    icon: 'mdi-cog',
                    to: '/settings',
                },
                {
                    title: 'Logout',
                    icon: 'mdi-logout',
                    to: '/logout',
                },
            ],
        };
    },
};
</script>

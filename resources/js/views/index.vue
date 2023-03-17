<template>
    <v-app>
        <v-navigation-drawer app v-model="drawer" color="green" dark>
            <v-list dense>
                <v-list-item v-for="(item, i) in items" :key="i" router :to="item.route">
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar app color="green" dark>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Dashboard</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn text>Logout<v-icon>mdi-logout</v-icon></v-btn>
        </v-app-bar>
        <v-main>
            <transition name="slide-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </v-main>
        <v-footer app color="black" dark>
            <span>&copy; 2022 - My Company</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            drawer: false,
            mini: false,
            items: [
                {
                    icon: 'mdi-home',
                    title: 'Inicio',
                    route: '/',
                },
                {
                    icon: 'mdi-table',
                    title: 'Tabla',
                    route: '/table',
                },
                {
                    icon: 'mdi-account-group',
                    title: 'Users',
                    route: '/users',
                },
            ],
        };
    },
};
</script>

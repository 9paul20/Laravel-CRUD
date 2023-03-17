<template>
    <v-app>
        <v-toolbar color="primary" dark>
            <v-toolbar-title>My App</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <v-btn to="/">Home</v-btn>
                <v-btn to="/about">About</v-btn>
            </v-toolbar-items>
        </v-toolbar>

        <v-content>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-content>

        <v-footer color="primary" dark>
            <span>&copy; 2023 My App</span>
        </v-footer>
    </v-app>
</template>

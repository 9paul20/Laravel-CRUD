<template>
    <v-container fluid class="text-center">
        <v-row>
            <v-col cols="12">
                <h1 class="display-1 font-weight-bold mb-6">404</h1>
                <h2 class="display-2 font-weight-bold mb-3">¡Oops! Página no encontrada</h2>
                <p class="subtitle-1">Lo siento, pero la página que buscas no existe o ha sido eliminada.</p>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <v-img src="/img/error-404.svg" alt="Error 404 - Página no encontrada" class="mx-auto" width="600"
                    height="400"></v-img>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <v-btn color="green" dark to="/">Volver al inicio</v-btn>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: 'Error404'
}
</script>

<style scoped>
.display-1 {
    font-size: 12rem;
}

.display-2 {
    font-size: 6rem;
}

.subtitle-1 {
    font-size: 2rem;
}
</style>

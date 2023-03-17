<template>
    <v-data-table :headers="headers" :items="desserts" :search="search" class="elevation-1">
        <template #item.calories="{ value }">
            {{ value.toLocaleString() }}
        </template>
        <template #item.actions="{ item }">
            <v-icon small class="mr-2" @click="editItem(item)">mdi-pencil</v-icon>
            <v-icon small @click="deleteItem(item)">mdi-delete</v-icon>
        </template>
    </v-data-table>
</template>

<script>
export default {
    data() {
        return {
            headers: [
                { text: 'Dessert (100g serving)', value: 'name' },
                { text: 'Calories', value: 'calories' },
                { text: 'Fat (g)', value: 'fat' },
                { text: 'Carbs (g)', value: 'carbs' },
                { text: 'Protein (g)', value: 'protein' },
                { text: 'Actions', value: 'actions' },
            ],
            desserts: [
                {
                    name: 'Frozen Yogurt',
                    calories: 159,
                    fat: 6.0,
                    carbs: 24,
                    protein: 4.0,
                },
                {
                    name: 'Ice cream sandwich',
                    calories: 237,
                    fat: 9.0,
                    carbs: 37,
                    protein: 4.3,
                },
                {
                    name: 'Eclair',
                    calories: 262,
                    fat: 16.0,
                    carbs: 24,
                    protein: 6.0,
                },
            ],
            search: '',
        };
    },
    methods: {
        editItem(item) {
            // handle edit action
        },
        deleteItem(item) {
            // handle delete action
        },
    },
};
</script>

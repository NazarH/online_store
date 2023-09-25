<template>
    <div class="container">
        <div class="table-attributes">
            <form action="categories/create" class="banners__form-top" id="banner-create" method="post">
                <input type="hidden" name="_token" :value="csrf">
                <input type="text" name="name" placeholder="Введіть назву категорії..." v-model="category.name">
                <button type="submit">Створити</button>
            </form>
        </div>
        <table class="table">
            <tr>
                <th>Назва категорії</th>
                <th></th>
            </tr>
            <tr v-if="categories" v-for="category in categories">
                <td class="item-name">{{ category.name }}</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="submit" value="Видалити">
                    </form>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    props: {
        categories: String,
        csrf: String
    },
    methods: {
        data() {
            return {
                category:{
                    name: null
                }
            }
        },
        methods: {
            createCategory() {
                axios.post('/categories/create', {
                    category
                }).then(res => {
                    category.name = null
                });
            }
        }
    }
}
</script>

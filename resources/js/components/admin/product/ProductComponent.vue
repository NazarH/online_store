<template>
    <div class="container">
        <div class="table-attributes">
            <a href="products/create">Додати товар</a>
            <form action="" method="post">
                <input type="hidden" name="_token" :value="this.$csrf.token">
                <input type="text" name="code" placeholder="Введіть код товару...">
                <button type="submit">Пошук</button>
            </form>
        </div>
        <table class="table">
            <tr>
                <th>Назва товару</th>
                <th>Код товару</th>
                <th>Ціна</th>
                <th></th>
            </tr>
            <tr v-if="products" v-for="product in products">
                <td class="item-name">{{ product.name }}</td>
                <td>{{ product.code }}</td>
                <td class="item-price">{{ product.price }}</td>
                <td class="table-buttons">
                    <a :href="'products/' + product.id">Редагувати</a>
                    <form action="" method="post">
                        <input type="hidden" name="_token" :value="this.$csrf.token">
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
        products: String
    },
}
</script>

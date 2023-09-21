<template>
    <div class="average">
        <div class="product-info">
            <div class="product-info__images">
                <div class="product-info__main-image">
                    <img v-for="image in images" :id="'main-img-' + (image.id-1)" class="main-img"
                        :src="'http://127.0.0.1:8000/storage/' + image.image_url" alt="">
                </div>
                <div class="product-info__slider">
                    <div class="img-left" @click="leftClick()">
                        ❰
                    </div>
                    <div class="product-info__items">

                        <div v-for="image in images" :key="image.id">
                            <div id="l" @click="pressLeftImg(images.length)"></div>
                            <img :id="'block-image-' + (image.id-1)" :src="'http://127.0.0.1:8000/storage/' + image.image_url"
                                alt="">
                            <div id="r" @click="pressRightImg(images.length)"></div>
                        </div>

                    </div>
                    <div class="img-right" @click="rightClick()">
                        ❱
                    </div>
                </div>
            </div>
            <div class="product-info__about">
                <div class="product-info__name">
                    <div>
                        {{ product.name }}
                    </div>
                    <div>
                        ({{ product.code }})
                    </div>
                </div>
                <div class="discount">
                    {{ product.discount !== '0' ? product.price : '' }}
                </div>
                <div class="product-info__price">
                    <div>
                        {{ product.discount === 0 ? product.price : Math.round(product.price - (product.price *
                            product.discount) / 100) }}₴
                    </div>
                    <a href="">
                        <button> Придбати </button>
                    </a>
                    <form action="/basket" method="post">

                        <input type="text" name="link" :value="link">
                        <input type="text" name="id" :value="product.id" class='invisible'>
                        <button type="submit"> В корзину </button>
                    </form>
                </div>
                <div class="product-info__delivery">
                    <div>
                        <div>
                            Самовивіз із відділень поштових операторів
                        </div>
                        <div>
                            За тарифами перевізника
                        </div>
                    </div>
                    <div>
                        <div>
                            Доставка кур'єром
                        </div>
                        <div>
                            За тарифами перевізника
                        </div>
                    </div>
                </div>
                <div class="product-info__guarantees">
                    <div>
                        <span>Оплата.</span> Оплата при отриманні товару, Google Pay, Карткою онлайн, Безготівкою для
                        юридичних осіб,
                        Сплатити онлайн соціальною карткою "Пакунок малюка", Безготівкою для фізичних осіб, PrivatPay,
                        Apple Pay, Оплатити онлайн карткою "єПідтримка", Visa, Mastercard
                    </div>
                    <div>
                        <span>Гарантія.</span> 12 місяців Обмін/повернення товару протягом 14 днів
                    </div>
                </div>
            </div>
        </div>

        <div class="product-items">
            <div class="features">
                <div class="feature__name">
                    <div>
                        Характеристики
                    </div>
                    <div>
                        {{ link }}
                    </div>
                    <div>
                        {{ product.name }}
                    </div>
                    <div>
                        ({{ product.code }})
                    </div>
                </div>
                <div class="features__items">
                    <div class="features__block">
                        <div class="features__item" v-for="attribute in attributes">
                            <div class="features__item-name">
                                {{ attribute.name }}
                            </div>
                            <div class="features__item-feature">
                                {{ attribute.value }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews">
                <div class="reviews__top">
                    <div class="feature__name weight">
                        Відгуки покупців
                    </div>

                </div>
                <div class="reviews_bottom">

                </div>
            </div>
        </div>
        <div class="add-inform">
            <div>
                * Увага! Всі ноутбуки продавця OnlineStore мають кирилиці на клавіатурі і
                супроводжуються офіційною гарантією від виробника! Перед встановленням
                програмного забезпечення прохання перевірити сумісність із пристроєм,
                вказаним на упаковці, документі
            </div>
            <div>
                <div>
                    * Характеристики та комплектація товару можуть змінюватися виробником без попередження.
                </div>
                <div>
                    * Огляд підготовлений на базі однієї з моделей серії. Точні специфікації дивіться у
                    вкладці "Характеристики".
                </div>
            </div>
        </div>
        <div class="viewed">
            <div class="viewed__title">
                Недавно переглянуті товари
            </div>
            <div class="viewed__rev-products">

            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['product', 'images', 'attributes', 'link', 'globalLink'],
    data(){
        return{
            key: 0
        }
    },
    methods: {
        leftClick()
        {
            document.getElementById('l').click();
        },
        rightClick()
        {
            document.getElementById('r').click();
        },
        pressLeftImg(count)
        {
            document.getElementById('block-image-' + this.key).style = 'border: none';
            document.getElementById('main-img-' + this.key).style = 'display: none';
            if (this.key === 0) {
                this.key = count - 1;
                document.getElementById('block-image-' + 0).style = 'border: none;';
                document.getElementById('block-image-' + this.key).style = 'border: 1px solid #C3C3C3;';
                document.getElementById('main-img-' + this.key).style = 'display: block';
            } else {
                this.key--;
                document.getElementById('block-image-' + this.key).style = 'border: 1px solid #C3C3C3;';
                document.getElementById('main-img-' + this.key).style = 'display: block';
            }
        },
        pressRightImg(count)
        {
            document.getElementById('block-image-' + this.key).style = 'border: none';
            document.getElementById('main-img-' + this.key).style = 'display: none';
            this.key++;
            if (this.key > count - 1) {
                this.key = 0;
                document.getElementById('block-image-' + (count - 1)).style = 'border: none;';
                document.getElementById('block-image-' + this.key).style = 'border: 1px solid #C3C3C3;';
                document.getElementById('main-img-' + this.key).style = 'display: block';
            } else {
                document.getElementById('block-image-' + this.key).style = 'border: 1px solid #C3C3C3;';
                document.getElementById('main-img-' + this.key).style = 'display: block';
            }
        }
    }
}
</script>

<template>
    <div class="average">
        <div class="product-info">
            <div class="product-info__images">
                <div class="product-info__main-image">
                    <img :id="'main-img-' + currentImageIndex" class="main-img" :src="currentImageUrl" alt="">
                </div>
                <div class="product-info__slider">
                    <div class="img-left" @click="prevImage()">
                        ❰
                    </div>
                    <div class="product-info__items">
                        <div v-for="(image, index) in images" :key="image.id">
                            <div @click="setCurrentImage(index)"></div>
                            <img :id="'block-image-' + index" :src="this.url + '/storage/' + image.image_url"
                                alt="">
                        </div>
                    </div>
                    <div class="img-right" @click="nextImage()">
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
    props: {
        product: String,
        images: String,
        attributes: String,
        link: String,
        globalLink: String
    },
    data() {
        return {
            currentImageIndex: 0,
            url: window.location.href.split('/').slice(0, 3).join('/')
        }
    },
    computed: {
        currentImageUrl() {
            return this.url+'/storage/'+this.images[this.currentImageIndex].image_url;
        }
    },
    methods: {
        prevImage() {
            this.currentImageIndex = (this.currentImageIndex - 1 + this.images.length) % this.images.length;
        },
        nextImage() {
            this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
        },
        setCurrentImage(index) {
            this.currentImageIndex = index;
        }
    }
}
</script>

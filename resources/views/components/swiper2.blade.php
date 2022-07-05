<div class="swiper mySwiperKlass">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-featurescard />
        </div>
        <div class="swiper-slide">
            <x-featurescard />
        </div>
        <div class="swiper-slide">
            <x-featurescard />
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<script>
    window.onload = function() {
        const swiper = new Swiper('.mySwiperKlass', {
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            speed: 1000,
            loop: true,
        })
    }
</script>

<style>
    .swiper1-pagination-bullet {
        border-radius: 50px;
        background-color: #31afaf;
            }
</style>

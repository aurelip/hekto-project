<div class="swiper mySwiperClass">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-categories2 />
        </div>
        <div class="swiper-slide">
            <x-categories2/>
        </div>
        <div class="swiper-slide">
            <x-categories2/>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<script>
    window.onload = function() {
        const swiper = new Swiper('.mySwiperClass', {
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
    .mySwiperClass-pagination-bullet {
        border-radius: 0x;
        background-color: #2b7e2f;
        transform:rotate(-45deg);
            }
</style>

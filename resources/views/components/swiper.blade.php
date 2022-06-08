<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><x-bgfile/></div>
        <div class="swiper-slide"><x-bgfile/></div>
        <div class="swiper-slide"><x-bgfile/></div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });
      </script>
      <style>
        .swiper-pagination-bullet {
            border-radius: 0px;
            background-color: #FB2E86;
            transform: rotate(-45deg);
        }
    </style>
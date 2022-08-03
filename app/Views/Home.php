<?= $this->extend('layout/templates') ?>

<?= $this->section('content'); ?>



<div class="">
    <section>
        <div class="slider overflow-x-hidden w-full">
                <div class="slides flex w-max">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slideFace w-screen first">
                        <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/files/slide_3_1944x.jpg" alt="" class="w-full">
                    </div>
                    <div class="slideFace w-screen">
                        <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/files/slide_2_1944x.jpg" alt="" class="w-full">
                    </div>
                    <div class="slideFace w-screen">
                        <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/files/slide_3_1944x.jpg" alt="" class="w-full">
                    </div>
                </div>
        </div>
    </section>


    <section class="py-8">
        <div class="p-2">
            <h1 class="text-center font-semibold text-xl">Featured collection</h1>
            <div class="w-32 m-auto">
                <hr class="border-0 border-b-2 border-black">
            </div>
        </div>
        <div class="cards grid grid-cols-2 place-items-center sm:grid-cols-3 md:grid-cols-4 w-fit mx-auto">
            <?php
                foreach ($product as $p) :
            ?>
            <a href="/product/<?= $p['name_product'] ?>">
                <div class="card w-44 m-2 shadow shadow-black/20 hover:shadow-md hover:shadow-black/25">
                    <img src="<?= $p['image_product1'] ?>" alt="" class="w-full">
                    <div class="information text-center p-2">
                        <p class="name"><?= $p['name_product'] ?></p>
                        <p class="price">Rp. <?= $p['price_product'] ?></p>
                    </div>
                </div>
            </a>
            <?php
                endforeach;
            ?>
        </div>
    </section>
</div>



<?= $this->endSection(); ?>
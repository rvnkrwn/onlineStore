<?= $this->extend('layout/templates') ?>

<?= $this->section('content'); ?>

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

<?= $this->endSection(); ?>
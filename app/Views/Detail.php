<?= $this->extend('layout/templates') ?>

<?= $this->section('content'); ?>


<section>
    <div class="p-8">
        <ul class="grid md:grid-cols-2">
            <li class="p-2 mx-auto">
                <img src="<?= $p['image_product1'] ?>" alt="">
            </li>
            <li class="p-2 mx-auto">
                <ul class="text-center">
                    <li class="my-4"><a href="/products"> Home / All Product / </a></li>
                    <li class="text-xl font-semibold my-2">
                        <p><?= $p['name_product'] ?></p>
                    </li>
                    <li class="my-2">
                        <p><?= $p['price_product'] ?></p>
                    </li>
                    <hr class="my-4">
                    <li class="my-2">
                        <p>5 in Stock</p>
                    </li>
                    <li class="my-2">
                        <a href=""><p class="bg-black text-white p-2">Buy Now</p></a>
                    </li>
                    <li class="text-start p-2">
                        <p>
                        Paris Jepang Lc by Umama Scarf. Terbuat dari bahan Paris Twice yang adem, mudah dibentuk dan nyaman dipakai. Tersedia dalam 60 warna cantik.
                            <br>
                            <br>
                        Material : Paris Twice
                            <br>

                            Size : 110 x 110
                            <br>
                            <br>
                            Per seri isi 10pcs (random warna).
                        </p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>


<?= $this->endSection(); ?>

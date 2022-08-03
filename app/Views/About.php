<?= $this->extend('layout/templates') ?>

<?= $this->section('content'); ?>


<section>
    <ul class="p-12 sm:w-4/5 mx-auto">
        <li class="text-center text-2xl font-bold my-4 tracking-wider">
            <h1>About Us</h1>
        </li>
        <li class="my-2">
            <h1 class="text-xl my-2 font-semibold">About</h1>
            <p>
                AbilaHijab merupakan sebuah merk hijab terkemuka yang hadir sejak tahun 2016. Berkomitmen untuk menjadi sahabat muslimah Indonesia, AbilaHijab hadir sebagai brand fashion muslim yang menghadirkan produk-produk dengan desain menarik, bahan yang berkualitas dengan harga terjangkau.
            </p>
        </li>
        <li class="my-2">
            <h1 class="text-xl my-2 font-semibold">Maps</h1>
            <div class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62601.55047570195!2d108.99747523699969!3d-7.706512677819503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e650c8d0abed43b%3A0x4027a76e3530950!2sCilacap%2C%20Kabupaten%20Cilacap%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1659512655186!5m2!1sid!2sid" style="border:0; min-width: 280px;" class="w-4/5 h-96" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </li>
        <li>
            <h1 class="text-xl my-2 font-semibold">Rating</h1>
            <div class="">
                <div class="flex">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>4.5/5</p>
            </div>

        </li>
    </ul>

</section>



<?= $this->endSection(); ?>

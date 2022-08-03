<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>


<section class="h-full w-full p-4">
    <form method="post" action="/user/checker" class="grid w-fit mx-auto p-6 border border-black/10 shadow">
        <?= csrf_field(); ?>
        <div class="text-center p-4">
            <i class="fal fa-user fa-2x"></i>
            <h1 class="text-2xl">Form <?= $title ?></h1>
            <p>
                <?php
                if(isset($status) > 0) {
                    echo $status;
                }
                ?>
            </p>
        </div>
        <div class="bg-gray-100/80 p-2 w-72 my-1 flex">
            <input type="email" name="email" id="email" placeholder="Enter your email" class="outline-none bg-transparent w-full" required>
            <i class="fal fa-envelope self-center"></i>
        </div>
        <div class="bg-gray-100/80 p-2 w-72 my-1 flex">
            <input type="password" name="password" id="password" placeholder="Enter your password" class="outline-none bg-transparent w-full" required>
            <i class="fal fa-eye self-center cursor-pointer"
            onclick="
            if (document.getElementById('password').type === 'password'){
                document.getElementById('password').type = 'text';
                document.querySelector('.fa-eye').classList.add('text-red-500');
            } else {
                document.getElementById('password').type = 'password';
                document.querySelector('.fa-eye').classList.remove('text-red-500');
            }
            "></i>
        </div>
        <input type="submit" value="<?= $title ?>" class="my-2 py-2 px-3 bg-gray-200 cursor-pointer">
        <p>Tidak punya akun? <a href="/user/register" class="underline">Register</a></p>
    </form>
</section>



<?= $this->endSection(); ?>

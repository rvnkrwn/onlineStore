<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <title><?= $name.' | '.$title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        @keyframes moveUp {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(0%);
            }
        }
        input[name=radio-btn] {
            display: none;
        }
        #radio1:checked ~.first {
            margin-left: -33.33%;
        }
        #radio2:checked ~.first {
            margin-left: -66.66%;
        }
        #radio3:checked ~.first {
            margin-left: -99.99%;
        }
        .slideFace {
            transition: 1s;
        }
    </style>
</head>
<body>
    <nav class="bg-white/90 text-amber-700 shadow shadow-md shadow-black/30 z-50 w-full sm:flex sm:justify-between sm:p-2" style="font-family: 'Josefin Sans', sans-serif;">
        <div class="px-8 py-2 flex justify-between sm:self-center">
            <a href="/" class="text-xl self-center font-semibold sm:text-2xl md:text-3xl md:font-black lg:text-4xl"><?= $name ?></a>
            <div class="sm:hidden">
                <i class="far fa-bars cursor-pointer border self-center p-2"
                   onclick="
            document.querySelector('#menus').classList.toggle('hidden')
            "></i>
            </div>
        </div>
        <ul id="menus" class="px-8 py-2 leading-loose border-t hidden sm:self-center sm:border-0 sm:flex sm:justify-around">
            <?php
            foreach ($menus as $menu) :
            ?>
            <li class="mr-6 md:mr-8"><a href="<?= $menu['menu_link'] ?>"><?= $menu['menu'] ?></a></li>
            <?php
                endforeach;
            ?>
        </ul>
    </nav>
    <section id="noticeOngkir" class="bg-black text-white">
        <div class="text-sm flex justify-evenly p-2 sm:w-1/2 m-auto">
            <p class="self-center p-1">Gratis ongkir seluruh pulau Jawa</p>
            <i class="fal fa-times self-center p-1 cursor-pointer hover:text-red-600"
            onclick="
            document.querySelector('#noticeOngkir').classList.add('hidden');
            "></i>
        </div>
    </section>

<!-- This Content -->
<?= $this->renderSection('content'); ?>
<!-- This Content -->

<hr>
<footer class="p-2 py-3 bg-white md:py-16 md:px-8" style="font-family: 'Josefin Sans', sans-serif;">
    <ul class="block md:grid md:grid-cols-3">
        <li class="p-2">
            <h1 class="font-semibold my-2">Tentang Kami</h1>
            <p><?= $name ?> merupakan sebuah merk hijab terkemuka yang hadir sejak tahun 2016. Berkomitmen untuk menjadi sahabat muslimah Indonesia, <?= $name ?> hadir sebagai brand fashion muslim yang menghadirkan produk-produk dengan desain menarik, bahan yang berkualitas dengan harga terjangkau.</p>
        </li>
        <li class="p-2 md:text-center">
            <h1 class="font-semibold my-2">INFORMASI</h1>
            <ul class="leading-relaxed">
                <li><a href="">Tentang Kami</a></li>
                <li><a href=""FAQS></a></li>
                <li><a href="">Hubungi Kami</a></li>
                <li><a href="">Lokasi Toko</a></li>
                <li><a href="">Kebijakan Pengembalian</a></li>
            </ul>
        </li>
        <li class="p-2">
            <h1 class="font-semibold my-2">Newsletter</h1>
            <p>Jadilah yang pertama mendapatkan informasi tentang penawaran dan diskon terbaru dari kami.</p>
            <form action="" method="" class="flex border-b border-black w-fit">
                <input type="email" name="subscription" id="emailSubscriber" placeholder="Enter your email" class="outline-none self-center p-1 placeholder:text-black/60 placeholder:italic"
                onkeyup="
                let x = document.querySelector('#emailSubscriber').value;
                let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                if(x.match(pattern)) {
                    document.querySelector('#subscribe').disabled = false;
                } else {
                    document.querySelector('#subscribe').disabled = true;
                }
                ">
                <button type="submit" id="subscribe" class="p-1 self-center" disabled><i class="fal fa-envelope"></i></button>
            </form>
        </li>
    </ul>
    <div class="text-center mx-auto my-2 py-4">
        <ul class="flex justify-center">
            <li><svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g></svg></li>
            <li><svg class="icon icon--full-color" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"><title id="pi-jcb">JCB</title><g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path></g><path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC"></path><path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036"></path><path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419"></path><path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero"></path></g></svg></li>
            <li><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg></li>
            <li><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg></li>
        </ul>
        <div class="my-2">
            <p>&copy; 2022 <?= $name ?> | All rights reserved. </p>
        </div>
    </div>
</footer>
    <script>
        let counter = 1;
        setInterval(function (){
            document.getElementById('radio'+counter).checked = true;
            counter++;
            if(counter === 3) {
                counter = 1;
            }
        },4000);
    </script>
    <script>
        window.addEventListener("scroll", function () {
            let nav = document.querySelector('nav');
            if (scrollY > 30) {
                nav.classList.add('fixed');
                nav.style.animation= "moveUp 1s"
            } else {
                nav.classList.remove('fixed');
                nav.style.animation= "moveUp 1s"
            }
        });
    </script>
</body>
</html>
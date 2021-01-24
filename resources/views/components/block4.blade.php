<section class="justify-center items-center flex" style="height:600px;">
  <img class="w-2/5 "  src="{{ url('assets/img/img3.png') }}"  alt="">
  <div class="text-center justify-center items-center flex flex-col " style="width: 512px; height: 536px;background:#FCF0E8;">
    <p class="" style="font-size:14px;">Le diagnostique ma beauté Intérieure</p>
    <img class="mt-4" src="{{ url('assets/img/point3.png') }}" alt="">
    <h2 style="font-size:35px;">Quelle cure de soin<br> cosmétique-à-boire<br> est faite pour vous<br> ?</h2>
    <p class="" style="font-size:14px;">
      Chaque peau est unique. Elle est le reflet de notre<br> fonctionnement organique, de notre santé mais aussi de <br>nos émotions. Elle doit être accompagnée avec expertise et<br> précision.<br><br>
      Pensé pour vous en collaboration avec le Dr. Naima Zerouk,<br> docteur en cosmétologie, le diagnostic ma beauté intérieure<br> vous oriente vers la cure de soin cosmétique-à-boire la plus <br>adaptée à vos besoins.
    </p>
    <div class="mt-4">
      @include('components.button', ['text' => 'Faire mon diagnostic'])
    </div>
  </div>
</section>

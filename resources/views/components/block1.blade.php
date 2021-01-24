<section>
  <div style="display:flex; width:100%;">
      <div class="" style="background:#F8F8F8;">
        <img class="mx-14 my-14"  src="{{ url('assets/img/evoleum.png') }}">
        <img class="absolute mx-52 -mt-40 w-4/6 z-50"  src="{{ url('assets/img/grappe1.png') }}">
        <img style="margin-left:592px; background:#F8F8F8;" class="absolute -mt-56 w-2/5	"  src="{{ url('assets/img/grappe2.png') }}">
        <img  class="absolute mx-60 mt-36 w-4/6"  src="{{ url('assets/img/grappe3.png') }}">
        <h1 style="font-family: 'Lato', sans-serif; font-weight: 300;
        font-size: 60px;" class="mx-40">Soif de beauté,<br> cure de nature</h1>
        <p style="font-family: 'Lato', sans-serif;font-size: 16px;" class="mx-40 mt-8">Evoleum encapsule le meilleur de la nature pour créer les <br> premiers soins cosmétique-à-boire d’exception à <br>l'éfficacité cliniquement prouvée.</p>
        <div class="flex-initial mx-40 mt-8 absolute">
          @include('components.button', ['text' => 'Découvrir'])
          @include('components.button', ['text' => 'MON DIAGNOSTIC'])
        </div>
        <div class="h-14 w-44 mt-48 absolute justify-center items-center flex" style="width:1105px; background:#F5F5F3; margin-top:194px;">
          <div class="h-1 bg-gray-900" style="width:100px;"></div>
          <div class="h-1" style="width:800px; background:#CFD3D6;"></div>
        </div>
      </div>

    <div class="">
      <div class="w-44 justify-center items-center flex flex-col text-center" style=" margin-left:430px;height:650px;">
        <img class="-mt-32" src="{{ url('assets/img/menu.png') }}" alt="">
        <ul>
          <li class="mt-32">EVOLEUM</li>
          <li class="mt-10">LONGÉVITÉ</li>
          <li class="mt-10">RADIANCE</li>
          <li class="mt-10">OXYGÉNATION</li>
          <li class="mt-10">EAU DE BOULEAU</li>
        </ul>
      </div>
      <div style="margin-left:430px;" class="w-44 h-14 bg-gray-900 flex justify-center items-center justify-between justify-around">
        <img class="" src="{{ url('assets/img/instagram.png') }}" alt="">
        <img class="" src="{{ url('assets/img/facebook.png') }}" alt="">
        <img class="" src="{{ url('assets/img/pinterest.png') }}" alt="">
      </div>
    </div>
    </div>
</section>

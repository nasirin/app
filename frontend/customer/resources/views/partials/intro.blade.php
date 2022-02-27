 <!-- ======= Intro Section ======= -->
 <div class="intro intro-carousel swiper position-relative">

     <div class="swiper-wrapper">
         @foreach ($carousel as $value)
             <div class="swiper-slide carousel-item-a intro-item bg-image"
                 style="background-image: url(<?= $value['url'] . $value['thumbnail'] ?>)">
                 <div class="overlay overlay-a"></div>
                 <div class="intro-content display-table">
                     <div class="table-cell">
                         <div class="container">
                             <div class="row">
                                 <div class="col-lg-8">
                                     <div class="intro-body">
                                         <p class="intro-title-top">{{ $value['location'] }}
                                         </p>
                                         <h1 class="intro-title mb-4 ">
                                             <span class="color-b">Type </span> {{ $value['type'] }}
                                             <br> Room size {{ $value['room_size'] }}
                                         </h1>
                                         <p class="intro-subtitle intro-price">
                                             <a href="#"><span class="price-a">rent |
                                                     {{ 'Rp ' . number_format($value['price_monthly'], 0, ',', '.') }}</span></a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
         <!-- <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
             <div class="overlay overlay-a"></div>
             <div class="intro-content display-table">
                 <div class="table-cell">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-8">
                                 <div class="intro-body">
                                     <p class="intro-title-top">Doral, Florida
                                         <br> 78345
                                     </p>
                                     <h1 class="intro-title mb-4">
                                         <span class="color-b">204 </span> Rino
                                         <br> Venda Road Five
                                     </h1>
                                     <p class="intro-subtitle intro-price">
                                         <a href="/template/#"><span class="price-a">rent | $ 12.000</span></a>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
             <div class="overlay overlay-a"></div>
             <div class="intro-content display-table">
                 <div class="table-cell">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-8">
                                 <div class="intro-body">
                                     <p class="intro-title-top">Doral, Florida
                                         <br> 78345
                                     </p>
                                     <h1 class="intro-title mb-4">
                                         <span class="color-b">204 </span> Alira
                                         <br> Roan Road One
                                     </h1>
                                     <p class="intro-subtitle intro-price">
                                         <a href="/template/#"><span class="price-a">rent | $ 12.000</span></a>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div> -->
     </div>
     <div class="swiper-pagination"></div>
 </div><!-- End Intro Section -->

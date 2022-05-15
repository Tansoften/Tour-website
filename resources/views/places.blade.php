@extends('layouts.master')
@section('content')

<!-- Headings and the top most places section-->
<section style="padding-top: 7rem; padding-bottom:1rem;">
    <div><img class="bg-holder" style="background-image: url({{route('image')}}/bg2.svg)">
        {{-- <img class="img-fluid bg-holder" src="{{asset('storage/asset/bg2.png')}}" width="" alt="hotel"> --}}
    </div>
    <div class="container">
        <div class="text-center align-items-center mb-5">
            <h2 class="fw-bold"> Places</h2>
            <h4>Travel to your favorite Place</h4>           
        </div>

         <!--Top most Places-->
         <div><p>Top most places to visit in your Safaris</p></div>
        <div class="row ">
            <div class="col-md-4 mb-4">
                <div class="card rounded-4 overflow-hidden">
                    <img class="rounded-4" style="border-radius: 1.5rem; display:block; vertical-align:middle;" src="{{route('image')}}/Chui.jpeg" alt="Serengeti">
                    <div class="card-body py-4 px-3 ">
                        <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                            <h4 class="fw-bold ">Serengeti</h4>
                            <p class="fw-bold">$2220</p>
                        </div>
                        <div class="align-items-center px-2">
                            <strong>Serengeti</strong>
                            <p> is one of the seven wonders of the world.
                                Housing the most unique plants, birds and animals,
                                 this park is popular among wildlife enthusiats.
                                  Next, the ecosystem of serengeti is one of the
                                   largest and oldest across the earth, which has highest
                                    concentration of large mammals in the world. 
                                    So you're bound to spot giraffes, elephants, 
                                    leopards and of course, lions. You'll also come 
                                    across more than 500 species of birds, including 
                                    ostriches and flamingos. And it is only place in Africa
                                     ehere vast land-animal migrations still take place. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-4 overflow-hidden">
                    <img class="rounded-4" style="border-radius: 1.5rem;display:block; vertical-align:middle;" src="{{route('image')}}/zanzibar.jpg" alt="Zanzibar">
                    <div class="card-body py-4 px-3 ">
                        <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                            <h4 class="fw-bold ">Zanzibar</h4>
                            <p class="fw-bold">$1870</p>
                        </div>
                        <div class="align-items-center px-2 mb-4">
                            <strong>Zanzibar</strong>
                            <p> is the home of idyllic beaches, balmy
                                 weather &amp; warm tropical waters. 
                                 This archipelago is renowed for clear 
                                 warm waters, coral reefs and rich marine 
                                 diversity making it a perfect under-water 
                                 destination for snorkelling and diving.Zanzibar has
                                  cultural influences from all around the world including
                                   the middle East, India, Europe and Africa.This diversity
                                    is what makes Zanzibar such a unique place to visit and
                                     chance to participate  in a variety of cultural immersion activities. 
                            </p>
                        </div> 
                    </div>
                    </div>
                </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-4 overflow-hidden">
                    <img class="rounded-4" style="border-radius: 1.5rem;display:block; vertical-align:middle;" src="{{route('image')}}/Kilimanjaro.jpeg" alt="Mt Kilimanjaro">
                    <div class="card-body py-4 px-3 ">
                        <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                            <h4 class="fw-bold ">Mt Kilimanjaro</h4>
                            <p class="fw-bold">$2250</p>
                        </div>
                        <div class="align-items-center px-2">
                            <p class="fw-bold">
                                <strong>Mount Kilimanjaro,</strong>
                                 The highest peak of Africa is on
                                 the bucket of most adventure enthusiasts.
                                  Climbing Mountain Kilimanjaro gives a truly
                                   unique wilderness experience as you ascend
                                    to the peak of the world’s highest free-standing
                                     mountain.The views from the mountain are spectacular.
                                      You will have endless opportunities to capture 
                                      photos of breathtaking vistas, unique animals and 
                                      beautiful vegetation far away from hustle and bustle
                                       of civilization. When you visit Mount kilimanjaro, 
                                       you're visiting one of the world’s most iconic natural wonders.
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Other places/Destinations section -->
<section class="" style="margin-bottom: 5rem;">
    <div class="container-fluid">
        <div class="card rounded-4 mt-5">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/mount-meru.jpg" alt="Mount-Meru">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Mount Meru</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $800</p></div>
                            </div>
                            <div class="mt-4 me-2">                              
                                    <p class="card-text text-center"> 
                                        <strong>Mount Meru</strong>
                                    The little brother of Mount kilimanjaro
                                    is often overlooked and brushed aside.Despite being the 
                                    second highest mountain in Tanzania. Mount Meru is one of
                                    the most underrated treks in the world.it had it all adventure,
                                    fun mountain huts along the way and uniquely breathtaking views
                                     and scenery from the summit of the ash cone and cresent volcano crater.
                                    Surrounding savanna and support a forest that hosts diverse wildlife,
                                    including nearly 400 species of birds,and also monkeys, girrafes and leopard.
                                    </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

        <div class="card rounded-4 mt-3">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/hyena.jpeg" alt="Selous Game Reserve">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Sealous</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $999</p></div>
                            </div>
                            <div class="mt-4 me-2">                              
                                <p class="card-text text-center"> 
                                    <strong>Sealous Game Reserve</strong>
                                    is the home of idyllic beaches, balmy
                                     weather &amp; warm tropical waters.
                                      This archipelago is renowed for clear
                                       warm waters, coral reefs and rich marine
                                        diversity making it a perfect under-water
                                         destination for snorkelling and diving.
                                         Zanzibar has cultural influences from all
                                          around the world including the middle East,
                                           India, Europe and Africa.This diversity is
                                            what makes Zanzibar such a unique place to
                                             visit and chance to participate  in a variety
                                              of cultural immersion activities. 
                                </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

        <div class="card rounded-4 mt-3">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/Tembo.jpeg" alt="Tarangire">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Tarangire</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $900</p></div>
                            </div>
                            <div class="mt-4 me-2">                              
                                    <p class="card-text text-center"> 
                                        <strong>Tarangire Natinal Park</strong>
                                        is one of the most picturesque places you'
                                         ever visited. As our Jeep rolled along the 
                                         bumpy roads, You would often peer out at the
                                          vast green plains,lush wetlands and beautiful 
                                          Acacia trees and feel as though you were driving
                                           through a painting. Known to be one of the best
                                            places to observe large herds of elephants
                                             population in Tanzania. Throughout your trip 
                                             you will truly incredible to witness so many 
                                             different types of animals all within one ecosystem. 
                                    </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

        <div class="card rounded-4 mt-3">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/Pundamilia2.jpeg" alt="Ngorongoro">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Ngorongoro</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $1370</p></div>
                            </div>
                            <div class="mt-4 me-2">                              
                                    <p class="card-text text-center"> 
                                        <strong>Ngorongoro Crater</strong>
                                        is the one of the eighth wonder of the world,
                                         the crater is famous for the very high wildlife
                                          concentration that finds in this volcanic caldera
                                           an ideal habitat in all seasons.The crater Surrounding
                                            are covered by forest,while inside bordered by 
                                            600 meters high,various ecosytem have developed
                                             such as pastures, swamp and even forest.You can 
                                             spot many animals such as zebra, elephant, black-maned
                                              lions, leopard, rhinos, buffaloes, rare animals which 
                                              live and reproduce here.
                                    </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

        <div class="card rounded-4 mt-3">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/Manyara.jpeg" alt="Manyara">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Manyara</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $800</p></div>
                            </div>
                            <div class="mt-4 me-2">                              
                                    <p class="card-text text-center"> 
                                    The little brother of Mount kilimanjaro
                                    is often overlooked and brushed aside.Despite being the 
                                    second highest mountain in Tanzania. Mount Meru is one of
                                    the most underrated treks in the world.it had it all adventure,
                                    fun mountain huts along the way and uniquely breathtaking views
                                     and scenery from the summit of the ash cone and cresent volcano crater.
                                    Surrounding savanna and support a forest that hosts diverse wildlife,
                                    including nearly 400 species of birds,and also monkeys, girrafes and leopard.
                                    </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

        <div class="card rounded-4 mt-3">       
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4" src="{{route('image')}}/TwoLion.jpeg" alt="Ruaha">
                </div>
                
                    <div class=" col-lg-8 align-items-center text-center pe-3">
                        <div class="card-body text-center ms-4">
                            <div class="row text-center pt-4">
                                <div class="col-md-6  text-start "> <h5>Ruaha</h5></div>
                                <div class="col-md-5  text-end fw-bold"><p>From $1000</p></div>
                            </div>
                            <div class="mt-4 me-2">                                                                 
                                    <p class="card-text text-center">
                                        <strong>Ruaha National Park</strong> 
                                        is the renowned for its excellent wildlife-sighting
                                         opportunities.combined being largest national park
                                          in africa might not come with world-famous reputation,
                                          Ruaha National Park is most famous for its fascinating
                                           beauty, ancient baobao trees,picturesque river and
                                            dramatic scenes.The wider Ruaha area host 10% of the
                                             world’s lion population and has been a lion conservation
                                              unit since 2005, which offer incredibly exciting game
                                               viewing experience to its game viewing experiences
                                                to its visitors
                                    </p>
                            </div>
                        </div>
                   </div>
            </div>
        </div>

    </div>
</section >





@endsection
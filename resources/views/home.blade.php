@extends('layouts.master')
@section('content')
    
<!-- Welcome section-->
 <section class="" style="padding-top: 7rem; padding-bottom:3rem;">
    <div> <img class="bg-holder img-fluid" style="background-image: url({{route('image')}}/bg1.svg)">
        
    </div>
  <div class="container">
      <div class="row align-self-center ">
          <div class="col-md-5 ps-5 col-lg-5 text-start">
            <img class="img-fluid rounded-4" src="{{route('image')}}/stretching-lion.jpeg" width="100%" heigt="100%" alt="Traveller">
               
          </div>
          <div class="col-md-7 col-lg-6   text-md-start">
             <h1 class="fw-bold font">
                 "Travel and Live to the fullest of your life <br> with Njere Tours and Safaris"
                </h1>
                <h4 class="text-danger mb-3">Let your eyes wonder with different experience and best places in our home land Tanzania</h4>
                <P class="mb-4" style="font-weight: 500 !important">We introduce you to the wonders and unique beauty in way that only a small,
                    private company is capable with individually customized
                     services designed to ensure you experience firsthand the magic our land
                     and people have to offer.
                    For less dollars but more value and memorable safaris, 
                    travel with us and see the difference.</P>
          </div>
      </div>
  </div>
 
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-5 col-lg-6 order-3 text-end">
            <div class="row">           
                 <div class=" d-flex mt-3"> 
                     <div class="card rounded-4"><img class="img-fluid rounded-4" src="{{route('image')}}/Pundamilia.jpeg" width="" alt="hotel"></div>
                     <div class="card rounded-4"><img class="img-fluid rounded-4" src="{{route('image')}}/lion.jpeg" width="" alt="hotel"></div>   
                 </div>
                 <div class="d-flex mt-2"> 
                    <div class="card rounded-4"><img class="img-fluid rounded-4" src="{{route('image')}}/maasai2.jpeg" width="" alt="hotel"></div>
                    <div class="card rounded-4"><img class="img-fluid rounded-4" src="{{route('image')}}/maasai kids.jpeg" width="" alt="hotel"></div>    
                </div>
            </div>           
        </div>
        <div class="col-md-7 col-lg-6  text-md-start">
           <h1 class="fw-bold font">
               The beauty of Nature and Culture, thats Our Story
              </h1>
              <P class="mb-4" style="font-weight: 500 !important">We introduce you to the wonders and unique beauty in way that only a small,
                  private company is capable with individually customized
                   services designed to ensure you experience firsthand the magic our land
                   and people have to offer.
                  For less dollars but more value and memorable safaris, 
                  travel with us and see the difference.</P>
        </div>
    </div>
</div>
</section>

<!--services section-->
<section class="pt-5 mb-3">
    <div class="container">
        <div class="text-center" style="margin-bottom: 4rem;">
            <h3 class="fw-bold ">What services we offer</h3>
            <h5>Best Categories of services that are for your Enjoyment</h5>
        </div>

        <div class="row">

            <div class="col-lg-4" style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4 ">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/hiking.jpeg" width="100%" alt="hiking">
                        <h4 class="mb-1" >Hiking</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            Tanzanian National Parks feature the richest 
                            variety of wildlife and nature in all of Africa.
                             Let us guide you to the wonders of Tanzania
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/Cheetah.jpeg" width="100%" alt="wildelife">
                        <h4 class="mb-1" >Wildlife</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            Exploring the wilderness in national parks means truly
                             intimate encounters with the nature. Undisturbed by other
                              visitors, you will see Tanzania at its rawest.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/stanley.jpeg" width="100%" alt="guider">
                        <h4 class="mb-1" >Meet the Guides</h4>                    
                        <p class="p-2" style="font-weight: 500 !important">
                            Our safari guides know every nook and cranny of 
                            the National Parks.They will lead  your way to the
                             hidden wildlife treasures of the african Savannah
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-sm-6 " style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="" src="{{route('image')}}/hotel.png" width="65" alt="hotel">
                        <h4 class="mb-1" >Hospitality Partner</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            Our safari itineraries feature only the best hotels
                             and lodges,known for their unmatched service and comfort standards.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row rows ">

            <div class="col-lg-4" style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/stanley-incar.jpeg" width="100%" alt="vacation">
                        <h4 class="mb-1" >Affordable Transport</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            You will be provided with affordable transport
                            for your adventure, a great and comforting
                            vehicle accomodating enough number.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 " style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/baloon.jpeg" width="100%" alt="Air bollon">
                        <h4 class="mb-1" >Baloons</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            A bird’s-eye view of the savannah is truly a sight
                            to behold.Captivating scenic vistas and lifetime 
                            memories guaranteed!.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 " style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="img-fluid rounded-4" src="{{route('image')}}/stanley-orphanage.jpeg" width="100%" alt="plane">
                        <h4 class="mb-1" >Giving Back to Community</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            The first project we've got involved with is the
                            provisional support to the orphanage center at Maji ya Chai. 
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 " style="margin-bottom: 3rem;">
                <div class="card service-card shadow-hover border-0 mx-2 rounded-3 text-center align-items-center ">
                    <div class="card-body p-4">
                        <img class="" src="{{route('image')}}/Info.png" width="60" alt="infomation">
                        <h4 class="mb-1" >Information</h4>
                        <p class="p-2" style="font-weight: 500 !important">
                            Travel experience should be shared, it will most
                            fulfilled when you do it with your Tour guide.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    
</section>

<!--section for top selling Places-->
    <section class="pt-5 mb-5">
        <div class="container">
            <div class="text-center" style="margin-bottom: 3rem;">
              <h3 class="fw-bold"> Top Places</h3>
              <h5>Top most selling Place best for visiting</h5>
            </div>
            <div class="row ">
                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 border-0 overflow-hidden">
                        <img class="rounded-3 " style="border-radius: 1.5rem; display:block; vertical-align:middle;" src="{{route('image')}}/Chui.jpeg" alt="Chui">
                        <div class="card-body py-4 px-3 ">
                            <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                                <h4 class="fw-bold ">Serengeti</h4>
                                <span class="fs-5">$2.9k</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/calender.png" width="40" style="margin-right: 14px" alt="place">                              
                                <span>8 Days Trip</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/location.png" width="40" style="margin-right: 14px" alt="place">
                                <span>Mara,Tanzania</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/task.png" width="40" style="margin-right: 14px" alt="place">
                                <span>12 Activities</span>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 border-0 overflow-hidden">
                        <img class="rounded-3" style="border-radius: 1.5rem;display:block; vertical-align:middle;" src="{{route('image')}}/zanzibar.jpg" alt="Zanzibar">
                        <div class="card-body py-4 px-3 ">
                            <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                                <h4 class="fw-bold ">Zanzibar</h4>
                                <span class="fs-5">$2.1k</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/calender.png" width="40" style="margin-right: 14px" alt="place">
                                <span>6 Days Trip</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/location.png" width="40" style="margin-right: 14px" alt="place">
                                <span>Arusha,Tanzania</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/task.png" width="40" style="margin-right: 14px" alt="place">
                                <span>17 Activities</span>
                            </div> 
                        </div>
                        </div>
                    </div>

                <div class="col-md-4 mb-4">
                    <div class="card rounded-3 border-0 overflow-hidden">
                        <img class="rounded-3" style="border-radius: 1.5rem;display:block; vertical-align:middle;" src="{{route('image')}}/Kilimanjaro.jpeg" alt="Kilimanjaro">
                        <div class="card-body py-4 px-3 ">
                            <div class="d-flex flex-column flex-lg-row justify-content-between text-secondary mb-3">
                                <h4 class="fw-bold ">Mt Kilimanjaro</h4>
                                <span class="fs-5">$2.41k</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/calender.png" width="40" style="margin-right: 14px" alt="place">
                                <span>7 Days Trip</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/location.png" width="40" style="margin-right: 14px" alt="place">
                                <span>Kilimanjaro,Tanzania</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{route('image')}}/task.png" width="40" style="margin-right: 14px" alt="place">
                                <span>10 Activities</span>
                            </div> 
                        </div>                    
                    </div>

                </div>

            </div>
            <div class="text-center">
                <a href="/places" class="align-items-center btn text-light rounded-pill bg-gradient " style="background-color: #05BEEE;">view more Places </a>
            </div>
        </div>
    </section>

    <!--Section for information for booking-->
    <section class="pt-5 mb-5">
        <div class="container">
            <div class="text-center mb-3">
                <h3 class="fw-bold"> Want to Book for your Next Trip?</h3>
                <h5 class="text-start"> It's very easy with just simple Steps</h5>
            </div>
            
            <div class="row">
                <div class="col-lg-6" style="margin-right: 15rem;">
                    <div class="align-items-start d-flex">
                        <div class="p-3 mx-2" style="border-radius: 14px; width:60px; height:60px; background-color:#d8a10a;">
                            <img src="{{route('image')}}/sqare.png" width="30" style="margin-right: 13px" alt="payment">                       
                        </div>
                        <div class="pt-1">
                            <h6 class="fw-bold">Pick a Place</h6>
                            <p>Choose your favorite place. Any where you want
                                to travel in Tanzania.</p>
                        </div>
                    </div>

                    <div class="align-items-start d-flex">
                        <div class="p-3 mx-2" style="border-radius: 14px; width:60px; height:60px; background-color:#055f94;">
                            <img src="{{route('image')}}/payment.png" width="30" style="margin-right: 14px" alt="payment">
                       
                        </div>
                        <div class="pt-1">
                            <h6 class="fw-bold">Make Payment</h6>
                            <p>After choosing your  Perfect Place. Now complete
                                the payment and be ready for your Trip. </p>
                        </div>
                    </div>

                    <div class="align-items-start d-flex">
                        <div class="p-3 mx-2" style="border-radius: 14px; width:60px; height:60px; background-color:#ac4002;">
                            <img src="{{route('image')}}/car.png" width="30" style="margin-right: 14px" alt="transport">                       
                        </div>
                        <div class="pt-1">
                            <h6 class="fw-bold">Arrive to the Airport on selected Date</h6>
                            <p>Make sure you are on time to the Airport so that
                                you don't miss your Adventure. </p>
                        </div>
                    </div>
                    <div class="text-center mt-5 ms-5">
                        <h4 class="text-danger">You're Done with the steps, Now Enjoy your Trip Safely</h4>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-start  mb-4">
                    <div class="card rounded-3 border-0 overflow-hidden ">
                        <img class="rounded-3" style="border-radius: 1.5rem;display:block; vertical-align:middle;" src="{{route('image')}}/Kilimanjaro.jpeg" alt="Kilimanjaro">
                        <div class="card-body py-3 px-3 ">
                            <div class=" text-secondary mb-3">
                                <h6 class="fw-bold ">  Trip Mt Kilimanjaro</h6>
                                <p>12-25 July |by Anderson Valensky </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">               
                                <span class="bg-secondary icon-item" ><img src="#" alt=""></span>
                                <span class="icon-item bg-secondary"><img src="#" alt=""></span>
                                <span class="icon-item bg-secondary"><img src="#" alt=""></span>
                                
                            </div>
                            <div class="d-flex align-items-center">                               
                                <span>10 people going</span>
                            </div> 
                        </div>                    
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </section>

    <!-- section for subscription-->

   <!-- <section class="mb-5 pt-5">
        <div class="container">
            <div class="py-5  px-5"style="background-color: rgba(184, 213, 184, 0.3); border-radius:200px 200px 20px 20px;">
                <div class="row justify-content-center pt-3">
                    <div class=" col-lg-8 align-items-center text-center mb-5 ">
                        <h4 class="fw-bold mb-5 pt-5">You want to get more information, latest news from us
                            and interesting offer, Subscribe below.</h4>
                    
                    <div class="align-items-center text-center">
                        <form class="row gx-3 align-items-center  w-lg-75 mx-auto" >
                            <div class="col-sm-8 text-center align-self-center">
                                <div class="input-group ">
                                    <input type="email" class="form-control rounded-pill" id="inputEmail4" placeholder="email">
                                  </div>
                            </div>
                            <div class="col-sm-auto mt-1">
                                <button type="submit" class="btn  rounded-pill" style="background-color: #05BEEE;">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </section>  -->

   



@endsection
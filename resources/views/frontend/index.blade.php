@extends('frontend.layout.master')
@section('title', 'Home')
@section('main-content')

    <div class="banner banner_home">

        <video autoplay="" muted="" loop="" playsinline="">
            <source
                src="https://player.vimeo.com/external/442722090.hd.mp4?s=92056c84c9ee9ea1d5c3927186fd6d7583d718e0&amp;profile_id=175"
                type="video/mp4">
        </video>
        <div class="banner_overlay">
            <div class="hostel_store">
                <div class="banner_content">
                    <div class="video_wrapper_content ">
                        <p class="page_title animate__animated animate__zoomIn animate__slower">Welcome to Hostel
                            Communities</p>

                    </div>
                    <div class="hostel_row justify-content-center">
                        <div class="col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="search-hostel">
                                <div class="top">
                                    <p>Looking For Offers ?
                                        <span class="mx-2"> Explore offers</span>
                                    </p>
                                </div>
                                <form action="/hostel" method="post" class="hostelSearch">

                                    <div class="form-row">


                                        <div class="input-group col-md-4 col-12 col-sm-12">
                                            <input type="text" class="form-control location"
                                                placeholder="Where! any hostel names?" name="name">
                                            <div class="input-group-append">
                                                <button class="location-button" type="button">
                                                    <i class="fas fa-search-location"></i>

                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4 my-md-3 district col-12 col-sm-12">
                                            <label for="inputDistrict">City <i class="fas fa-map-marker-alt mx-2"
                                                    aria-hidden="true"></i></label>
                                            <input type="text" placeholder="Select District" class="form-control options"
                                                name="city" list="district" autocomplete="off">


                                            <datalist id="district">
                                                <option value="Maitidevi"> Maitidevi </option>
                                                <option value="Dillibazar"> Dillibazar </option>
                                                <option value="Gyaneshwor"> Gyaneshwor </option>
                                                <option value="Dillibazar," maitidevi=""> Dillibazar, Maitidevi </option>
                                                <option value="New" plaza,="" putalisadak=""> New Plaza, Putalisadak
                                                </option>
                                                <option value="Ghattekulo"> Ghattekulo </option>
                                                <option value="Anamnagar"> Anamnagar </option>
                                                <option value="New" baneshwor,="" sangam="" chowk=""> New
                                                    Baneshwor, Sangam Chowk </option>
                                                <option value="Hanumansthan"> Hanumansthan </option>
                                                <option value="Tinkune"> Tinkune </option>
                                                <option value="Putalisadak," dhobidhara=""> Putalisadak, Dhobidhara
                                                </option>
                                                <option value="New" baneshwor=""> New Baneshwor </option>
                                                <option value="Kareshwor" marga=""> Kareshwor Marga </option>
                                                <option value="Kumari" marg,="" putalisadak=""> Kumari Marg, Putalisadak
                                                </option>
                                                <option value="Babar" mahal=""> Babar Mahal </option>
                                                <option value="New" plaza="" road,="" putalisadak=""> New Plaza
                                                    Road, Putalisadak </option>
                                                <option value="Kalikasthan"> Kalikasthan </option>
                                                <option value="Putalisadak"> Putalisadak </option>
                                                <option value="Dhumbarahi"> Dhumbarahi </option>
                                                <option value="Shantinagar"> Shantinagar </option>
                                                <option value="Subidhanagar," tinkune=""> Subidhanagar, Tinkune
                                                </option>
                                                <option value="Maitidevi," birendra="" marg=""> Maitidevi,
                                                    Birendra Marg </option>
                                                <option value="Buddhanagar," new="" baneshwor=""> Buddhanagar, New
                                                    Baneshwor </option>
                                                <option value="Naya" bazar=""> Naya Bazar </option>
                                                <option value="Koteshwor" chowk=""> Koteshwor Chowk </option>
                                                <option value="Near" chundevi="" temple=""> Near Chundevi Temple
                                                </option>
                                                <option value="Balkumari"> Balkumari </option>
                                                <option value="New" baneshwor,="" global="" bank=""> New
                                                    Baneshwor, Global Bank </option>
                                                <option value="Minbhawan"> Minbhawan </option>
                                                <option value="Babarmahal"> Babarmahal </option>
                                                <option value="Shankhamul," new="" baneshwor=""> Shankhamul, New
                                                    Baneshwor </option>
                                                <option value="New" baneshwor,="" aloknagar=""> New Baneshwor,
                                                    Aloknagar </option>
                                                <option value="Old" baneshwor,="" bhimsen="" khola=""
                                                    marga=""> Old Baneshwor, Bhimsen Khola Marga </option>
                                                <option value="Shanti" nagar=""> Shanti Nagar </option>
                                                <option value="Battisputali"> Battisputali </option>
                                                <option value="Buddhanagar"> Buddhanagar </option>
                                                <option value="Sinamangal"> Sinamangal </option>
                                                <option value="Samakushi"> Samakushi </option>
                                                <option value="Thamel," galkopakha=""> Thamel, Galkopakha </option>
                                                <option value="Ghattekulo," anamnagar=""> Ghattekulo, Anamnagar
                                                </option>
                                                <option value="Old" baneshwor=""> Old Baneshwor </option>
                                                <option value="Sachetan" marg,="" katyani=""> Sachetan Marg, Katyani
                                                </option>
                                                <option value="Setopul," anamnagar=""> Setopul, Anamnagar </option>
                                                <option value="Milan" chowk,="" baneshwor=""> Milan Chowk, Baneshwor
                                                </option>
                                                <option value="Milan" chowk,="" bhimsengola="" marg=""> Milan
                                                    Chowk, Bhimsengola Marg </option>
                                                <option value="Bhimsengola" marg,="" new="" baneshwor="">
                                                    Bhimsengola Marg, New Baneshwor </option>
                                                <option value="Prashit" marg,="" maharajgunj=""> Prashit Marg, Maharajgunj
                                                </option>
                                                <option value="seti" opi="" marga=""> seti opi marga
                                                </option>
                                                <option value="Rohini" marg="" old="" baneshwor=""
                                                    -10=""> Rohini Marg old Baneshwor -10 </option>
                                                <option value="Basuki" marg,="" 44600=""> Basuki Marg, 44600
                                                </option>
                                                <option value="Alok" nagar,="" baneshwor=""> Alok Nagar, Baneshwor
                                                </option>
                                                <option value="Samakhusi" chowk=""> Samakhusi Chowk </option>
                                                <option value="Dhulikhel"> Dhulikhel </option>
                                                <option value="Balbhadra" marga=""> Balbhadra Marga </option>
                                                <option value="Kalimati," ganeshman="" singh="" road="">
                                                    Kalimati, Ganeshman Singh Road </option>
                                                <option value="Gairigaon," shinamangal=""> Gairigaon, Shinamangal
                                                </option>
                                                <option value="Kathmandu"> Kathmandu </option>
                                                <option value="Kalanki"> Kalanki </option>
                                                <option value="Kalikasthan," dillibazar=""> Kalikasthan, Dillibazar
                                                </option>
                                                <option value="Pipalbot," dillibazar=""> Pipalbot, Dillibazar </option>
                                                <option value="Maitidevi," dillibazar=""> Maitidevi, Dillibazar </option>
                                                <option value="Maitidevi," near="" maitidevi="" mandir="">
                                                    Maitidevi, Near Maitidevi Mandir </option>
                                                <option value="Buddanagar"> Buddanagar </option>
                                                <option value="Buddanagar," near="" min=""
                                                    bhavan=""> Buddanagar, Near Min Bhavan </option>
                                                <option value="Mid" baneshwor,="" katyani=""> Mid Baneshwor,
                                                    Katyani </option>
                                                <option value="Itahari"> Itahari </option>
                                                <option value="Bhinshangola"> Bhinshangola </option>
                                                <option value="Valmiki" road,="" katahar="" chowk,="" bharatpur="">
                                                    Valmiki Road, Katahar Chowk, Bharatpur </option>
                                                <option value="Rampur," bharatpur=""> Rampur, Bharatpur </option>
                                                <option value="New" baneshwor,="" thapa="" gau=""> New
                                                    Baneshwor, Thapa Gau </option>
                                                <option value="Chabahil"> Chabahil </option>
                                                <option value="Mitra" park,="" chabahil,="" kathmandu=""> Mitra Park,
                                                    Chabahil, Kathmandu </option>
                                                <option value="Dillibazar" height="" marg,="" kathmandu="">
                                                    Dillibazar Height Marg, Kathmandu </option>
                                                <option value="Near" min="" bhavwan=""> Near Min Bhavwan
                                                </option>
                                                <option value="Kupondal"> Kupondal </option>
                                                <option value="Mitra" park,="" chabahil=""> Mitra Park, Chabahil
                                                </option>
                                                <option value="Satdobato"> Satdobato </option>
                                                <option value="Pulchowk"> Pulchowk </option>
                                                <option value="Kupandol"> Kupandol </option>
                                                <option value="Kumaripati"> Kumaripati </option>
                                                <option value="Koteshwor"> Koteshwor </option>
                                                <option value="Mid-Baneshwor," katyani=""> Mid-Baneshwor, Katyani
                                                </option>
                                                <option value="Lalitpur"> Lalitpur </option>
                                                <option value="Mid-Baneshwor"> Mid-Baneshwor </option>
                                                <option value="Durbarmarg"> Durbarmarg </option>
                                                <option value="Patan"> Patan </option>
                                            </datalist>
                                        </div>

                                        <div class="form-group  col-md-4  my-md-3 col-sm-12 col-12">
                                            <label for="inputDistrict">Gender <i class="fas fa-restroom mx-2"></i></label>
                                            <select class="form-select options" name="gender"
                                                aria-label="Default select example">
                                                <option value="">Gender</option>
                                                <option value="boys">Male</option>
                                                <option value="girls">Female</option>
                                            </select>
                                        </div>
                                        <div class=" form-group col-md-4 my-md-3 col-12 col-sm-12">
                                            <label for="inputDistrict">Price <i
                                                    class="fas fa-money-check mx-2"></i></label>
                                            <select class="form-select options" name="price"
                                                aria-label="Default select example">
                                                <option value="">
                                                    Select Price Range
                                                </option>
                                                <option value="9000">
                                                    less than Rs. 9,000
                                                </option>
                                                <option value="12000">
                                                    less than Rs. 12,000
                                                </option>
                                                <option value="15000">
                                                    less than Rs. 15,000
                                                </option>
                                                <option value="20000">
                                                    less than Rs. 20,000
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-sm-12 d-flex align-items-center justify-content-center position-relative pt-3">
                                            <button type="submit" class="btns">Show Hostels</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_swiper"        >
        <div class="swiper_box heading_container">
            <div class="section_heading">
                <h2 class="underline"><span> Available Hostel </span></h2>
            </div>
        </div>
        <div class="swiper_box">
            <div class="swiper_wrapper ">
                <div class="swiper_slide">
                    <div class="d-block">
                        <div class="hostel_row">
                           <div class="col-md-3 col-sm-12 col-12 bg-white">
                                <a class="hostel-card" href="" tabindex="-1">
                                    <div class="hostel-view-content h-100">
                                        <div class="image">
                                            <img src="https://yourhostel.com.np/storage/media/57/5Star2.png" alt=" no image found" style="height: 200px" />
                                            <div class="tags"></div>
                                        </div>

                                        <div class="lower-content">
                                            <div class="heading-section mr-3 text-center d-flex flex-wrap">
                                                <div class="title">
                                                    <h5 class="h4 text-center hostel-title">
                                                        Five Star Boys Hostel
                                                    </h5>
                                                </div>

                                                <div class="rating d-flex">
                                                    <img class="rating-icon" src="{{ asset('frontend/assets/images/aaa.png') }}" alt="image" style="height: 18px;" />
                                                    <h5 class="px-1">
                                                        0
                                                    </h5>
                                                </div>

                                            </div>

                                            <div class="d-flex flex-wrap py-3">
                                                <div class="d-lg-flex">
                                                    <span>
                                                        Rs.
                                                    </span>
                                                    <span class="prices">
                                                        10,500
                                                    </span>
                                                </div>
                                                <div class="hos-name align-items-center d-lg-flex mx-sm-0 mx-xl-4">
                                                    <i class="fas fa-restroom my-xl-0 mx-2"></i>
                                                    Boys Hostel
                                                </div>
                                            </div>
                                            <div class="">
                                                <i class="fa fa-map-marker"></i>

                                                Maitidevi ,Kathmandu
                                            </div>
                                        </div>
                                    </div>
                                </a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

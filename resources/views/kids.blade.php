@extends('layouts.layout')

@section('content')

    <style>
    .row {
    margin-right: -15px;
    margin-left: -15px;
    }

    .caption {
        position: relative;
        overflow: hidden;
    }
    .caption__media {
        display: block;
        min-width: 100%;
        max-width: 100%;
        height: auto;
    }
        .baccha {
            padding-bottom: 10px;
        }
    .mod {
        margin-bottom: 1.45em;
        clear: both;
    }
    h1.mod--title__special {
        font-size: 2em;
        margin-bottom: 0.4em;
        padding: 0;
    }
    .mod--title__special {
        background: url("image/kids/title-bg.png") transparent repeat-x center left;
    }
    .mod--title__special {
        color: #3a3a3a;
        text-align: center;
        font-size: 1.5em;
        font-family: Helvetica,Arial,sans-serif;
        font-weight: bold;
        margin-bottom: 1em;
    }
    .mod--title__special span {
        background-color: #fff;
        padding: 0 1em;
    }
    .chobir_title {
        background: none !important;
        font-size: 1.1em;
        padding: 0;
        min-height: 30px;
        font-family: "StRydeBold", sans-serif;
        color: #3a3a3a;
    }
    </style>


    <div class="container" style="background-color: white ">
        <div class="row">
            <section class="row">
                <div class="col-xs-12">
                    <h1 align="center" style="color: black">Kids</h1>
                    <p align="center" style="color: black">Shop our exciting range of kids art and craft supplies for children of all ages. Find&nbsp;essential kids crafting <br> components&nbsp;from chenille pipe cleaners&nbsp;to felt sheets,&nbsp;activity kits and art sets, we've got everything a creative<br> kid could need to make whatever they can imagine!</p>
                </div>
            </section>

            <section class="row">
                <div class="col-xs-12">
                    <div class="col-sm-8 col-xs-12 baccha">
                        <a href="{{url('kids-offers')}}">
                            <div class="caption">
                                <img src="image/kids/kids-holidays.jpg" class="caption__media" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6 baccha">
                                <div class="caption">
                                    <img src="image/kids/PYOCeramics.jpg" class="caption__media" alt="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-6 baccha">
                                <div class="caption">
                                    <img src="image/kids/KidsValueBag.jpg" class="caption__media" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mod">
                <div class="col-xs-12">
                    <h1 class="mod--title__special">
                        <span> In This Category</span>
                    </h1>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6 col-md-3" style="height: 450px">
                            <a href="{{url('Kids-Dressing-Up')}}">
                                <div class="caption">
                                <img src="image/kids/KIDS-DRESSING-UP-cat-squared.jpg" class="caption__media" alt="">
                                </div>
                                <div class="chobir_title" style="text-decoration: underline; padding-top: 15px">
                                    <span>Kids Dressing Up</span>
                                </div>
                                <div style="padding-top: 10px">
                                    <h9 style="font-size: 1em; color: black;">Face Painting, Fancy Dress Costumes, Masks etc.</h9>
                                    <a href="{{url('Kids-Dressing-Up')}}" style=" padding-top: 10px;"><br><h9 style="font-size: 1em; color: red;">See all</h9></a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 col-md-3" style="height: 450px">
                            <a href="{{url('Kids-Stationery')}}">
                                <div class="caption">
                                <img src="image/kids/kids-stationary-cat-squared.jpg" class="caption__media" alt="">
                                </div>
                                <div class="chobir_title" style="text-decoration: underline; padding-top: 15px">
                                    <span>Kids Stationery</span>
                                </div>
                                <div style="padding-top: 10px">
                                    <a href="{{url('Kids-Stationery')}}"><br><h9 style="font-size: 1em; color: red;">See all</h9></a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 col-md-3" style="height: 450px">
                            <a href="{{url('Kids-Toys-&-Puzzles')}}">
                                <div class="caption">
                                <img src="image/kids/KIDS-TOYS-PUZZLES-cat-squared.jpg" class="caption__media" alt="">
                                </div>
                                <div class="chobir_title" style="text-decoration: underline; padding-top: 15px">
                                    <span>Kids Toys & Puzzles</span>
                                </div>
                                <div style="padding-top: 10px">
                                    <h9 style="font-size: 1em; color: black;">Baby & Toddler Toys, Building & Construction Kits, Kids Jigsaw Puzzles, Puppets etc.</h9>
                                    <a href="{{url('Kids-Toys-&-Puzzles')}}"><br><h9 style="font-size: 1em; color: red;">See all</h9></a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 col-md-3" style="height: 450px">
                            <a href="{{url('New-In-Kids')}}">
                                <div class="caption">
                                    <img src="image/kids/new-arrivals.jpg" class="caption__media" alt="">
                                </div>
                                <div class="chobir_title" style="text-decoration: underline; padding-top: 15px">
                                    <span>New In Kids</span>
                                </div>
                                <div style="padding-top: 10px">
                                    <a href="{{url('New-In-Kids')}}"><br><h9 style="font-size: 1em; color: red;">See all</h9></a>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

@endsection
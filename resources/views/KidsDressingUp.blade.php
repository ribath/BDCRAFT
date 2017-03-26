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
        .line_wrapper {
            float: left;
            position: relative;
        }
        hr.dashed {
            border-bottom: 2px dashed #c3937f;
            background-color: white;
        }
    </style>

    <div class="container" style="background-color: white ">
        <div class="row">

            <section class="row">
                <div class="col-xs-12">
                    <h1 align="center" style="color: black">Kids Dressing Up</h1>
                    <p align="center" style="color: black">Inspire your little one's big imagination with fun fancy dress and face paints for all ages. Whether they need the<br> perfect outfit for a school project, or to dress up as a cute cheeky monkey, you'll find everything you need.<br> And, when it comes to face paints, from complete Snazaroo kits to individual classic colours, we've got it<br> perfectly covered.</p>
                </div>
            </section>

            <section class="mod">
                <div class="col-xs-12">
                    <div class="line_wrapper col-xs-12"><hr class="dashed"/></div>
                </div>
            </section>
        </div>
    </div>






@endsection
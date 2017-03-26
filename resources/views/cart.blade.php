@extends('layouts.layout')
@section('content')

    <section ng-app="handicrafts">

        <br>
        <br>
        <br>

        <div class="container" ng-controller="MainControllers">
            <div class="row" >
                <table class="table table-condensed" style="background-color:white">
                    <thead style="background-color:#cc99ff; color:grey; height:50px">
                    <tr class="cart_menu" style="">
                        <td class="image">Item</td>
                        <td class="description">Description</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>


                    @for($i = 0; $i <count($allCarts); $i++)

                        <tbody>
                        <tr id="rowCart-<?php echo $i;?>">

                            <td >
                                <a href=""><img src="" alt=""></a>
                            </td>

                            <td >
                                <h4><a href="">{{$allCarts[$i]->name}}</a></h4>

                            </td>
                            <td >
                                <div  id="cartPrice-<?php echo $i;?>">{{$allCarts[$i]->price}}</div>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <button id="plusItem-<?php echo $i;?>" class="plusBtn"> <i class="fa fa-plus"></i> </button>
                                    <div  class="quantityOfCart" id="quantityOfCart-<?php echo $i;?>" style="display:inline; padding: 2px 16px 2px 16px; border-style:groove; color:black"> 1 </div>
                                    <button id="minusItem-<?php echo $i;?>" class="minusBtn">  <i class="fa fa-minus"></i> </button>

                                </div>
                            </td>
                            <td>
                                <div id="cartTotalPrice-<?php echo $i;?>">{{$allCarts[$i]->price}}</div>
                            </td>
                            <td>

                                <button id="deleteCart-<?php echo $i;?>" class="deleteBtn" ng-click="delete({{$allCarts[$i]->id}})"><i class="fa fa-times"></i></button>


                            </td>


                        </tr>
                        </tbody>

                    @endfor

                </table>

            </div>
        </div>
        </body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(function(){
                var thetitle = $('title').text();

                $(".plusBtn").click(function(){
                    var id = $(this).attr('id');
                    var n = id.replace("plusItem",'');

                    //$("#blah"+n).hide();
                    var countNotif = parseInt($('#quantityOfCart'+n).text());
                    var price = parseInt($('#cartPrice'+n).text());
                    countNotif++;
                    var totalPrice = price*countNotif;
                    //alert(totalPrice);
                    $('#quantityOfCart'+n).text(countNotif).show();
                    $('#cartTotalPrice'+n).text(totalPrice).show();
                });

            });

            $(function(){
                $(".minusBtn").click(function(){
                    var id = $(this).attr('id');
                    var n = id.replace("minusItem",'');

                    //$("#blah"+n).hide();
                    var countNotif = parseInt($('#quantityOfCart'+n).text());
                    var price = parseInt($('#cartPrice'+n).text());
                    if(countNotif>1)
                        countNotif--;
                    var totalPrice = price*countNotif;
                    $('#quantityOfCart'+n).text(countNotif).show();
                    $('#cartTotalPrice'+n).text(totalPrice).show();
                });
            });

            $(function(){
               $(".deleteBtn").click(function(){
                   var id = $(this).attr('id');
                   var n = id.replace("deleteCart",'');
                   $('#rowCart'+n).hide();
               })
            });

        </script>
    </section>
@endsection

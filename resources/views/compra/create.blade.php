@extends('layouts.plantillapadre')

@section('plantillapadre')
<?php

?>


    
Compra
 
<link href="{{asset('css/compras.css')}}" rel='stylesheet'>
<script src="{{asset('js/compras.js')}}"></script>

  

    <div class="container-fluid">
        <br><br>
  <div class="row">
    <div class="col-sm-4 col-xs well">
      <a href="#info1" class="inf"> <img src="{{asset('img/BTN-LOGO-TDC.JPG')}}" width="50%" alt="Paga con TDC"> </a>
    </div>
    <div class="col-sm-4 col-xs well">
      <a href="#info2" class="inf"><img src="{{asset('img/BTN-LOGO-CRYP.JPG')}}" width="50%" alt="Paga con cryptos"></a>
    </div>
    <div class="col-sm-4 col-xs well">
    <a href="#info3" class="inf"><img src="{{asset('img/BTN-LOGO-TRANSFER.jpg')}}" width="50%" alt="Paga con Transferencia"></a>
    </div>
  </div>
  <!-- contenido informacion adicional -->
  <div class="row">
    <div id="info1" class="col-xs-12 well oculto">
    <section class="content container-fluid">
        <br><br>
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Realizar compra</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('compra.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div id="info2" class="col-xs-12 well oculto">
    <h4 class="mb-2">Seleccione la Moneda</h4>
                <div class="card p-2" id="coin_select">
                    <div class="input-group">
                        <input type="text" class="form-control search" placeholder="Filter by name or ticker">
                    </div>
                    <div class="list-group mt-2 list">
                        <div class="coinlistwrapper"><input type="radio" name="coin_selection" data-paymethod="coins" data-selcoin="BTC" value="coins_BTC" id="coins_BTC" /><label class="list-group-item coin_list_item" for="coins_BTC" >
						              	<div class="d-flex justify-content-between w-100">
						              		<div class="d-flex coin_name">
						              			<img class="align-middle" src="https://www.coinpayments.net/images/coins/BTC.png" alt="">
						              			Bitcoin
						              		</div>
						              		<div class="d-flex">
						              			0.00029000 BTC
						              		</div>
						              		<div class="d-none coin_ticker">
						              			BTC
						              		</div>
						              	</div>
						              </label></div><div class="coinlistwrapper"><input type="radio" name="coin_selection" data-paymethod="coins" data-selcoin="BCH" value="coins_BCH" id="coins_BCH" /><label class="list-group-item coin_list_item" for="coins_BCH" >
						              	<div class="d-flex justify-content-between w-100">
						              		<div class="d-flex coin_name">
						              			<img class="align-middle" src="https://www.coinpayments.net/images/coins/BCH.png" alt="">
						              			Bitcoin Cash
						              		</div>
						              		<div class="d-flex">
						              			0.05040000 BCH
						              		</div>
						              		<div class="d-none coin_ticker">
						              			BCH
						              		</div>
						              	</div>
						              </label></div><div class="coinlistwrapper"><input type="radio" name="coin_selection" data-paymethod="coins" data-selcoin="LTC" value="coins_LTC" id="coins_LTC" /><label class="list-group-item coin_list_item" for="coins_LTC" >
						              	<div class="d-flex justify-content-between w-100">
						              		<div class="d-flex coin_name">
						              			<img class="align-middle" src="https://www.coinpayments.net/images/coins/LTC.png" alt="">
						              			Litecoin
						              		</div>
						              		<div class="d-flex">
						              			0.15219000 LTC
						              		</div>
						              		<div class="d-none coin_ticker">
						              			LTC
						              		</div>
						              	</div>
						              </label></div><div class="coinlistwrapper"><input type="radio" name="coin_selection" data-paymethod="coins" data-selcoin="BNB" value="coins_BNB" id="coins_BNB" /><label class="list-group-item coin_list_item" for="coins_BNB" >
						              	<div class="d-flex justify-content-between w-100">
						              		<div class="d-flex coin_name">
						              			<img class="align-middle" src="https://www.coinpayments.net/images/coins/BNB.png" alt="">
						              			BNB Coin (Mainnet)
						              		</div>
						              		<div class="d-flex">
						              			0.02949000 BNB
						              		</div>
						              		<div class="d-none coin_ticker">
						              			BNB
						              		</div>
						              	</div>
						              </label></div><div class="coinlistwrapper"><input type="radio" name="coin_selection" data-paymethod="coins" data-selcoin="BNB.ERC20" value="coins_BNB.ERC20" id="coins_BNB.ERC20" /><label class="list-group-item coin_list_item" for="coins_BNB.ERC20" >
						              	<div class="d-flex justify-content-between w-100">
						              		<div class="d-flex coin_name">
						              			<img class="align-middle" src="images/coins/chained/BNB.ETH.png" alt="">
						              			BNB Coin (ERC-20)
						              		</div>
						              		<div class="d-flex">
						              			0.04710000 BNB.ERC20
						              		</div>
						              		<div class="d-none coin_ticker">
						              			BNB.ERC20
						              		</div>
						              	</div>
						              </label></div>                    </div>
                                        
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://morocotacoin.news/wp-content/uploads/2021/10/009.jpg" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>                        
		    </div>
                                    </div>
            </div>
    </div>
    
   

<script>

jQuery(document).ready(function(){
  $(".oculto").hide();              
    $(".inf").click(function(){
          var nodo = $(this).attr("href");  
 
          if ($(nodo).is(":visible")){
               $(nodo).hide();
               return false;
          }else{
        $(".oculto").hide("slow");                             
        $(nodo).fadeToggle("fast");
        return false;
          }
    });
}); 
</script>
<script type="text/javascript">
        var has_submit = false;

        function doCheckout(btnpre) {
            if (has_submit) {
                //alert('You have already clicked submit!');
                return false;
            }
            has_submit = true;
            setTimeout(function () {
                has_submit = false;
            }, 30000);
            document.getElementById('checkout').value = '1';
            document.getElementById('coform').submit();
            return false;
        }

        var oldcoin = '';

        function updateSelCoin(pm, coin) {
            if (oldcoin != '') {
                var elold = document.getElementById(oldcoin);
                if (elold != null) {
                    elold.className = 'coin-select w-clearfix w-inline-block';
                }
            }
            var elname = pm + '_' + coin;
            document.getElementById('paymethod').value = pm;
            document.getElementById('selcoin').value = coin;
            var el = document.getElementById(elname);
            if (el != null) {
                el.className += ' selected';
            }
            oldcoin = elname;
            return false;
        }

        function updateSelCoin2() {
            var elsel = document.querySelector('input[name="coin_selection"]:checked');
	    if (elsel != null) {
                console.log("updated sel coin");
                console.log(document.querySelector('input[name="coin_selection"]:checked').getAttribute("data-selcoin"))

                document.getElementById('paymethod').value = document.querySelector('input[name="coin_selection"]:checked').getAttribute("data-paymethod")
                document.getElementById('selcoin').value = document.querySelector('input[name="coin_selection"]:checked').getAttribute("data-selcoin")
            }
            // console.log(elsel);
            return true;
        }
        
        function setApplyBalance() {
        	var el = document.getElementById('applycoinbalchk');
        	var el2 = document.getElementById('applycoinbal');
        	if (el != null && el2 != null) {
        		el2.value = el.checked ? '1' : '0';        		
        	} else {
        		alert(el);
        		alert(el2);
        	}
        }

        function copyFields(spre, dpre) {
            var el1 = null;
            var el2 = null;
            el1 = document.getElementById(spre+'first_name');
el2 = document.getElementById(dpre+'first_name');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'last_name');
el2 = document.getElementById(dpre+'last_name');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'email');
el2 = document.getElementById(dpre+'email');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'address1');
el2 = document.getElementById(dpre+'address1');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'address2');
el2 = document.getElementById(dpre+'address2');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'city');
el2 = document.getElementById(dpre+'city');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'state');
el2 = document.getElementById(dpre+'state');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'zip');
el2 = document.getElementById(dpre+'zip');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'phone');
el2 = document.getElementById(dpre+'phone');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                            }
            el1 = document.getElementById(spre+'country');
el2 = document.getElementById(dpre+'country');
            if (el1 != null && el2 != null) {
                el2.value = el1.value;
                                if (spre != '' && dpre != '') {
                    el2.selectedIndex = el1.selectedIndex;
                }
                            }
                    }
    </script>

<script type="text/javascript">
        updateSelCoin2();

        var rad = document.querySelectorAll('input[name="coin_selection"]');
        var prev = null;
        for(var i = 0; i < rad.length; i++) {
            rad[i].onclick = updateSelCoin2;
        }

    </script>
    <script>

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
    </script>


@endsection

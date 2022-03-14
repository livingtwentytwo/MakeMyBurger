@extends('layout')

@section('content')
<div>
    <div class="container">
        <h1 class="text-center page-title">MY BURGER</h1>
        <div class="row row-total">
            <div class="col">
                <h4></h4>
            </div>
            <div class="col">
                <h4 class="text-end">Total</h4>
            </div>
            <div class="col">
                <h4>PHP</h4>
            </div>
        </div>
    </div>
</div><a href="#">
            <h6 class="text-clear" style="text-align: right;">CLEAR</h6>
        </a>
<div>
    <form action="{{ route('store_burger') }}" method="POST">
        @csrf
    <div class="container cont-options">
        <div class="row">
            <div class="col col-option">
                <h4>BUNS</h4>
                <div class="form-check"><input class="form-check-input" value= "regular" type="checkbox" id="regular"  name="buns"><label class="form-check-label" for="regular" >Regular</label></div>
                <div class="form-check"><input class="form-check-input" value= "TOASTED" type="checkbox" id="toasted"  name="buns"><label class="form-check-label" for="toasted" >Toasted</label></div>
            </div>
        </div>
        <div class="row">
            <div class="col col-option">
                <h4>MEAT</h4>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="beef-patty" value="beefpatty" name="meat[]"><label class="form-check-label" for="patty">Beef Patty</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="double-patty" value="doublepatty" name="meat[]"><label class="form-check-label" for="double-patty">Double Patty</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="chicken" value="chicken" name="meat[]"><label class="form-check-label" for="chicken">Chicken</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="sausage" value="sausage" name="meat[]"><label class="form-check-label" for="sausage">Sausage</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="bacon" value="bacon" name="meat[]"><label class="form-check-label" for="bacon">Bacon</label></div>
            </div>
        </div>
        <div class="row">
            <div class="col col-option">
                <h4>VEGETABLES</h4>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="lettuce" value="lettuce" name="vegetables[]"><label class="form-check-label" for="lettuce">Lettuce</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="tomato" value="tomato" name="vegetables[]"><label class="form-check-label" for="tomato">Tomato</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="onion" value="onion" name="vegetables[]"><label class="form-check-label" for="onion">Onion</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="cucumber" value="cucumber" name="vegetables[]"><label class="form-check-label" for="cucumber">Cucumber</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="olives" value="olives" name="vegetables[]"><label class="form-check-label" for="olives">Olives</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="bell-pepper" value="bellpepper" name="vegetables[]"><label class="form-check-label bell-pepper" for="formCheck-8">Bell Pepper</label></div>
            </div>
        </div>
        <div class="row">
            <div class="col col-option">
                <h4>DRESSING</h4>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="mayo-ketchup" value="mayoketchup" name="dressing[]"><label class="form-check-label" for="mayo-ketchup">Mayo-Ketchup</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="mustard" value="mustard" name="dressing[]"><label class="form-check-label" for="mustard">Mustard</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="mayonnaise" value="mayonnaise" name="dressing[]"><label class="form-check-label" for="mayonnaise">Mayonnaise</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="ketchup" value="ketchup" name="dressing[]"><label class="form-check-label" for="ketchup">Ketchup</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="chili-sauce" value="chilisauce" name="dressing[]"><label class="form-check-label" for="chili-sauce">Chili Sauce</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="hot-sauce" value="hotsauce" name="dressing[]"><label class="form-check-label" for="hot-sauce">Hot Sauce</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="ceasar" value="ceasar" name="dressing[]"><label class="form-check-label" for="ceasar">Ceasar&nbsp;</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="sour-cream" value="sourcream" name="dressing[]"><label class="form-check-label" for="sour-cream">Sour Cream</label></div>
            </div>
        </div>
        <div class="row">
            <div class="col col-option">
                <h4>EXTRAS &amp; SIDES</h4>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="fried-egg" value="15" name="extras[]"><label class="form-check-label" for="fried-egg">Fried Egg</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="fries" value="20" name="extras[]"><label class="form-check-label" for="fries">Fries</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="chips" value="15" name="extras[]"><label class="form-check-label" for="chips">Potato Chips</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="onion-rings" value="20" name="extras[]"><label class="form-check-label" for="onion-rings">Onion Rings</label></div>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn btn-primary"  value="MAKE MY BURGER">
            
        </div>
    </form>
    </div>
</div>
@endsection
@extends('layouts.layout') 

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1> 
    <form action="/pizzas" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizaa type:</label>
        <select name="type" id="type">
            <option value="margaritta">Margaritta</option>
            <option value="margaritta">Hawaiian</option>
            <option value="margaritta">Veg Supreme</option>
            <option value="margaritta">Volcano</option> 
        </select> 
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option> 
            <option value="garlic crust">Garlic Crust</option> 
            <option value="thin & cripsy">Thin & cripsy</option> 
            <option value="thick">Thick</option>
        </select> 
        <input type="submit" value="Order Pizza">
</form>
</div>
@endsection
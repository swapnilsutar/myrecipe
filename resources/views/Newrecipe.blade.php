@extends('master')

@section('content')


@if(session('success'))
<div class="alert alert-success" role="alert">
    <h4>{{session('success')}}</h4>
</div>
@endif

<h1 class="text-center"> Add New Recipe </h1>

<div class="box">
    <form action="addme" method="post">
        @csrf
        <input class="form-control"  type="text" name='title' placeholder="Title">

        <textarea class="form-control" name='description' id="" cols="20" rows="3" placeholder="Instruction" ></textarea>
        
        <input class="form-control" name="ingredient"  type="text" placeholder="Ingredients ">
        
        <textarea name="nutrition" class="form-control" id="" cols="20" rows="3" 
        placeholder="Nutrition " ></textarea>
        
        <input class="form-control" name="time"  type="text" placeholder="Time ">
        
        <input class="form-control"  name="serving" type="text" placeholder="Servings ">
        
        <select class="form-control" name="type" placholder="type">
            <option value="Vegetarian" >Vegetarian</option>
            <option value="Non_Vegetarian" >Non-Vegetarian</option>
        </select>
        <button class="btn btn-success btn-block form-control" type="submit">Submit</button>
    </form>
    
    <a href="/viewall">
        <button class="form-control btn btn-warning"> View All Recipes</button>
    </a>
</div>

@endsection


<!-- INSERT INTO `collection` (`id`, `title`, `description`, `ingredient`, `nutrition`, `time`, `serving`, `type`, `date`) VALUES ('100', 'maggie', 'nuddles', 'magie masala,pack', 'one time breakfast', 'morning', 'dish', 'veg', CURRENT_TIMESTAMP); -->

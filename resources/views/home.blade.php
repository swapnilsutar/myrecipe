@extends('master')


@section('content')
<h1 class="text-center"> Welcome To Food Recipe </h1>
<div class="back">    
    <div class="text-center mysection">
        <a href="/addrecipe">
            <button class="btn btn-custom"> Add New Recipe</button>
        </a>
        <a href="/viewall">
            <button class="btn btn-custom"> View All Recipes</button>
        </a>
    </div>
</div>
@endsection


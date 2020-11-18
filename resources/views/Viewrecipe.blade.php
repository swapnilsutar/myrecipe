@extends('master')

@section('content')

@if(session('success'))
<div class="alert alert-success" role="alert">
    <h4>{{session('success')}}</h4>
</div>
@endif

<h1 class="text-center"> All Recipes </h1>

<!-- <button class="btn btn-primary"> ADD New Recipes</button> -->

@foreach ($data as $data)

    <div id="accordion">
    <div class="card">

        <div class="card-header " id="headingOne">
            <div class="row">
                <div class="col-sm-10 col-md-11 col-lg-11">
                    <h5 class="mb-0 " >
                        <button class="btn btn " data-toggle="collapse" data-target="#collapse{{$data['id']}}" aria-expanded="true" aria-controls="collapseOne">
                            <span class="title-me">
                                {{ $data['title'] }} 
                            </span>    
                        
                    </button>
                    </h5>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1">
                    <p class="float-right">
                        <a href=  {{"delete/".$data['id']}} >
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </p>
                </div>
           
   
            </div>
        </div>

        <div id="collapse{{$data['id']}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <p >
              <span class="tit">
                    Description :  
              </span>
              <span class="sub_tit">
                  {{ $data['description'] }}
                </span>
            </p>
            <p >
              <span class="tit">
                    Ingredient :  
              </span>
              <span class="sub_tit">
                  {{ $data['ingredient'] }}
                </span>
            </p>
            <p >
              <span class="tit">
                    Nutrition :  
              </span>
              <span class="sub_tit">
                  {{ $data['nutrition'] }}
                </span>
            </p>
            <p >
              <span class="tit">
                    Time :  
              </span>
              <span class="sub_tit">
                  {{ $data['time'] }}
                </span>
            </p>
            <p >
              <span class="tit">
                    Serving :  
              </span>
              <span class="sub_tit">
                  {{ $data['serving'] }}
                </span>
            </p>
            <p >
              <span class="tit">
                    Type :  
              </span>
              <span class="sub_tit">
                  {{ $data['type'] }}
                </span>
            </p>
            
        </div>
        </div>
    </div>
    </div>

@endforeach
@endsection
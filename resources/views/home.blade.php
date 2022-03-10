@extends('layout.master')
@section('content')
<!DOCTYPE html>


    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>             
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                </div>
            </div>           
                @for($i = 0; $i<count($arr); $i++)
                <article class="col-12">
                    <div class="form-group row text-left">
                        <div class="col-12">
                            <button class="tm-btn tm-btn-primary tm-btn-small">{{$arr[$i]['topik']}}</button>                        
                        </div>                            
                    </div> 
                    <div class="row tm-row tm-mb-40">
                        <div class="col-12">                    
                            <div class="mb-4">
                                <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">{{$arr[$i]['judul']}}</h2>
                                {{$arr[$i]['isi']}}                           
                            </div>                    
                        </div>
                    </div>
                    <div class="d-flex justify-content-between tm-pt-15">
                        <span class="tm-color-primary">{{$arr1[$i]['nama']}}</span>
                        <span class="tm-color-primary">{{$arr[$i]['tanggal']}}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>{{$i}}</span>
                        <span>{{$arr[$i]['pembuat']}}</span>
                    </div>
                    <div class="row tm-row tm-mb-45">
                        <div class="col-12">
                            <hr class="tm-hr-primary tm-mb-35">
                        </div>
                    </div>
                </article>
                @endfor     
@endsection
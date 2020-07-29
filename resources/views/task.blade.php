<!doctype html>
<html lang="{{ app()->getLocale() }}">
       <div class="hp">
@include('layouts.header')

<div class="jumbotron card card-image">
    <div class="text-white text-center py-5 px-4">
        <div class="col-sm-6">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                        @foreach($data as $d)
                        <div class="img_section"style="height:60px">
                            <a href="{{ $d->id }}"> <figure><img src="{{ $d->id }}"></figure></a>
                            <p>{{ $d->id }}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

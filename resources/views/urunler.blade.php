<?php use App\Http\Controllers\ProductController; ?>
@extends('master')

@section('title', 'Ürünler')

@section('content')


<div class="kapsar">
  <div class="ortala">
    <?php
    foreach ($products as $key => $urun) { ?>
    <a href="/product/{{$urun['id']}}">
      <div class="kutu-4 h-360">
      <div class="kutu-title">
          <p><b>{{$urun['name']}}</b></p>
      </div>
      <div class="kutu-icerik">{{$urun['description']}}</div>
      <a href="">
      <div class="kutu-footer">
          <i class="mdi mdi-plus"></i> Ürün Detayı
      </div>
      </a>
      </div>
    </a>
      <?php } ?>
  </div>
</div>

@stop
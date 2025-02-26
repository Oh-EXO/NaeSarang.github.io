@extends('main_view')

@section('title','Suprise Mahal')

@section('title_head')
    It's A Prank hahaha
@endsection


@section('content')
<H2>SURPRISE 😂😂😂!!!</H2>
<H6>Click mo ulit ako!!!</H6>

<div  onclick="openPopup('popup1111')">
          <img class='thumb-image' src="{{ asset('img/char.png') }}" >
  </div>
  <div class="popupaa" id="popup1111">
    <h1>Suprise Daddy Kevin 🎉</h1>
    <h4>Joke lang yun Daddy hahaha, Epal ka kasi eh yan tuloy hindi na kita natakot (¬`‸´¬) </h4>
    <div class="popup-contentaa">
      <div class="gridab">
        <img onclick="openPopup('popup1a')"src="{{ asset('img/supp.jpg') }}">
      </div>
      <h1>Suprise Daddy Kevin 🎉</h1>
      <h4>Joke lang yun Daddy hahaha, Epal ka kasi eh yan tuloy hindi na kita natakot (¬`‸´¬) </h4>
      <h4>Negative talaga result ko Daddy hahaha,tinupak lang ako kaya inedit ko na positive yung result </h4>
      <h4>(˵>ᗜ<˵)  </h4>

      <br>

      <button onclick="closePopup('popup1111')">Close</button>

    </div>
  </div>

<br>

































































































































@endsection


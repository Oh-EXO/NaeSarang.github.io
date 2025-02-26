<!---access main_view--->
@extends('main_view')

<!---change title--->
@section('title','Suprise Daddy')

<!----CONTENT---->

@section('content')
<H2>CLICK ME BOSS!!!</H2>

<div  onclick="openPopup('popup1111')">
          <img class='thumb-image' src="{{ asset('img/sup.png') }}" >
  </div>
  <div class="popupaa" id="popup1111">
    <div class="popup-contentaa">
      <div class="gridab">
        <img onclick="openPopup('popup1a')"src="{{ asset('img/char.jpg') }}">
      </div>
      <h1>Congrats Mahal Daddy ka na 🎉🎊 </h1>
      <br>

      <button onclick="window.location.href='{{ url('/Sus') }}'">BOY OR GIRL ?</button>

    </div>
  </div>


{{-- <h2 class="bord1" style="color: black">Don't worry di naman nakakatakot ito mahal </h2>
<ol> --}}

  {{-- https://drive.google.com/file/d/1pIRzDB5T9IVYFoVNh_htKuqURWI5v3FX/view?usp=drive_link --}}
  {{-- <li class="" style="" > <a href="https://drive.google.com/file/d/1pIRzDB5T9IVYFoVNh_htKuqURWI5v3FX/view?usp=drive_link" target="_blank" class="fntc">  DILG-MC 2023-070_GAD Seal Certifications</a>
   </li> --}}
  {{-- https://drive.google.com/drive/folders/1289Al6EMev7bHqXA-HOISCqFwlqwL_Qu --}}
  {{-- <li style=""><a href="https://drive.google.com/file/d/1AbhKt-4j4IFTeeJGMDIqtTYXiV_9nQjg/view?usp=drive_link" target="_blank" class="fntc ">Restructuring Of The Dilg-Car Gender And Development Focal Point System (GFPS)</a></li>
</ol>
  <h5 class="bord1" style="color: black">Other Policies</h5>
  <div class="list-group">
    <a href="https://drive.google.com/file/d/1Psn5SxwPAppmV7pkWsqQs8E_z23KSXz-/view" target="_blank" class="fntc list-group-item list-group-item-action">Reconstitution of the DILG-ABRA Gender and Developmen Focal Point System (GFPS)</a>
    <a href="https://drive.google.com/file/d/1nBFFa8IUyY-ql5Dhs1XGUH6tZ36GI5OT/view" target="_blank" class="fntc list-group-item list-group-item-action" >Institutionalization of DILG-APAYAO GFPS SUB-TWG</a>
    <a href="https://drive.google.com/file/d/1xEfSeKdPdaHhETIJXAxP9qW3Tm57LVWI/view" target="_blank" class="fntc list-group-item list-group-item-action">Constituing the DILG BAGUIO Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</a>
    <a href="https://drive.google.com/file/d/15ArvZwI5x2Eugp48XC-I2K6jc40cIYhZ/view" target="_blank" class="fntc list-group-item list-group-item-action">Constituing the DILG-BENGUET Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</a>
    <a href="https://drive.google.com/file/d/1SjW42OrThOzEWTOKThp1-in8dFhVX47z/view" target="_blank" class="fntc list-group-item list-group-item-action">Designation of GAD GFPS-SUB TWG</a>
    <a href="https://drive.google.com/file/d/1Iy5GAWKdmAVoTkNjWDghRYyNTYyYOXI0/view" target="_blank" class="fntc list-group-item list-group-item-action">Constituing the DILG-KALINGA Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</a>
    <a href="https://drive.google.com/file/d/1tut_MV8vBYjhvQpgBT3kxU9Ll2qQPq4k/view" target="_blank" class="fntc list-group-item list-group-item-action">Reconstitution of the Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group (SUB-TWG)</a>
  </div> --}}



@endsection





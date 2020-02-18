<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>{{$title??"Cadmio"}}</title><!-- Meta Etiquetas  -->
      <meta name="author" content="Cesar Gerardo ,CesarGuzman@ieee.org">
      <meta name="copyright" content="Cesar Gerardo Guzman Lopez"><link rel="icon"  href="{{asset($icon ?? '') }}">        <meta name="robots" content="index, follow" />
      <meta charset="utf-8"><meta name="language" content="es"><meta name="generator" content="Eclipse"><meta http-equiv="X-UA-Compatible" content="IE=edge"><base target ="_self">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
     
     <meta name="viewport" content="width=device-width, initial-scale=0.7"><meta name="Classification" content="Quimica "><meta name="msapplication-TileColor" content=" #009900" />
      <meta charset="utf-8">
      
      <!-- media -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?<?=date("my")?>">        

       <!--@section('fondocss')-->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <style type="text/css">
         #Container{
 /*           background-image: url( "{{ asset('img/Fondo.svg') }}");*/
             background-repeat: repeat;
            background-color: #f6f6f6
         }
      </style> 
      <!-- @show()-->
    </head>
    <body>
   <div id="Container" > 
	 @section('header')  
 		
  	 @section('content') 
   	
   	
   	@show 
   @section('footer')
   <footer class="  fixed-bottom navbar-light bg-faded">
    <div class=" text-center py-3">© <?=date("Y") ?> Copyright:
      <a href=" ">Cadmio</a>
    </div>
   </footer>
   @show
    </div>
   <?php  ?>
      <script type="text/javascript" src="{{asset('js/app.js') }}?<?="0.".date("my").".0"?>"></script>
   </body>
</html>
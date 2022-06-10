<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')

    <div class="flex-col space-y-8 px-6 py-6 justify-center items-center">
        <div class=" font-bold text-2xl text-side-bg">
            產品介紹 > <a href="{{route('backstage-product-product_type_id',$product->product_type_id)}}"> {{$product->product_type()->first()->name }} ></a> {{ $product->name }}
        </div>
        <form action="{{ route("backstage-product-image-store") }}" enctype="multipart/form-data" method="POST">
            @csrf
            <br><span class="text-red-500">副檔名(jpg ,png ,jpeg ,gif ,svg)  限制大小為2Mb</span>
        <div class="flex justify-between flex-wrap pt-10">
            
                <input hidden type="text" id="id" name="id" value="{{ $product->id }}"/>
                @for($i = 1; $i <= 8; $i++)
                    <div class="w-1/4 h-full text-center">
                        <div class=" my-2">標題圖片</div>
                        <div class=" my-2" >
                            <img src="/{{ $product_image->where('serial_num',$i)->count() > 0 ? str_replace('public/', 'storage/', $product_image->where('serial_num',$i)->first()->image_path ) : '/storage/'}}" id="image-0{{ $i }}-preview" onclick="$('#image-0{{ $i }}').click()" class=" w-40 h-40 border-2 border-teal-500 border-dashed mx-auto" />
                            
                            <input type="file" name="image-0{{ $i }}" id="image-0{{ $i }}" onchange="readURL(this,{{ $i }})" hidden accept="image/gif, image/jpeg, image/png, image/jpg">
                        </div>
                    </div>
                @endfor
                
                
        </div>
        <div class="flex justify-center pt-10">
            <div>
                <button type="submit" class="block bg-blue-500 text-white rounded w-24 h-12 mx-auto">儲存</button>
            </div>
        </div>
        

        </form>
          
    </div>

    <script>
        
        function readURL(input,num){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#image-0"+num+"-preview").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    

@stop

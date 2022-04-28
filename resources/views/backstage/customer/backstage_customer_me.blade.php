<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')



    <div class="flex-col space-y-8 px-6 py-6 justify-center items-center">
        <div class=" font-bold text-2xl text-side-bg">
            客服管理 > 公司資訊
        </div>


        <div class="bg-white w-3/4 m-auto rounded-xl">
            <div class=" p-4">
                <form action="{{route('backstage-customer-me-store')}}" method="POST">
                    @csrf
                    <div class="mb-6">
                      <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">公司電話</label>
                      <input type="phone_number" name="phone_number"  value="{{ $self->phone_number }}" pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone number(07-123-4567)" required>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">儲存</button>
                  </form>
            </div>
        </div>
    </div>
@stop

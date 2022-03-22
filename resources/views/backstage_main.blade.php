
@extends('layouts.backstage')

@section('content')
    <div class="absolute flex-col space-y-6 p-6 h-4/5 w-1/3 top-1/2 bottom-1/2 left-0 right-0 m-auto bg-white hidden rounded-xl z-10">
        <div>
            <span class="text-xl">新增資料</span> 
        </div>
        <form>
            <div class="">
                <label for="id" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品ID</label>
                <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品名稱</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">內容介紹</label>
                <textarea type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                </div>
                <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品大小</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品材質</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">上架日期</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">下架日期</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">詳細介紹</label>
                <textarea type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                </div>
                <span class="block">新增資訊</span>
                <button type="reset" class="py-2 px-3 bg-cyan-500 hover:bg-cyan-600 text-white text-sm font-semibold rounded-md shadow focus:outline-none">清除</button>
                <button type="submit" class="py-2 px-3 bg-cyan-500 hover:bg-cyan-600 text-white text-sm font-semibold rounded-md shadow focus:outline-none">新增</button>
            </form>
    </div>

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0 right-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        新增資料
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <form>
                    <div class="">
                        <label for="id" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品ID</label>
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                    </div>
                    <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品名稱</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">內容介紹</label>
                        <textarea type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                        </div>
                        <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品大小</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品材質</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">上架日期</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">下架日期</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">詳細介紹</label>
                        <textarea type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                        </div>
                        <span class="block">新增資訊</span>
                        
                    </form>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">I accept</button>
                    <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-400  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">Decline</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-col space-y-8 px-6 py-6 justify-center items-center">
        <div class=" font-bold text-2xl text-side_bg">
            客服管理 > 
        </div>
        
        
        <div class="bg-white w-3/4 h-96 m-auto" >
            <div class=" p-4">
                <form action="" method="post" class="flex">
                    <label for="name" class="bg-slate-200 border-gray-400 border py-2.5 px-2">名稱</label>
                    <input type="text" class="" id="name">
                    <label for="between" class="bg-slate-200 border-gray-400 border py-2.5 px-2">期間</label>
                    <div date-rangepicker class="flex items-center px-2">
                        <div class="relative">
                              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                          </div>
                        <span class="mx-4 text-gray-500">~</span>
                        <div class="relative">
                          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                          </div>
                          <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                      </div>
                    </div>
                    <button type="submit" class=" bg-slate-600">
                        查詢
                    </button>
                    <div class=" flex w-max justify-end">
                        <button class="block text-black bg-yellow-300 hover:bg-blue-800font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
                            + 新增
                          </button>
                    </div>
                    
                </form>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    功能
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    主題名稱
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    上架日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    下架日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    上傳檔案
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    建立日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">編輯</a>
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">刪除</a>
                                </th>
                                <td class="px-6 py-4">
                                    水龍頭組裝
                                </td>
                                <td class="px-6 py-4">
                                    2022/2/28
                                </td>
                                <td class="px-6 py-4">
                                    2022/3/15
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">編輯</a>
                                </td>
                                <td class="px-6 py-4">
                                    2022/2/28
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
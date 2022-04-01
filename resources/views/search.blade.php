<x-app-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script>
         $(document).ready( function () {
            $('#table').DataTable({
                  
                  "dom": '<"toolbar">frtip'
            }); 
            $('div.toolbar').html('');
         } );
      </script>
    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="text-center py-4 text-3xl text-sky-600 font-bold">
            搜尋結果 共搜尋到 {{ $search_result->count() }} 個結果
        </div>

        <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            連結
                        </th>
                        <th scope="col" class="px-6 py-3">
                            標題
                        </th>
                        <th scope="col" class="px-6 py-3">
                            內容
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($search_result as $item)
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <a href="{{$item->url}}">點我前往</a>
                        </th>
                        <td class="px-6 py-4">
                            {{$item->title}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->content}}
                        </td>
                    
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
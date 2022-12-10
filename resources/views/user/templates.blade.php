@extends('layouts.user')

@section('content')
<div class=" py-6 flex flex-col justify-center sm:py-12 bg-white">
  <div class=" flex flex-row justify-between px-10 mb-10 text-lg text-semibold text-center " >
    {{-- <a  href="{{route('user.pages-add')}}" class="px-10 py-4 font-semibold text-white" style="background-color:rgba(3, 168, 158, 1) ;">  Add Page</a> --}}
    <div class=" ">Select a template to get started!
    </div>
  </div>
  <section class="">
      <div class="w-1/2 mx-auto">
        <form class="mt-8 space-y-6" action="{{route('generate-business-name')}}" method="GET">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <label for="countries" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-gray-400">SELECT A NICHE</label>
                <select name="niche" id="niche" onchange="getNicheTemplates()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pt-4 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Select a niche</option>
                    <option value="real_estate">Real Estate</option>
                    <option value="aitbnb">Airbnb</option>
                    <option value="ecommerce">eCommerce</option>
                    <option value="spas">Spas</option>
                    <option value="restaurant">Restaurants</option>
                    <option value="daycare">Daycares</option>
                    <option value="cooperate">Cooperate</option>
                    <option value="old_age_homes">Old Age Homes</option>
                </select>
            </div>
            <div>
              {{-- <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Generate Name
              </button> --}}
            </div>
          </form>
      </div>
          <div id="templates" class="hidden overflow-auto w-2/3 mx-auto bg-white dark:bg-slate-800 dark:highlight-white/5 shadow-lg ring-1 ring-black/5 flex flex-col divide-y dark:divide-slate-200/5 mt-4">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Template name</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800" id="template-table">
                    </tbody>
                </table>
          </div>
        </div>
  </section>
</div>
@endsection
@section('page-js')
<script>
    function getNicheTemplates(){
        let baseUrl = '{{url("/")}}'
        let niche = $('#niche').val()
        let token = '{{csrf_token()}}'
        $.ajax({
            url:"{{route('user.niche.templates')}}",
            method:'post',
            data:{
                niche:niche,
                _token:token
            },
            success: function(response){
                console.log(response);
                $('#templates').show()
                if (response.length == 0) {
                    $('#template-table').html('')
                    $('#template-table').append(
                        `
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    No Template yet.
                                </div>
                            </td>
                        </tr>
                        `
                    )
                    return;
                }
                $.each(response, function(key, value) {
                    $('#template-table').html('')
                    $('#template-table').append(
                        `
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    ${value.name}
                                </div>
                            </td>
                            <td>
                                <a href="/user/pages/${value.id}/build" class="m-4">
                                    <svg class="w-5 h-5 inline border border-gray-200" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="${baseUrl+value.translate.route}" class="m-4">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="m-4 text-red-500" onclick="return confirm('Are you sure you want to delete this?')">
                                    <svg class="w-5 h-5 inline m-2 border border-gray-200" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        `
                    )
                })
            }
        })
    }
</script>
@endsection

@extends('layouts.user')

@section('content')
<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
       Qr Code Generator
    </h2>
    <div class="flex lg:flex-row flex-col space-x-6">
        <div class="w-2/3 border-2 shadow p-4">
            <form action="#" method="POST" id="qrGeneratorForm">
                <div class="w-full flex flex-row space-x-4">
                     <div class="pt-4  w-full flex flex-col">
                        <label for="url" class="text-lg font-semibold">URL**</label>
                        <input type="url" name="url" id="url" placeholder="https://something.com"
                            class="shadow rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('url') border border-red-500 @enderror"
                            >
                    </div>
                    <div class="pt-4 w-full flex flex-col">
                        <label for="url" class="text-lg font-semibold">Color</label>
                        <input type="color" name="color" id="color"
                            class="shadow border rounded w-full py-2 px-3 h-10 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror"
                            >
                    </div>
                </div>
                <div class="w-full flex flex-row space-x-4">
                    <div class="pt-4  w-full flex flex-col">
                       <label for="url" class="text-lg font-semibold">Size</label>
                       <input name="size" type="range" min="200" max="350"
                           class="range-slider shadow rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror"
                           >
                   </div>
                   <div class="pt-4 w-full flex flex-col">
                       <label for="url" class="text-lg font-semibold">White Space</label>
                       <input name="margin" type="range" min="0" max="5"
                           class="range-slider shadow border rounded w-full py-2 px-3 h-10 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror"
                           >
                   </div>
               </div>
               <div class="w-full flex flex-row space-x-4">
                    <div class="pt-4  w-full flex flex-col">
                        <label for="url" class="text-lg font-semibold">Style</label>
                        <select name="style" onchange="generateQr()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border border-red-500 @enderror"
                       >
                            <option disabled selected>select style</option>
                            <option value="square">Square</option>
                            <option value="round">Round</option>
                       </select>
                    </div>
                    <div class="pt-4 w-full flex flex-col">
                        <label for="url" class="text-lg font-semibold">Eye Style</label>
                        <select name="eye_style" onchange="generateQr()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border border-red-500 @enderror"
                       >
                            <option disabled selected>select style</option>
                            <option value="square">Square</option>
                            <option value="circle">Circle</option>
                       </select>
                    </div>
                </div>
                <div class="pt-4 w-full flex flex-col">
                    <label for="url" class="text-lg font-semibold">Type</label>
                    <select name="type" onchange="generateQr()"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border border-red-500 @enderror"
                    >
                        <option value="text">Text</option>
                        <option value="image">Image</option>
                   </select>
                </div> <div id="type-image" class="types block">
                    <div class="form-group">
                        <div class="col-12 mb-2 mt-5">
                            <label for="image"><strong> Image</strong></label>
                        </div>
                        <div class="col-md-12 showImage mb-3">
                            <img src="{{asset('assets/images/noimage.jpg')}}" alt="..." class="img-thumbnail qr">
                        </div>
                        <input type="file" name="image" id="image" class="form-control" onchange="generateQr()">
                    </div>
                    <div class="form-group w-full flex flex-col">
                        <label for="">Image Size</label>
                        <input class="form-control p-0 range-slider" name="image_size" type="range" min="1" max="20" value="" onchange="generateQr()">
                        {{-- <span class="text-dark size-text float-right d-block">{{$abs->qr_inserted_image_size}}</span> --}}
                        <p class="mb-0 text-warning">If the QR Code cannnot be scanned, then reduce this size</p>
                    </div>
                    <div class="form-group w-full flex flex-col">
                        <label for="">Image Horizontal Poistion</label>
                        <input class="form-control p-0 range-slider" name="image_x" type="range" min="0" max="100" value="" onchange="generateQr()">
                        {{-- <span class="text-dark size-text float-right">{{$abs->qr_inserted_image_x}}</span> --}}
                    </div>
                    <div class="form-group w-full flex flex-col">
                        <label for="">Image Vertical Position</label>
                        <input class="form-control p-0 range-slider" name="image_y" type="range" min="0" max="100" value="" onchange="generateQr()">
                        {{-- <span class="text-dark size-text float-right">{{$abs->qr_inserted_image_y}}</span> --}}
                    </div>
                </div>
                <div id="type-text" class="types block">
                    <div class="form-group w-full flex flex-col mt-4">
                        <label>Text</label>
                        <input type="text" name="text" value="" class="shadow rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('text') border border-red-500 @enderror" onchange="generateQr()">
                    </div>
                    <div class="form-group w-full flex flex-col">
                        <label>Text Color</label>
                        <input type="color" name="text_color" value="" class="form-control jscolor w-full" onchange="generateQr()">
                    </div>
                    <div class="form-group w-full flex flex-col mt-4">
                        <label for="">Text Size</label>
                        <input class="form-control p-0 range-slider" name="text_size" type="range" min="1" max="15" value="" onchange="generateQr()">
                        <span class="text-dark size-text float-right d-block"></span>
                        <p class="mb-0 text-warning">If the QR Code cannnot be scanned, then reduce this size</p>
                    </div>
                    <div class="form-group w-full flex flex-col mt-4">
                        <label for="">Text Horizontal Poistion</label>
                        <input class="form-control p-0 range-slider" name="text_x" type="range" min="0" max="100" value="" onchange="generateQr()">
                        <span class="text-dark size-text float-right"></span>
                    </div>
                    <div class="form-group w-full flex flex-col mt-4">
                        <label for="">Text Vertical Position</label>
                        <input class="form-control p-0 range-slider" name="text_y" type="range" min="0" max="100" value="" onchange="generateQr()">
                        <span class="text-dark size-text float-right"></span>
                    </div>
                </div>

            </form>
        </div>
        <div class="w-1/3 border shadow">
            <div class="p-4">
                <span class="pt-3 justify-start inline text-xl">Preview</span>
                <div class=" justify-end inline">
                    <a href="#" class="border text-white font-semibold justify-end px-5 py-1 pt-3 bg-blue-300 rounded float-right">Clear</a>
                    <a href="#" class="border text-white font-semibold justify-end px-5 py-1 pt-3 bg-green-300 rounded float-right" onclick="toggleModal()">Save</a>
                </div>
            </div>
            <div class="border-t-2 border-b-2 border-t-gray-500 ">
                <img src="{{asset('assets/images/noimage.jpg')}}" alt="..." class="img-thumbnail qr w-full" id="preview">
            </div>
            <div class="flex justify-center">
                <a href="#"  class="bg-green-300 rounded px-5 py-2 text-white text-xl font-semibold pt-3" id="downloadBtn">Download</a>
            </div>
        </div>
        <span id="text-size" style="visibility: hidden;">{{config('app.name')}}</span>
    </div>
</div>

<div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
    <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-900 opacity-75" ></div>
      </div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
      <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{route('save.qrcode')}}" method="POST">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <label>Name <span class="text-red-400">*</span></label>
                    <input type="text" class="w-full bg-blue-100 p-2 mt-2 mb-3" name="name"/>
                  </div>
                  <input type="hidden" name="qr_url" value="" id="qr_url">
                  <div class="bg-gray-200 px-4 py-3 text-right">
                    <button type="button" class="py-2 px-4 bg-red-500 text-white rounded hover:bg-red-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
                    <button type="submit" class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 mr-2"><i class="fas fa-plus"></i>Save</button>
                  </div>
            </form>
      </div>
    </div>
</div>

@endsection

@section('page-js')
<script>
    function toggleModal() {
        document.getElementById('modal').classList.toggle('hidden')
    }
     function loadDiv(type) {
      $(".types").removeClass('block');
      $(".types").addClass('hidden');
      $("#" + "type-" + type).removeClass("hidden");
      $("#" + "type-" + type).addClass("block");
    }

    $(document).ready(function() {
      let type = $("select[name='type']").val();
      loadDiv(type);
      $(".range-slider").on("input", function() {
          $(this).next(".size-text").html($(this).val());
      });
    });

     function generateQr() {

        loadDiv($("select[name='type']").val());
        $(".request-loader").addClass('show');

        let fd = new FormData(document.getElementById('qrGeneratorForm'));
        fd.append('size', $("input[name='size']").val());
        fd.append('margin', $("input[name='margin']").val());
        fd.append('image_size', $("input[name='image_size']").val());
        fd.append('image_x', $("input[name='image_x']").val());
        fd.append('image_y', $("input[name='image_y']").val());
        fd.append('_token', "{{csrf_token()}}");

        if ($("select[name='type']").val() == 'text') {
        $("#text-size").text($("input[name='text']").val());
        let fontSize = ($("input[name='size']").val() * $("input[name='text_size']").val()) / 100;
        $("#text-size").css({"font-size": fontSize, "font-family": "Lato-Regular"});
        let textWidth = $("#text-size").width() == 0 ? 1 : $("#text-size").width();
        fd.append('text_width', textWidth);
        }

        // $(".range-slider").attr('disabled', true);

        $.ajax({
            url: "{{route('user.qrcode.generate')}}",
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(data) {
            $(".request-loader").removeClass('block');
            $(".range-slider").attr('disabled', false);

            if(data == "url_empty") {
                toastr.error("URL field cannot be empty", "Warning", "warning");
            } else {
                $("#preview").attr('src', data);
                $('#qr_url').attr('value', data);
                $("#downloadBtn").attr('href', data);
            }
            },
            error: function (error) {
                if (error.status === 422) {
                    alert(error.responseJSON.message)
                }

            }
    });

}
</script>

@endsection

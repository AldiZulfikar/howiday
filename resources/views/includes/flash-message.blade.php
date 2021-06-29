@if ($message = Session::get('success'))
    <div class="bg-green-300 py-2 px-3 rounded-lg inline-block" id="alert">
        <strong class="text-white font-poppins font-light text-base">{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-400 py-2 px-3 rounded-lg inline-block">
        <strong class="text-white font-poppins font-light text-base mr-3 ">Data Gagal Diperbarui</strong>
    </div>
@endif

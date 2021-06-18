@extends('layouts.edit-profile')

@section('content')
    <div class="right w-full lg:w-2/3 border border-gray-300 rounded-2xl lg:p-12 p-6 ">
        <h1 class="text-accentBlackt font-playfair font-bold text-4xl mb-1">Biodata Diri</h1>
        <p class="font-poppins font-medium text-lg text-accentOrange mb-12">Kelola profil Anda untuk mengontrol,
            dan
            melindungi akun.
        </p>



        <div class="biodata flex flex-col md:flex-row items-start">
            <div
                class="left flex flex-col justify-center md:border-r md:border-gray-400 md:pr-12  md:mr-10 w-full md:w-1/3 py-12 items-center border-b border-gray-400 md:border-b-0 ">
                <div class="image rounded-full w-36 h-36 mb-9 overflow-hidden">

                    <img src="{{ Auth::user()->picuser ? Storage::url(Auth::user()->picuser) : url('./images/pic_user.svg') }}" class="w-full h-full rounded-full" alt="">
                </div>
                @if (Auth::user()->picuser)
                    <form action="{{ route('edit-profile.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="labelimg bg-red-400 hover:bg-red-500 px-8 py-3 font-poppins text-white font-normal rounded-md mb-7 transition duration-300 focus:outline-none cursor-pointer">
                            Hapus Foto
                        </button>
                    </form>

                    {{-- <form action="{{ route('galeri-travel.destroy', $row->id) }}"
                        method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="badge badge-warning">Hapus</button>
                    </form> --}}

                @else
                    <form action="{{ route('edit-profile.update', $item->id)}}" method="POST" enctype="multipart/form-data" class=" mb-7">
                        @csrf
                        @method('PUT')
                        <input type="file" id="picuser" accept="image/*" class="hidden" name="picuser" required>
                        <label for="picuser" class="bg-accentCyan hover:bg-accentCyanHover px-8 py-3 font-poppins text-white font-normal rounded-md transition duration-300 focus:outline-none cursor-pointer relative">
                            Pilih Gambar
                        </label>
                    </form>
                @endif

                <p class="text-center text-sm text-gray-400 font-poppins font-light">Besar file: maksimum:
                    10 MB</p>
                <p class="text-center text-sm text-gray-400 font-poppins font-light">Format Gambar: JPG
                    .JPEG .PNG</p>
            </div>
            <div class="right md:w-3/5 w-full md:mt-0 mt-12">
                <h2 class="font-poppins font-semibold text-accentDarkGray text-lg mb-5">Ubah Biodata Diri
                </h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                <form action="{{ route('edit-profile.update', $item->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between w-full">
                        <label for="username"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Username</label>
                        <input type="text" placeholder="Username" name="username" required
                            class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5 lowercase" value="{{ $item->username }}">
                    </div>
                    <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between w-full">
                        <label for="name"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Nama</label>
                        <input type="text" placeholder="Nama" name="name" required
                            class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5" value="{{ $item->name }}">
                    </div>
                    <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between w-full">
                        <label for="email"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Alamat
                            Email</label>
                        <input type="email" placeholder="email" name="email" required
                            class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5" value="{{ $item->email }}">
                    </div>
                    <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between w-full">
                        <label for="jenis-kelamin"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Jenis
                            Kelamin</label>
                        <select name="jk" class="form-select px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5 " required id="" >
                            <option value="{{ $item->jk }}">{{ $item->jk }}</option>
                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between w-full">
                        <label for="ttl"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Tanggal
                            Lahir</label>
                        <input type="text" id="ttl" placeholder="DD/MM/YYYY"
                            class=" px-4 py-2 rounded-md font-poppins  font-light w-full md:w-3/5 @error('notel') is-invalid @enderror" name="ttl" value="{{ $item->ttl }}" required autofocus autocomplete="ttl">
                        @error('ttl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex flex-col md:flex-row mb-11 md:items-center  justify-between w-full">
                        <label for="notel"
                            class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">No.
                            Telepon</label>
                        <input type="text" id="notel" placeholder="+628.." name="notel"
                            class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5 @error('notel') is-invalid @enderror" value="{{ $item->notel }} " required autofocus autocomplete="notel">
                        @error('notel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="w-full md:w-2/5 hidden md:block"></div>
                        <button type="submit"
                            class="bg-accentCyan hover:bg-accentCyanHover px-8 py-3 font-poppins text-white font-normal rounded-md mb-7  transition duration-300 w-full md:w-auto focus:outline-none">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

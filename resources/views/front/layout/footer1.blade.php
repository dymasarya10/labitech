<footer class="container-fluid">
    <div class="row ps-md-5 pt-md-4 pb-md-4 pt-3 ps-4 pb-4 justify-content-center">
        <div class="col-md-3 col-6">
            <div class="row">
                <div class="col-12">
                    <h5>Site Links</h5>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                        <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Blog</a></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                        <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Contact us</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="row">
                <div class="col-12">
                    <h5>Useful Links</h5>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                        <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Labitech Popi Jakarta</a></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                        <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Kemitraan</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 pt-md-0 pt-3">
            <div class="row">
                <div class="col-12">
                    <h5>
                        Contact
                    </h5>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-location-dot" style="color: #ffffff"></i></div>
                        {{-- <div class="col-md-9 col-10 ps-md-3 ps-0">Jl. Rawa Jaya No 37, RT 8/ RW 4, Kec Duren Sawit, Jakarta Timur, DKI Jakarta, 13460</div> --}}
                        <span class="col-md-9 col-10 ps-md-3 ps-0">
                            @if($global_setting_data->address != '')
                            {{ $global_setting_data->address }}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div>
                        {{-- <div class="col-md-9 col-10 ps-md-3 ps-0">Jl. Rawa Jaya No 37, RT 8/ RW 4, Kec Duren Sawit, Jakarta Timur, DKI Jakarta, 13460</div> --}}
                        <span class="col-md-9 col-10 ps-md-3 ps-0">
                            @if($global_setting_data->phone != '')
                            {{ $global_setting_data->phone }}
                            @endif
                        </span>
                          {{-- @if($global_setting_data->phone != '')
                            <li class="phone-text">{{ $global_setting_data->phone }}</li>
                            @endif --}}

                            
                        {{-- <div class="col-9 ps-md-3 ps-0">0816 - 2626 - 19</div> --}}
                    </div>
                </div>
                <div class="col-12">
                    <div class="row pt-md-2">
                        <div class="col-1"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i></i></div>
                        <span class="col-md-9 col-10 ps-md-3 ps-0">
                            @if($global_setting_data->email != '')
                            {{ $global_setting_data->email }}
                            @endif
                        </span>
                        {{-- <div class="col-9 ps-md-3 ps-0">hrdlabitechjuara@gmail.com</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="container-fluid text-center" style="background-color: green; height: 3vh;">
    <p>&copy; 2023 |&nbsp; All Rights Reserved</p>
</div>
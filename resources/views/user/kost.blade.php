<div class="tab-pane active" id="kost" role="tabpanel">
        <div class="row">
            <div class="col-xl-3">
                <!-- user contact card left side start -->
                <div class="card">
                    <div class="card-header contact-user">
                        <img class="img-radius img-40" src="..\files\assets\images\avatar-4.jpg" alt="contact-user">
                        <h5 class="m-l-10">{{auth::user()->name}}</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contacts</h4>
                    </div>
                    
                </div>
                <!-- user contact card left side end -->
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-9">
                @foreach ($sewa as $item)
                {{-- <div class="card"> --}}
                    @if($item->user_id == Auth::user()->id)
                        <div class="col-md-12 col-xl-6 ">
                            <div class="card app-design">
                                <div class="card-block">
                                    <a href="{{route('payment.create')}}" class="btn btn-primary f-right">{{$item->status}}</a>
                                    <h6 class="f-w-400 text-muted">{{$item->nama_kamar}}</h6>
                                    <p class="text-c-blue f-w-400">{{$item->jenis_kamar}}</p>
                                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                    <div class="design-description d-inline-block m-r-40">
                                        <h3 class="f-w-400">678</h3>
                                        <p class="text-muted">Question</p>
                                    </div>
                                    <div class="design-description d-inline-block">
                                        <h3 class="f-w-400">1,452</h3>
                                        <p class="text-muted">Comments</p>
                                    </div>
                                    <div class="team-box p-b-20">
                                        <p class="d-inline-block m-r-20 f-w-400">Team</p>
                                        <div class="team-section d-inline-block">
                                            <a href="#! "><img src="..\files\assets\images\avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                                            <a href="#! "><img src="..\files\assets\images\avatar-3.jpg" data-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                                            <a href="#! "><img src="..\files\assets\images\avatar-4.jpg" data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                                            <a href="#! "><img src="..\files\assets\images\avatar-2.jpg" data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                                        <div class="progress d-inline-block">
                                            <div class="progress-bar bg-c-blue" style="width:78% "><label>78%</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-body">
                                <p class="m-0 text-center">
                                    Kamu Belum mempunyai kos yang aktif, yuk cari... <br><br>
                                    <a href="{{url('/')}}" class="btn btn-primary btn-sm"> Cari Kos</a>
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? Vite::asset('public/upload/admin_images/'.$profileData->photo)
 : Vite::asset('public/upload/no_image.jpg')}}" alt="profile">
                                <span class="h4 ms-3">{{ $profileData->username }}</span>
                            </div>
                        </div><div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Ad:</label>
                            <p class="text-muted">{{ $profileData->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">E-Posta:</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Telefon:</label>
                            <p class="text-muted">{{ $profileData->phone }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Adres:</label>
                            <p class="text-muted">{{ $profileData->address }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Parola Değiştirme Formu</h6>
                            <form class="forms-sample" method="post" action="{{ route('admin.update.password') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="old_password" class="form-label">Mevcut Parola</label>
                                    <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                                           autocomplete="off" placeholder="Mevcut parolanızı yazınız">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">Yeni Parola</label>
                                    <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                                           autocomplete="off" placeholder="Yeni parolanızı yazınız">
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Tekrar Yeni Parola</label>
                                    <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"
                                           autocomplete="off" placeholder="Yeni parolanızı tekrar yazınız">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Değişiklikleri Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

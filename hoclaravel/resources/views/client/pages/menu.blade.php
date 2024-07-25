@extends('client.layouts.main')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Danh Mục Sản Phẩm</h5>
                <h1 class="mb-5">Các Mặt Hàng Phổ Biến</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="d-flex  align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill"
                                href="#tab-{{ $category->id }}">
                                <i class="fa fa-coffee fa-2x text-primary"></i>

                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($categories as $category)
                        <div id="tab-{{ $category->id }}" class="tab-pane fade show p-0">
                            <div class="row">
                                @foreach ($products[$category->id] ?? [] as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded"
                                                src="{{ asset('clients/img/' . $product->image) }}" alt=""
                                                style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $product->name }}</span>
                                                    <span class="text-primary">{{ $product->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $product->description }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

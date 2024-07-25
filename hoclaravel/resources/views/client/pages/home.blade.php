     @extends('client.layouts.main')

     @section('title', 'Nhà hàng NMN ')
     @section('content')



         <!-- Service Start -->
         @include('client.layouts.service')
         <!-- Service End -->


         <!-- About Start -->
         @include('client.layouts.about')
         <!-- About End -->



         <!-- manager Start -->
         @include('client.layouts.manager')
         <!-- manager End -->


         <!-- comment Start -->
         @include('client.layouts.comment')
         <!-- comment End -->


         <!-- company-info Start -->


         <!-- company-info End -->

     @endsection


<?php $__env->startSection('content'); ?>
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Thoát khỏi cuộc sống đơn điệu</h6>
                    <h2>Thư giãn tâm trí của bạn</h2>
                    <p>Nếu bạn đang tìm kiếm băng cassette trống trên web, bạn có thể rất bối rối về sự khác biệt về giá
                        cả.<br> Bạn có thể thấy một số chỉ với giá $0,17 mỗi cái.</p>
                    <a href="#" class="btn theme_btn button_hover">Bắt đầu ngay</a>
                </div>
            </div>
        </div>
        <div class="book_booking_area position">
            <div class="container">
                <div class="book_booking_table">
                    <div class="col-md-3">
                        <h2>Tìm<br> Sách của bạn</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Ngày đến" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Ngày đi" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Thể loại">Thể loại</option>
                                                <option value="1">Tiểu thuyết</option>
                                                <option value="2">Khoa học</option>
                                                <option value="3">Lịch sử</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Tác giả">Tác giả</option>
                                                <option value="1">Nguyễn Nhật Ánh</option>
                                                <option value="2">J.K. Rowling</option>
                                                <option value="3">George Orwell</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <input type='text' class="form-control" placeholder="Tên sách" />
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Tìm kiếm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <section class="books_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Các loại sách tại thư viện</h2>
                <p>Chúng ta đang sống trong một thời đại thuộc về những người trẻ tuổi. Cuộc sống đang trở nên cực kỳ nhanh
                    chóng,</p>
            </div>
         
            <div class="row mb_30 ">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="<?php echo e(asset('image/dacnhantam.jpg')); ?>" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Đắc Nhân Tâm</h4>
                        </a>
                        <h5>100,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="<?php echo e(asset('image/cotienthayphien.jpg')); ?>" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Có tiền thấy phiền</h4>
                        </a>
                        <h5>150,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="<?php echo e(asset('image/nguoiphunuuyluc.jpg')); ?>" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Người phụ nữ uy lực</h4>
                        </a>
                        <h5>120,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="<?php echo e(asset('image/neuthaythienduong.jpg')); ?>" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Nếu thấy thiên đường</h4>
                        </a>
                        <h5>90,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--================ Books Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Cơ sở vật chất tại thư viện</h2>
                <p>Những ai yêu thích hệ thống thân thiện với môi trường.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Nhà hàng</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Câu lạc bộ thể thao</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Hồ bơi</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Thuê xe</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Phòng Gym</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Quán cafe</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức
                            mạnh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_content">
                        <h2 class="title_color">Về thư viện của chúng tôi</h2>
                        <p>Khi bạn ở trên mạng, bạn sẽ có thể gặp phải nhiều quảng cáo làm phiền khi đọc thông tin. Để vượt
                            qua vấn đề này, bạn có thể sử dụng công cụ tiện ích của chúng tôi. Việc sử dụng Internet đang
                            trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                        <a href="#" class="button_hover theme_btn_two">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ampps\www\thayhoLaravel\laravel\resources\views/home.blade.php ENDPATH**/ ?>
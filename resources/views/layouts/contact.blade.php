<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
<!--                <h2 class="title text-center">Contact <strong>Us</strong></h2>-->
<!--                <div id="gmap" class="contact-map">-->
<!--                </div>-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Góp ý</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Tên">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Tiêu đề">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nhập nội dung tin nhắn"></textarea>
                        </div>
                        <div class="form-group col-md-12">
<!--                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">-->
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">thông tin liên lạc</h2>
                    <address>
<!--                        <p>E-Shopper Inc.</p>-->
                        <p>Địa chỉ: {{$user->address}}</p>
                        <p>Số điện thoại: {{$user->phone}}</p>
                        <p>Email: {{$user->email}}</p>
                    </address>
<!--                    <div class="social-networks">-->
<!--                        <h2 class="title text-center">Social Networking</h2>-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-youtube"></i></a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->
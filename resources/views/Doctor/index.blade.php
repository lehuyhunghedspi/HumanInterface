<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='{{asset('css/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{asset('js/doctor/custom.js')}}'></script>
    <style>

        body {
            margin: 40px auto;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            width: 90%;
            margin: auto;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="col-md-2">
        <div class="avatar">
            <img src="{{asset('img/avatar.jpg')}}" class="img-responsive" alt="Cinque Terre">
            <center>
                <h4>BS. Lê Hoàng Vũ</h4>
                <p>Khoa: Chấn thương chỉnh hình</p>
                <p>sdt: 0123456789</p>
                <button type="button" class="btn btn-primary">Cập nhật thông tin</button>
            </center>

        </div>
    </div>
    <div class = "col-md-10">
        <div id="calendar"></div>
    </div>
</div>

<div id="detailModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#step-1">
                                    <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                </a></li>
                            <li ><a href="#step-2">
                                    <p class="list-group-item-text">Tình trang bệnh</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <table class="table">
                                <tr>
                                    <td><b>Mã hồ sơ</b></td>
                                    <td id="idhoso"></td>
                                </tr>
                                <tr>
                                    <td><b>Họ tên</b></td>
                                    <td>Vũ Văn A</td>
                                </tr>
                                <tr>
                                    <td><b>Giới tính</b></td>
                                    <td>Nam</td>
                                </tr>
                                <tr>
                                    <td><b>Tuổi</b></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td><b>Địa chỉ</b></td>
                                    <td>Hà Nội</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12 well">
                            <p>
                                Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                Thành bụng căng cứng.
                                Sốt nhẹ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" role="button">Bắt đầu ca khám</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Huỷ ca khám</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</body>
</html>

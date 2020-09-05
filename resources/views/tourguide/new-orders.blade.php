@extends('layout.tourGuide-layout')

@section('title')

    <h2>New order</h2>
    <p>Welcome <span class="bread-ntd">tourGuide</span></p>

@endsection
@section('content')


    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">

                        <h4>New orders List</h4>
                        {{--                        <div class="add-product">--}}
                        {{--                            <a href="#">Add TourGuide</a>--}}
                        {{--                        </div>--}}
                        <table>
                            <tr>
                                <th>

                                    <label>Check all: <input type="checkbox"
                                                             name="select-all"
                                                             id="select-all"></label>
                                </th>
                                <th>
                                    <button class="btn btn-primary">Duyệt</button>

                                </th>
                                <th>Mã dặt</th>
                                <th>Tg Bắt đầu</th>
                                <th>Tg kết thúc</th>
                                <th>Điểm đến</th>
                                <th>Sô lượng</th>
                                <th>Tg gửi yêu cầu</th>
                            </tr>
                            <tr>

                                <td></td>
                                <td>
                                    <form action="" method="post">
                                        @csrf

                                        <input type="submit" class="btn btn-primary" value="Duyệt">
                                    </form>
                                </td>
                                <td>123</td>
                                <td>12/9</td>
                                <td>14/9</td>
                                <td>Đà nẵng</td>
                                <td>15 người</td>
                                <td>4/9</td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <a>
                                            <button data-toggle="tooltip" title="More Info"
                                                    class="pd-setting-ed" type="submit"><i
                                                    class="fa fa-info-circle" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </form>
                                    <form action="" method="post">
                                        @csrf
                                        <a>
                                            <button data-toggle="tooltip" title="contact"
                                                    class="pd-setting-ed" type="submit"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </form>
                                </td>
                            </tr>

                        </table>

                        {{--//more detail--}}
                        <div class="breadcome-area">
                            <div class="modal fade" id="detailModal" role="dialog">
                                <div class="container">
                                    <div class="modal-dialog modal-dialog-scrollable">

                                        <!-- Modal content-->

                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--                        deactive comfirm--}}
                        <div class="breadcome-area">
                            <div class="modal fade" id="comfirmModal" role="dialog">
                                <div class="container">
                                    <div class="modal-dialog modal-dialog-scrollable">

                                        <!-- Modal content-->
                                        <div class="product-status-wrap" class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title">TourGuide DeActive comfirm</h4>
                                            </div>
                                            <div class="product-status-wrap">

                                                <div class="modal-body">
                                                    <h2 class="text-warning">DeActive this tourGuide?</h2>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger"
                                                            data-dismiss="modal"
                                                            id="do-deactive">
                                                        DeActive
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-primary"
                                                            data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="custom-pagination">
                            {{--                            {{ $list->appends(['sort' => 'id'])->links() }}--}}
                            <ul class="pagination">
                                <li class="page-item">
                                    {{--                                    {{ $list->appends(['sort' => 'votes'])->links() }}--}}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


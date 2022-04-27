@extends('store.template.layout')
@section('content')
<style>
  .img{
    width: 150px;
    height: 150px;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thông tin cửa hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-store"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-store active">Thông tin cửa hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin cửa hàng</h3>
                        </div>
                        @include('store.template.alert')
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="brand" class="table table-bordered table-hover">
                                <tbody>
                                  <tr>
                                    <td style="width:20%">Ảnh đại diện</td><td>
                                      <img src="{{ asset($store->ch_anhdaidien) }}" alt="" class="img"></td>
                                  </tr><tr>
                                    <td>Banner</td>
                                    <td><img src="{{ asset($store->ch_banner) }}" alt="" class="img"></td>
                                  </tr><tr>
                                    <td>Tên cửa hàng</td>
                                    <td>{{ $store->ch_ten}}</td>
                                  </tr><tr>
                                    <td>Địa chỉ</td>
                                    <td>{{ $store->ch_diachi }}</td>
                                  </tr><tr>
                                    <td>Trạng thái</td>
                                    <td>
                                    @if (1==$store->ch_trangthai)
                                        Hoạt động
                                    @else
                                        Đóng cửa
                                    @endif</td>
                                  </tr><tr>
                                    <td>Thông tin</td>
                                    <td>{{ $store->ch_thongtin }}</td>
                                  </tr><tr>
                                    <td>Ngày tạo</td>
                                    <td>{{date('d/m/Y', strtotime($store->ch_ngaytao))}}</td>
                                  </tr><tr>
                                    <td>Thao tác</td>
                                    <td>
                                      <button href="{{ route('order.update', $store->ch_id) }}"
                                          class="btn btn-warning" data-toggle="modal"
                                          data-target="#exampleModalCenter{{$store->ch_id}}">Chỉnh sửa</button>
                                          </td>
                                  </tr>
                                </tbody>
                            </table>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter{{$store->ch_id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Trạng thái</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('store.update', $store->ch_id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="my-input">Tên</label>
                                                <input id="my-input" class="form-control" type="text" name="ch_ten" value="{{$store->ch_ten}}">
                                              </div>
                                              <div class="form-group">
                                                <label for="my-input">Địa chỉ</label>
                                                <input id="my-input" class="form-control" type="text" name="ch_diachi" value="{{$store->ch_diachi}}">
                                              </div>
                                              <div class="form-group">
                                                <label for="my-input">Thông tin</label><br>
                                                <textarea name="ch_thongtin" id="" cols="30" rows="10" class="form-control">{{$store->ch_thongtin}}</textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="my-input">Banner</label>
                                                <input id="my-input" class="form-control" type="file" name="ch_banner">
                                              </div>
                                              <div class="form-group">
                                                <label for="my-input">Ảnh đại diện</label>
                                                <input id="my-input" class="form-control" type="file" name="ch_anhdaidien">
                                              </div>
                                              <div class="form-group">
                                                <label for="my-input">Trạng thái</label>
                                                <select name="ch_trangthai" id="" class="form-control">
                                                  <option value="0" @if ($store->ch_trangthai == 0)
                                                      selected
                                                  @endif>Đóng shop</option>
                                                  <option value="1" @if ($store->ch_trangthai == 1)
                                                    selected
                                                @endif>Hoạt động</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Thoát</button>
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('datatable')

@endpush
@endsection

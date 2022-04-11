@extends('store.template.layout')
@section('content')
<div class="content-wrapper">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Thống kê cửa hàng bán chạy nhất</h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item active">Thống kê</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="" method="get">
            <select name="year" class='form-control' style="display: inline!important;
        width: 15%!important;">
                @for ($i=$range['max'];$i>=$range['min'];$i--)
                <option value='{{$i}}' @if ($i==$request->year) selected @endif>{{$i}}</option>
                @endfor
            </select>
            <select name="month" class='form-control' style="display: inline!important;
        width: 15%!important;">
                @for ($i=1;$i<=12;$i++)
                <option value='{{$i}}' @if ($i==$request->month) selected @endif>{{$i}}</option>
                @endfor
            </select>
            <button type="submit" class="btn btn-primary">Thống kê</button>
        </form>
        <br>
        <div class="chart">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>
                            #    
                        </th>
                        <th>Tên cửa hàng</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                        <td>{{$item->ch_ten}}</td>
                        <td>{{$item->count}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


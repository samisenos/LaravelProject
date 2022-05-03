@component('admin.layouts.content',['title'=>'مدیریت مجوزهای دسترسی'])
    @slot('breadcrump')
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item active">لیست مجوزهای دسترسی</li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست مجوزها</h3>

                    <div class="card-tools">
                        <form action="#">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>ردیف</th>
                            <th>نام مجوز</th>
                            <th>برچسب</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($permissions as $key=>$permission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->label}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm btn-primary" href="{{route('admin.permission.edit',['permission'=>$permission->id])}}">ویرایش</a>
                                    <form action="{{route('admin.permission.destroy',['permission'=>$permission->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger mr-2">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="card-footer ">
                        <ul class="pagination pagination-sm m-0 float-left">
                            {{$permissions->render()}}
                        </ul>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endcomponent

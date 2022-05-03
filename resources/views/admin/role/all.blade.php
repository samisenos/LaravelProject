@component('admin.layouts.content',['title'=>'مدیریت مقام ها '])
    @slot('breadcrump')
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item active">لیست مقام ها </li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست مقام ها</h3>

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
                            <th>نام مقام</th>
                            <th>برچسب</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($roles as $key=>$role)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->label}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-sm btn-primary" href="{{route('admin.role.edit',['role'=>$role->id])}}">ویرایش</a>
                                    <form action="{{route('admin.role.destroy',['role'=>$role->id])}}" method="post">
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
                            {{$roles->render()}}
                        </ul>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endcomponent

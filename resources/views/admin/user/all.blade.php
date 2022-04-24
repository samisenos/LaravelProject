@component('admin.layouts.content',['title'=>'مدیریت کاربران سایت'])
@slot('breadcrump')
    <li class="breadcrumb-item"><a href="#">خانه</a></li>
    <li class="breadcrumb-item active">لیست کاربران</li>
@endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست کاربران</h3>

                    <div class="card-tools">
                        <form action="#">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                        <div class="btn-group-sm mr-1">
                            <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-warning">کاربر مدیر</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>ردیف</th>
                            <th>نام کاربر</th>
                            <th>تاریخ عضویت</th>
                            <th>احراز هویت</th>
                            <th>ایمیل</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($users as $key=>$user)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                @if($user->email_verified_at)
                                    <span class="badge badge-success">تایید شده</span>
                                @else
                                    <span class="badge badge-danger">تایید نشده</span>
                                @endif
                            </td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('admin.user.edit',['user'=>$user->id])}}">ویرایش</a>
                                <form action="{{route('admin.user.destroy',['user'=>$user->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{$users->links()}}
                        <ul class="pagination pagination-sm m-0 float-left">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endcomponent

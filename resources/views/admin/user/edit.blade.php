@component('admin.layouts.content',['title'=>'ویرایش مشخصات کاربر'])
    @slot('breadcrump')
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item active">ویرایش کاربر</li>
    @endslot
    <div class="row">
        <div class="col-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ویرایش مشخصات کاربر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @if($errors->any())
                    <div class="text-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal" action="{{route('admin.user.update',['user'=>$user->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام و نام خانوادگی</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام کامل کاربر را وارد کنید" value="{{old('name',$user->name)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">ایمیل</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل را وارد کنید" value="{{old('email',$user->email)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">پسورد</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="پسورد را وارد کنید" value="{{old('password',$user->password)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-sm-2 control-label">تکرار پسورد</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="پسورد را مجددا وارد کنید" value="{{old('password',$user->password)}}">
                            </div>
                        </div>
                        @if(!$user->email_verified_at)
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="active_user" name="active_user" value="{{old('active_user')}}">
                                    <label class="form-check-label" for="active_user">کاربر را فعال کن</label>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش</button>
                        <button type="submit" class="btn btn-default float-left">لغو</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div><!-- /.row -->
@endcomponent

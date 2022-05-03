@component('admin.layouts.content',['title'=>'ایجاد مقام جدید'])
    @slot('breadcrump')
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item active">ویرایش مقام</li>
    @endslot
    <div class="row">
        <div class="col-lg-12">
            <!-- Horizontal Form -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ویرایش مقام</h3>
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
                <form class="form-horizontal" action="{{route('admin.role.update',['role'=>$role->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$role->name)}}">
                        </div>
                        <div class="form-group">
                            <label for="label" class="col-sm-2 control-label">برچسب</label>
                            <input type="text" class="form-control" id="label" name="label" value="{{old('label',$role->label)}}">
                        </div>
                        <div class="form-group">
                            <label for="permissions[]" class="col-sm-2 control-label">مجوزهای دسترسی</label>
                            <select class="form-control" name="permissions[]" multiple>
                                @foreach(\App\Models\Permission::all() as $permission)
                                    <option value="{{$permission->id}}" {{in_array($permission->id,$role->permissions->pluck('id')->toArray()) ? 'selected' : ''}}> {{$permission->label}} ({{$permission->name}})</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت </button>
                        <button type="submit" class="btn btn-default float-left">لغو</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div><!-- /.row -->
@endcomponent

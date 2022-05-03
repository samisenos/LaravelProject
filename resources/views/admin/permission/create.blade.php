@component('admin.layouts.content',['title'=>'ایجاد مجوز جدید'])
    @slot('breadcrump')
        <li class="breadcrumb-item"><a href="#">خانه</a></li>
        <li class="breadcrumb-item active">ایجاد مجوز جدید</li>
    @endslot
    <div class="row">
        <div class="col-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ایجاد مجوز جدید</h3>
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
                <form class="form-horizontal" action="{{route('admin.permission.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="label" class="col-sm-2 control-label">برچسب</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="label" name="label">
                            </div>
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

@extends('admin.master')
@section('content')

<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->
            {!!Form::open(['url'=>'manufacturer/save','method'=>'POST','class'=>'form-horizontal'])!!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Manufacturer Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="manufacturerName">
                    <span class="text-danger"><strong>{{$errors->has('manufacturerName') ? $errors->first('manufacturerName') : ''}}</strong></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Manufacturer Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="manufacturerDescription" ></textarea>
                    <span class="text-danger"><strong>{{$errors->has('manufacturerDescription') ? $errors->first('manufacturerDescription') : ''}}</strong></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus">
                        <option>Select Publication Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option> 
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Manufacturer Information</button>
                </div>
            </div>
            {!!Form::close()!!}
            <!--</form>-->
        </div>
    </div>
</div>



@endsection
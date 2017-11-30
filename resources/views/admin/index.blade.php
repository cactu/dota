@extends('admin.layouts.master')

@section('main')

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">To do list</h3>
                <div class="actions pull-right">
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <h4>Browser Summary</h4>
                <div id="donut-example"></div>
            </div>
        </div>
    </div>

@endsection
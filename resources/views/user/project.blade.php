@extends('layouts.app')
<!---->
@section('content')
    <div class="container project_container">
        <div class="row">
            <div class="main_content">
                <h3 class="main_hd text-center text-uppercase"><span>OUR PROJECTS</span></h3>
            </div>
            @if(!$projects->isEmpty())
                @foreach($projects as $project)
                    <div class="col-md-4 col-xs-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <div class="project_head">{{str_limit($project->title,50)}}</div>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="project_desc">{{str_limit($project->description,100)}}</div>
                                <div class="project_city">
                                    <span class="pull-left"><strong class="city_label">From:</strong> {{$project->movedFrom->name}}</span>
                                    <span class="pull-right"><strong class="city_label">To:</strong> {{$project->movedTo->name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No Projects Till Now.</p>
            @endif
        </div>
    </div>
    <!---->
@endsection

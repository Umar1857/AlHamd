@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
            @endif
            {{--Session Alert Ends--}}

            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit An FAQ</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="/admin/faqs/{{$faq->id}}" method="post">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
                                        <label>FAQ</label>
                                        <input type="text" name="question" class="form-control" placeholder="Enter FAQ" value="{{ $faq->question }}" required autofocus>

                                        @if ($errors->has('question'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('question') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('answer') ? ' has-error' : '' }}">
                                        <label>Answer</label>
                                        <textarea class="form-control" name="answer" placeholder="Enter a Suitable Answer" rows="5">{{ $faq->answer }}</textarea>

                                        @if ($errors->has('answer'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('answer') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-lg btn-primary pull-right">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
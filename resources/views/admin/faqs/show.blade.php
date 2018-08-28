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

                <div>
                    <a href="/admin/faqs" class="btn btn-md btn-success addNewService"><i class="fa fa-arrow-left"></i> Back</a>
                </div>

            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">View FAQ</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>FAQ</label>
                                    <input type="text" name="question" class="form-control" value="{{$faq->question}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-control" name="answer" rows="5" readonly>{{ $faq->answer }}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->
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
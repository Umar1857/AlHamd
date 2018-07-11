@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Notifications Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="notifications" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Auth::check() && count(Auth::user()->notifications))
                                @foreach(Auth::user()->notifications as $key => $notification)
                                    <tr role="row"
                                        @if(is_null($notification->read_at))
                                        class="success"
                                            @endif>
                                        <td>
                                            <a  class="notification_lnks" notif-id="{{$notification->id}}"
                                                @if(snake_case(class_basename($notification->type )) == 'contact_query')
                                                href="/admin/contact"
                                                @elseif(snake_case(class_basename($notification->type )) == 'quote_query')
                                                href="/admin/quote"
                                                @else
                                                href="/admin/booking"
                                                    @endif>
                                                <div>
                                                    <p class="notification_text notification_msg">
                                                        {{$notification -> data['message']}}
                                                    </p>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="text-left notification_date">
                                                {{$notification->created_at->format('d-m-Y h:i')}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
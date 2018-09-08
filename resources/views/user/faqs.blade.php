@extends('layouts.app')
<!---->
@section('content')
    <div class="faqs">
        <h3>FAQ's</h3>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div class="faq_section">
                    <p id="faq_intro">
                        Here we are some of the most frequently asked questions by our customers via email, query, and on our helpline. If you want to know anything else you can always contact
                        us.
                    </p>

                    <div class="accordion-option">
                        {{--<h3 class="title">Lorem Ipsum</h3>--}}
                        {{--<a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion"></a>--}}
                    </div>
                    <div class="clearfix"></div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($faqs as $faq)
                            <div class="panel panel-default each_faq">
                                <div class="panel-heading" role="tab" id="heading{{$faq->id}}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                                            {{$faq->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$faq->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
                                    <div class="panel-body">
                                        {{$faq->answer}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

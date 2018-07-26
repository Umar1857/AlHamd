<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

@if(!is_null($contact))
<div>
    <h3>New Contact Query From Customer Is: </h3>
    <p><strong>Message Detail: </strong></p>
    <p>{{$contact->message}}</p>
    <br>
    <p><strong>Customer Information: </strong></p>
    <p>{{$contact->name}}</p>
    <p>{{$contact->email}}</p>
    <p>{{$contact->contact_no}}.</p>
</div>

@elseif(!is_null($quote))
<div>
    <h3>New Quote Query From Customer Is: </h3>
    <p><strong>Quote Detail: </strong></p>
    <p>{{$quote->message}}</p>
    <br>
    <p><strong>Customer Information: </strong></p>
    <p>{{$quote->name}}</p>
    <p>{{$quote->email}}</p>
    <p>{{$quote->contact_no}}.</p>
    <br>
    <p><strong>Shipping Detail: </strong></p>
    <p>From City: {{$quote->from->name}}.</p>
    <p>To City: {{$quote->to->name}}.</p>
</div>
@else
    <div>
        <h3>New Booking From Customer Is: </h3>
        <p><strong>Booking Detail: </strong></p>
        <p>{{$booking->message}}</p>
        <br>
        <p><strong>Customer Information: </strong></p>
        <p>{{$booking->fname.' '.$booking->lname}}</p>
        <p>{{$booking->email}}</p>
        <p>{{$booking->number}}.</p>
        <br>
        <p><strong>Shipping Detail: </strong></p>
        <p>From Address: {{$booking->from_address}}.</p>
        <p>From City: {{$booking->from->name}}.</p>
        <p>To Address: {{$booking->to_address}}.</p>
        <p>To City: {{$booking->to->name}}.</p>
    </div>
@endif

</body>
</html>
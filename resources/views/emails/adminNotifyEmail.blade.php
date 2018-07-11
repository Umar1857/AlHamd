<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

@if(!is_null($contact))
<div>
    <h3>New Contact Query From Customer Is: </h3>
    <p>{{$contact->message}}</p>
    <br>
    <p>Customer Information: </p>
    <p>{{$contact->name}}</p>
    <p>{{$contact->email}}</p>
    <p>{{$contact->contact_no}}.</p>
</div>

@elseif(!is_null($quote))
<div>
    <h3>New Quote Query From Customer Is: </h3>
    <p>{{$quote->message}}</p>
    <br>
    <p>Customer Information: </p>
    <p>{{$quote->name}}</p>
    <p>{{$quote->email}}</p>
    <p>{{$quote->contact_no}}.</p>
    <br>
    <p>Movement: </p>
    <p>From City: {{$quote->from->name}}.</p>
    <p>To City: {{$quote->to->name}}.</p>
</div>
@endif

</body>
</html>
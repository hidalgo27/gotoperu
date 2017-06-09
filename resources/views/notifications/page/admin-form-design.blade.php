@extends('layouts.notifications.inquire')
@section('content')
    <tr>
        <td style="padding:0px 50px 0px 50px">
            <p style="font-size:18px">{{$name}}</p>
            <p>Este usuario envio un mensaje de GotoPeru.Travel del formulario "Design Your TRIP".</p>
            <center style="background:#f6f6f6; padding:10px;">
                <table>
                    <tbody>
                    <tr>
                        <td style="text-align:left">

                            <p><strong>Email: {{$email}}</strong></p>
                            <p><strong>Telephone: {{$phone}}</strong></p>
                            <p><strong>Travel Date: {{$date}}</strong></p>
                            <p><strong>Number of Travelers: {{$number}}</strong></p>

                            <p><strong>Category Hotel: {{$category}}</strong></p>
                            <p><strong>Trip Length: {{$days}}</strong></p>

                            <p><strong>Comment: {{$description}}</strong></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
@stop
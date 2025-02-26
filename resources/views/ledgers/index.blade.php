<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud index</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-4xl flex justify-center p-10">ระบบบันทึกรายรับรายจ่ายประจำเดือน</h1>
        <a href="{{ route('create')}}" class="p-5 bg-green-400 rounded-xl">เพิ่มรายการ</a>
    </div>
    <div>
        {{-- @foreach ($ledgers as $ledger)
            <div>
                <div>{{$ledger->id}}</div>
                <div>{{$ledger->type}}</div>
                <div>{{$ledger->list_name}}</div>
                <div>{{$ledger->amount}}</div>
                <div>{{$ledger->payment_date}}</div>
            </div>
        @endforeach --}}
    </div>
</body>
</html>
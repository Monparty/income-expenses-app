<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สร้างรายการ</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-4xl flex justify-center p-10">สร้างรายการ</h1>
        <a href="{{ route('ledgers')}}" class="p-5 bg-blue-400 rounded-xl">กลับ</a>
        <form action="{{ route('ledgers.store')}}" method="post" enctype="multipart/form-data" class="grid gap-4 text-lg p-10">
            @csrf
            <div>
                <label for="type">ประเภท</label>
                <select name="type" id="type" class="border-2 border-gray-500">
                    <option value="">-</option>
                    <option value="รายรับ">รายรับ</option>
                    <option value="รายจ่าย">รายจ่าย</option>
                </select>
            </div>
            <div>
                <label for="list_name">รายการ</label>
                <input type="text" name="list_name" id="list_name" class="border-2 border-gray-500">
            </div>
            <div>
                <label for="amount">จำนวนเงิน</label>
                <input type="number" name="amount" id="amount" class="border-2 border-gray-500">
            </div>
            <div>
                <label for="payment_date">วันที่</label>
                <input type="date" name="payment_date" id="payment_date" class="border-2 border-gray-500">
            </div>
            <button type="submit" class="p-5 bg-green-200">บันทึก</button>
        </form>
    </div>
</body>
</html>
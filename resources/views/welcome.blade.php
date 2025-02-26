<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ทดสอบความสามารถด้าน UX/UI</title>
    @vite('resources/css/app.css')
    <style>
        .bgimg {
            background-image: url("data:image/jpeg;base64,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");
            background-size: 100% 100vh;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
            padding: 40px 0;
        }
    </style>
</head>
<body>
    <div class="bgimg">
        <div class="container mx-auto" >
            <h1 class="text-4xl flex justify-center p-10">ทดสอบความสามารถด้าน UX/UI</h1>
        </div>
        <div class="flex justify-center items-center w-full grid-cols-4 gap-4">
            <img src="{{ asset('imgs/p1.png') }}" class="w-[300px] h-[300px] object-cover" id="watthai1">
            <img src="{{ asset('imgs/p2.png') }}" class="w-[300px] h-[300px] object-cover" id="watthai2">
            <img src="{{ asset('imgs/p3.png') }}" class="w-[300px] h-[300px] object-cover" id="watthai3">
            <img src="{{ asset('imgs/p4.png') }}" class="w-[300px] h-[300px] object-cover" id="watthai4">
        </div>
        <div class="flex justify-center gap-5 mt-4">
            <button class="w-4 h-4 rounded-full bg-gray-400 focus:bg-blue-950 cursor-pointer" onclick="setImg1()" id="btn1"></button>
            <button class="w-4 h-4 rounded-full bg-gray-400 focus:bg-blue-950 cursor-pointer" onclick="setImg2()" id="btn2"></button>
        </div>
    </div>
    <a href="{{ route('ledgers')}}">แบบทดสอบ dev</a>

    <script>
        function setImg1() {
            document.getElementById('watthai1').setAttribute("src", "{{ asset('imgs/m1.png') }}");
            document.getElementById('watthai2').setAttribute("src", "{{ asset('imgs/m2.png') }}");
            document.getElementById('watthai3').setAttribute("src", "{{ asset('imgs/m3.png') }}");
            document.getElementById('watthai4').setAttribute("src", "{{ asset('imgs/m4.jpg') }}");
            document.getElementById('btn1').style.backgroundColor = "#162456";
            document.getElementById('btn2').style.backgroundColor = "#99a1af";
        }

        function setImg2() {
            document.getElementById('watthai1').setAttribute("src", "{{ asset('imgs/p1.png') }}");
            document.getElementById('watthai2').setAttribute("src", "{{ asset('imgs/p2.png') }}");
            document.getElementById('watthai3').setAttribute("src", "{{ asset('imgs/p3.png') }}");
            document.getElementById('watthai4').setAttribute("src", "{{ asset('imgs/p4.png') }}");
            document.getElementById('btn2').style.backgroundColor = "#162456";
            document.getElementById('btn1').style.backgroundColor = "#99a1af";
        }

        let shouldRunFunction1 = true;

        function switchFunctions() {
        if (shouldRunFunction1) {
            setImg1();
        } else {
            setImg2();
        }
        shouldRunFunction1 = !shouldRunFunction1;
        }

        setInterval(switchFunctions, 3000);
    </script>
</body>
</html>
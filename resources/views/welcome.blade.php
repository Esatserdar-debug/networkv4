@extends('layouts.main')

@section('title', 'Anasayfa')

@section('content')
    
    <script>
        //['Data', 2].forEach(alert)
        let mesaj = ['Merhaba', 'Foreach', 'Deneme'];
        let me  = ['Değişken iki', 'And Me'];
        console.log(me, mesaj);
        //[mesaj, me].forEach(alert);
        
        const birthday = '29.11.2001';
        //birthday = '01.01.2000'; const değişmeyen veri yapısına sahip olduğu hata verecektir.
        console.log(birthday);

        let data = 'Merhaba';
        data = 123456;

        console.log(data);

    </script>
@endsection

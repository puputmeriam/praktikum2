<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templating Blade Laravel</title>
</head>
<body>
    <header>
        <h1>WELCOME TO WEBSITE RPL</h1>
        <nav>
            <a href="/rpl">HOME</a>
            |
            <a href="/rpl/tentang">TENTANG</a>
            |
            <a href="/rpl/kontak">KONTAK</a>
        </nav>
    </header>
    <hr/>
<br/>
<br/>

<h3>@yield('judul_halaman')</h3>

@yield ('konten')

<br/>
<br/>
    <hr/>
<footer>
    <p>$copy; <a href="#">www.mywebsite.com</a> 2022</p>
</footer>


</body>
</html>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel-Primi-Passi</title>
  </head>
  <body>

    <h1>Home di @php echo $nome, $cognome @endphp</h1>
    <h2>Benvenuto nella home di questo sito inutilissimo :)</h2>
    <div class="">
      Scegli pure la sezione che vuoi visitare:
    </div>
    <div class="">
      <a href="/pippo">Sezione 1</a>
    </div>
    <div class="">
      <a href="/sezione2">Sezione 2</a>
    </div>
    {{-- possiamo usare il metodo route che ci permette di dare un nome alla nostra rotta che 
    dovra poi essere specificato come name dopo il get in web.php --}}
    <div class="">
      <a href="{{ route('section3') }}">Sezione 3</a>
    </div>

  </body>
</html>

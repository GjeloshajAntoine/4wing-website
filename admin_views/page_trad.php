<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>traduction page: {{@page_name}}</h1
    <!-- onglets -->
    <a href="/admin/tradpage/{{@pagename}}/fr">fr</a>
    <a href="/admin/tradpage/{{@pagename}}/nl">nl</a>
    <a href="/admin/tradpage/{{@pagename}}/en">en</a>

    <form class="" action="http://localhost/4wing-website/admin/projet/{{@id}}/editdata/{{@lg}}" method="post">
      <repeat group="{{ @all_trad }}" value="{{ @trad }}">
          <input type="text" value="{{ @trad.field }}" disabled>
          <input type="text" value="{{ @trad.trad}}" name="{{ @trad.id }}" >
          <br/>
      </repeat>
      <input type="submit">

    </form>
  </body>
</html>
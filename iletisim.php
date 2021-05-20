<!doctype html>
<html lang="tr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="css/iletisim.css" rel="stylesheet">
    <title>İletişim</title>
  </head>
  <body>
    <header>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
    </header>
    <form action="bilgi.php" method="POST">
        <fieldset>
            <legend><h1>İletişim</h1></legend>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="ad" placeholder="Ad" aria-label="First name" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="soyad" placeholder="Soyad" aria-label="Last name" required>
                </div>
            </div><br>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cinsiyet" id="flexRadioDefault1" value="Erkek" required>
                <label class="form-check-label" for="flexRadioDefault1">Erkek</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cinsiyet" id="flexRadioDefault2" value="Kadın" required>
                <label class="form-check-label" for="flexRadioDefault2">Kadın</label>
            </div><br>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email Adres</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="sifre" placeholder="Password" required>
                <label for="floatingPassword">Şifre</label>
            </div><br>

            <select class="form-select" name="ulke" aria-label="Default select example" required>
                <option value="Almanya">Almanya</option>
                <option value="Amerika">Amerika</option>
                <option value="Portekiz">Portekiz</option>
                <option value="Rusya">Rusya</option>
                <option selected value="Türkiye">Türkiye</option>
            </select><br>

            <input class="form-control" list="datalistOptions" id="exampleDataList" name="sehir" placeholder="Şehir" required>
            <datalist id="datalistOptions">
              <option value="Ankara">
              <option value="Bursa">
              <option value="İstanbul">
              <option value="İzmir">
              <option value="Mardin">
              <option value="Sakarya">
            </datalist><br>
            
            <div class="mb-3">
                <input class="form-control" type="file" name="dosya" id="formFile" required>
            </div>

            <input type="range" class="form-range" id="customRange1">           

            <div class="form-floating">
                <textarea class="form-control" name="mesaj" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Mesaj</label>
            </div><br>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" required>
                <label class="form-check-label" for="flexSwitchCheckChecked">Okudum, Kabul Ediyorum.</label>
            </div><br>

            <label>
                <button class="btn btn-primary" type="reset">Temizle</button>
            </label>

            <label>
                <button class="btn btn-primary" type="submit">Gönder</button>
            </label>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <footer>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
    </footer>
  </body>
</html>
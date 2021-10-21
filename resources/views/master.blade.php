<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Samsara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
  </body>
  <style>

  footer#custom-footer {
    font-family: Roboto,sans-serif;
    position: relative;
    padding: 80px 0;
    background: #00263e;
  }

  footer#custom-footer .list-flat a {
    font-size: 13px;
    line-height: 22px;
    font-weight: 400;
  }

  footer#custom-footer .title a {
    font-size: 16px;
    font-weight: 600;
    line-height: 30px;
    margin-bottom: 1em;

  }

  footer#custom-footer .list-flat a,
  footer#custom-footer .title a {
    text-decoration: none;
    color: #fff;
  }

  footer#custom-footer ul {
    list-style-type: none;
    padding-left: 0;
  }

  footer#custom-footer li {
    margin-bottom: 12px !important;

  }

  footer#custom-footer .web-terms li {
    display: inline;
  }

  footer#custom-footer .lang-select {
    width: 216px;
    padding: 15px;
    border: 1px solid #b2bec5;
  }

  footer#custom-footer .lang-select img {
      height: 23px;
      width: 23px;
  }

  footer#custom-footer .select-region {
    color: #fff;
    background: url(https://www.samsara.com/app/images/white-dropdown-arrow.png);
    background-size: 38px;
    background-position: 100%;
    background-repeat: no-repeat;
    margin-left: 10px;
    padding-right: 0;
    line-height: 22px;
    width: 100%;
    font-size: 13px;
    font-weight: 400;
    opacity: .9;
    border: 0;
    appearance: none;
    cursor: pointer;
    padding: 0 12px 0 0;
    border-radius: 0;
  }

  footer#custom-footer .copyright {
    font-size: 16px;
    line-height: 30px;
    font-weight: 400;
    color: #fff;
    margin: 20px 0;
    text-align: left;
  }

  footer#custom-footer .copyright img{
    width: 22px;
    height: 22px;
    margin-left: 40px;
    margin-right: 0;
  }

  footer#custom-footer .under-footer {
    border-top: 1px solid #4c5e64;
    padding-top: 20px;
  }


  </style>
</html>

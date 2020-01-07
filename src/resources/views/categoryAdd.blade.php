<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> FeelReal Admin </title>
    <link href="http://93.119.155.54:1100/css/style.css?ver=05092019" rel="stylesheet">
    <link href="http://93.119.155.54:1100/css/reset.css" rel="stylesheet">
    <link rel="stylesheet" href="http://93.119.155.54:1100/css/jquery.fancybox.min.css"/>
</head>
<body>
<header class="header ">
    <div class="header__wrap row">
        <span class="header__name">FeelReal Admin Panel</span>
        <span class="header__title">Запахи</span>
        <a href="/admin/logout"><img src="http://93.119.155.54:1100/img/Admin.svg" alt="Logout"></a>
    </div>
</header>
<div class="row content">
    <div class="sidebar">
        <div class="sidebar__heading">
            <img src="http://93.119.155.54:1100/img/avatar.svg" alt="Avatar" class="sidebar__avatar">
            <span>Добро пожаловать, admin</span>
        </div>
        <a class="sidebar__menu"><img src="http://93.119.155.54:1100/img/menu.svg" alt="Menu-open"></a>
        <ul class="sidebar__list">
            <li>
                <a href="/" class="sidebar__link">Главная</a>
                <a href="/smells" class="sidebar__link">Запахи</a>
                <a href="/categories" class="sidebar__link">Категории</a>
            </li>
        </ul>
    </div>
    <div class="main">

        <div class="main__wrap" id="primary">
            <h2 class="main__title">Добавить категорию</h2>
            <div id="modalAdd">
                <form method="post" id="perfume_form" class="main__add">
                    <div class=" main__item">
                        <label class="main__clause">Имя </label>
                        <input id="name" name="name" type="text" class="main__input" placeholder="Введите имя">
                        @error('name')
                        <span style="color: darkred">
                                <h3>{{ $message }}</h3>
                            </span>
                        @enderror
                    </div>
                    <div class="row main__item main__location">
                        <button id="save_perfumes_button" type="submit" class="main__save">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
</body>
</html>

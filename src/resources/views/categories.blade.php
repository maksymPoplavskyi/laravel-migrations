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
        <span class="header__title">Категории</span>
        <a href="/logout"><img src="http://93.119.155.54:1100/img/Admin.svg" alt="Logout"></a>
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
            <h2 class="main__title">Список категорий</h2>
            <a href="categories/add" data-fancybox="" class="main__button">Добавить категорию</a>
            <div class="main__container">
                <table class="main__table ">
                    <tr class=" row  main__inner smells">
                        <th class="main__name">ИД</th>
                        <th class="main__name">Имя</th>
                        <th class="main__name">Дата создания</th>
                        <th class="main__name">Дата обновления</th>
                        <th class="main__name">Действие</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr class=" row  main__inner main__info smells">
                            <td>{{$category['id']}}</td>
                            <td>{{$category['name']}}</td>
                            <td>{{$category['created_at']}}</td>
                            <td>{{$category['updated_at']}}</td>
                            <td class="row main__action">
                                <div><img onclick="deletePerfume(9)" src="http://93.119.155.54:1100/img/delete.svg"
                                          alt="delete"></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
